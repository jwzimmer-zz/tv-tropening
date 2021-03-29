#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Mar  2 13:30:10 2021

@author: jzimmer1
"""

import pandas as pd
from pandas_ods_reader import read_ods
import json
import matplotlib.pyplot as plt
import seaborn as sns
import numpy as np
from numpy import linalg
from numpy.linalg import svd
from collections import Counter
from sklearn.decomposition import TruncatedSVD
from mpl_toolkits.mplot3d import Axes3D
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.linear_model import LinearRegression

# === === Helper functions === ===
def write_json(data, filename):
    with open(filename,"w") as f:
        json.dump(data,f)
    return None
def get_json(filename):
    with open(filename) as f:
        jsonobj = json.load(f)
    return jsonobj

def add_character_name(row,character_map):
    return tuple(character_map[character_map['ID'] == row['unnamed.1']]['Character display name'])[0]

def drop_emoji_columns(df1):
    rangeset = set([str(i) for i in range(235,267)])
    for column_title in df1.columns:
        if column_title[-3:] in rangeset:
            df1 = df1.drop(column_title, 1)
        else:
            pass
    return df1

def drop_hard_soft(df1):
    # because BAP98 and BAP183 are both listed as hard,soft, drop those two cols
    for column_title in df1.columns:
        if column_title in ("BAP98","BAP183"):
            #print("col title",column_title)
            df1 = df1.drop(column_title, 1)
        else: pass
    return df1

def make_column_dict(df1,map1):
    column_dict = {}
    for column_title in df1.columns:
        if 'BAP' in column_title:
            traits = map1[map1['ID'] == column_title]
            new_title = tuple(traits['low/left anchor'])[0]+"<->"+tuple(traits['high/right anchor'])[0]
            column_dict[column_title] = new_title
    return column_dict

def dropxtracols(df1, coldict):
    dfcols = list(df1.columns)
    #print(dfcols)
    #print(coldict)
    for col in dfcols:
        if col not in coldict:
            df1  = df1.drop(col,1)
    df1.rename(columns=coldict, inplace=True)
    return df1

def normalize_scores(score):
    # to normalize and center at 0... scores between 50, 100 should be (x - 50)/50, e.g. 86.5 --> 36.5 --> 0.73...
    # scores between 0, 49 should be -1*((50 - x)/50), e.g. 16 --> 34 --> 0.68 --> -0.68
    if score >= 50:
        new_score = (score - 50.0)/50.0
    else:
        new_score = (-1)*(50.0 - score)/50.0
    return new_score

def normalize(df,column_titles,normfn):
    # note we can pass in a different way to norm the scores via normfn arg
    for i in range(df.shape[0]):
        for column_title in column_titles:
            # i is the row
            #print(i, column_title, df.iloc[i, df.columns.get_loc(column_title)])
            try:
                score = df.iloc[i, df.columns.get_loc(column_title)]
                new_score = normfn(score)
                if abs(new_score) >= 1:
                    print(i, column_title, df.iloc[i, df.columns.get_loc(column_title)], new_score)
                df.iloc[i, df.columns.get_loc(column_title)] = new_score
            except:
                print(i, column_title, df.iloc[i, df.columns.get_loc(column_title)],
                      type(df.iloc[i, df.columns.get_loc(column_title)]))       
    return df

def SVD(X):
  # function from example in docs iirc
  # Data matrix X, X doesn't need to be 0-centered
  n, m = X.shape
  # Compute full SVD
  U, Sigma, Vh = np.linalg.svd(X, 
      full_matrices=False, # It's not necessary to compute the full matrix of U or V
      compute_uv=True)
  # Transform X with SVD components
  X_svd = np.dot(U, np.diag(Sigma))
  return X_svd

def wordscores(n=7):
    # n must be at least 3
    # SVD and charts for the word scores... not well organized, sorry
    df1 = pd.read_csv("http://pdodds.w3.uvm.edu/permanent-share/VAD_GES_PDSdata.txt",sep="\t")
    svdscores = TruncatedSVD(n_components=n,n_iter=1000,random_state=42)
    dfscores = df1.copy()
    dfscores = dfscores.drop(['word','structure.1'],axis=1)
    xscores = dfscores.to_numpy()
    svdscores.fit(xscores)
    svdscores2=svdscores.transform(xscores)
    #f = plt.figure(1)
    #plt.matshow(svdscores2[:40])
    evr = svdscores.explained_variance_ratio_
    evrs = svdscores.explained_variance_ratio_.sum()
    ssv = svdscores.singular_values_
    print("Exp var ratio: ",evr)
    print("Exp var ratio sum:  ",evrs)
    print(ssv[:10])
    # saved as (dict) "word_scores_3d_svd_03-14-21.json"
    score3d = svdweightchart(dfscores,svdscores)
    #svdweightchart(dfscores,svdscores,d="2ndD")
    #svdweightchart(dfscores,svdscores,d="3rdD")
    return svdscores,xscores,evr,evrs,ssv,score3d   

def svdweightchart(df1,svd,d="1stD"):
    n=min(10,len(df1.columns))
    lincombos3d = pd.DataFrame()
    lincombos3d["Attribute"] = [x for x in df1.columns]
    lincombos3d["1stD"] = svd.components_[0]
    lincombos3d["2ndD"] = svd.components_[1]
    lincombos3d["3rdD"] = svd.components_[2]
    sorteddf = lincombos3d.sort_values(by=d)
    top_n_top = sorteddf.iloc[0:n]
    top_n_bottom = sorteddf.iloc[-n:].iloc[::-1]
    plotguy = pd.concat([top_n_top,top_n_bottom])
    #print(plotguy)
    sns.barplot(plotguy[d],plotguy["Attribute"])
    return lincombos3d

# ==== generate the character data ====
class CharData():
    def __init__(self,
                 addnames=True,
                 dropemoji=True,
                 renameBAPtraits=True,
                 dropcolsfromnandstd=True,
                 verbose=True,
                 selectminratings=True,
                 drophardsoft=True,
                 normscores=True,
                 normfn=normalize_scores,
                 path="characters-aggregated/characters-aggregated.ods"):
        self.path = path
        self.df = read_ods(path, 1)
        self.df_n = read_ods(path, 2)
        self.df_std = read_ods(path,3)
        # the power, danger, arousal, valence, structure, goodness, etc., scores
        self.word_scores = pd.read_csv("http://pdodds.w3.uvm.edu/permanent-share/VAD_GES_PDSdata.txt",sep="\t")
        if verbose:
            x1 = Counter([x for x in self.df.columns])
            print("The 5 most common columns to start: ",x1.most_common(5))
        # The codebook.html file tells you the character names and "universe" listed above as "unnamed.1".
        codebookmaps = pd.read_html("characters-aggregated/codebook.html")
        self.character_map, self.bap_map = codebookmaps[0], codebookmaps[1]
        # add a column for the character names
        if addnames:
            self.df['name'] = self.df.apply(lambda row: add_character_name(row,self.character_map), axis=1)
        # drop  the emoji  traits
        if dropemoji:
            self.df = drop_emoji_columns(self.df)
        if drophardsoft:
            self.df = drop_hard_soft(self.df)
        if renameBAPtraits:
            self.coldict =  make_column_dict(self.df,self.bap_map)
            # Correcting misspelling  (BAP73),  weird quote formatting (BAP140), and 2,@ symbol (BAP71)
            self.coldict['BAP140']='right-brained<->left-brained'
            self.coldict['BAP71']='down to earth<->head in clouds'
            self.coldict['BAP73']= 'open to new experiences<->uncreative'
            self.df.rename(columns=self.coldict, inplace=True)
            if verbose:
                x1 = Counter([x for x in self.df.columns])
                print("The 5 most common columns after renaming: ",x1.most_common(5))
        if dropcolsfromnandstd:
            self.df_n = dropxtracols(self.df_n,self.coldict)
            self.df_std  = dropxtracols(self.df_std,self.coldict)
            if verbose:
                print("df: ", self.df.shape)
                #print([x for x in self.df.columns if "<->" not in x])
                #x1 = Counter([x for x in self.df.columns])
                #print("The 5 most common columns after dropping cols: ",x1.most_common(5))
                #print(self.df.head())
                print("df_n ", self.df_n.shape)
                #x1 = Counter([x for x in self.df_n.columns])
                #print("The 5 most common columns after dropping cols from df_n: ",x1.most_common(5))
                #print(self.df_n.head())
                print("df_std ",self.df_std.shape)
                #x1 = Counter([x for x in self.df_std.columns])
                #print("The 5 most common columns after dropping cols from df_std: ",x1.most_common(5))
        if selectminratings:
            self.df = self.get_chars_with_at_least_min_n_ratings_per_trait()
            if verbose:
                print("After dropping chars with low n ratings, df: ",self.df.shape)
                #print("Cols not in minchars but in df: ",[x for x in self.minchars.columns if x not in  self.df.columns])
                #x1 = Counter([x for x in self.minchars.columns])
                #print("The 5 most common columns after taking out chars: ",x1.most_common(5))
                #print(self.minchars.head())
        if normscores:
            column_titles = [x for x in self.df.columns if "<->" in x]
            self.df = normalize(self.df, column_titles, normfn)
            
            
    def get_chars_with_at_least_min_n_ratings_per_trait(self,
                                              n=42.77375/2.0,
                                              verbose=False,
                                              chart=False):
        self.df_n['min']=self.df_n.apply(lambda row: min(row), axis=1)
        if verbose:
            print("df_n: ",self.df_n.shape)
            print("Avg min: ",sum(self.df_n['min'])/len(self.df_n['min']))
            print("Std for n: ",np.std(self.df_n['min']))
        if chart:
            # matplotlib histogram
            plt.hist(self.df_n['min'], color = 'blue', edgecolor = 'black',
                      bins = 100)
            
            # Add labels
            plt.title('Histogram of min per trait per char')
            plt.xlabel('cells of df_n')
            plt.ylabel('number')
        #select characters in self.df who have min ratings >= n for all cols in self.coldict
        newchars = pd.DataFrame()
        for chari in range(self.df_n.shape[0]):
            if self.df_n.iloc[chari].min() >= n:
                newchars = newchars.append(self.df.iloc[chari])
        if verbose:
            print("newdf:  ",newchars.shape)
            print(newchars.head())
        return newchars
    
    def runSVD(self, df1, n=None, i=1000, verbose=False, chart=False):
        df1 = df1.drop('unnamed.1',axis=1)
        df1 = df1.drop('name',axis=1)
        if n==None:
            n=df1.shape[1]-1
        X = df1.to_numpy()
        # could do some double-checking b/w sklearn and np.linalg?
        # X_svd = SVD(X)
        svd = TruncatedSVD(n_components=n, n_iter=i, random_state=42)
        svd.fit(X)
        X_svd2 = svd.transform(X)
        if chart:
            f=plt.figure(1)
            plt.matshow(X_svd2)
            f.show()
        evr = svd.explained_variance_ratio_
        evrs = svd.explained_variance_ratio_.sum()
        ssv = svd.singular_values_
        if verbose:
            print("Exp var ratio: ",evr)
            print("Exp var ratio sum:  ",evrs)
            print(ssv)
        return X_svd2,svd,evr,evrs,ssv
    
    def linear_reg(self,df,features,predicted_trait,verbose=True,chart=True):
        train, val = train_test_split(df, test_size=0.2, random_state=42)
        #print(df.head())
        if verbose:
            print(train.shape, val.shape)
        y_train = train[predicted_trait]
        #print(y_train.head())
        other_features = [x for x in features if x!=predicted_trait]
        x_train = train[other_features]
        #print(x_train.head())
        lrmodel = LinearRegression()
        lrmodel.fit(x_train,y_train)
        
        y_pred = lrmodel.predict(val[other_features])
        val_actual = val[predicted_trait]
        
        training_accuracy = lrmodel.score(x_train,y_train)
        val_accuracy = lrmodel.score(val[other_features],val_actual)
        if verbose:
            print("X_train: ", x_train.shape)
            #print(X_train)
            print("Y_train: ", y_train.shape)
            #print(Y_train)
        prediction =  lrmodel.predict(x_train)
        if verbose:
            #print(val["orderly<->chaotic"])
            #print(y_pred)
            # uncomment to print
            print("Training Accuracy: ", training_accuracy)
            print("Validation accuracy: ",val_accuracy)
        
        return y_train, x_train, val, y_pred, lrmodel, training_accuracy, val_accuracy, prediction
    
    def find_shared_anchor_words(self):
        anchors = [x.split("<->") for x in self.coldict.values()]
        left = [x[0] for x in anchors]
        right = [x[1] for x in anchors]
        #saved as "rightanchorwords03-14-21.json","leftanchorwords03-14-21.json"
        allanchors = Counter(right+left)
        repeats = [x for x in c.coldict.values() if ('serious' in x or 'bold' in x or 'awkward' in x or 'suspicious' in x or 'spontaneous' in x or 'warm' in x or 'shy' in x or 'trusting' in x or 'playful' in x or 'charming' in x)]
        return None
    
    def realign_anchors(self,method="ourweights"):
        left=get_json("leftanchorwords03-14-21.json")
        right=get_json("rightanchorwords03-14-21.json")
        anchorwords = left+right
        if method == "wordscores":
            # the svd results per attribute and 3 dimensions
            dfscores = pd.DataFrame().from_dict(get_json("word_scores_3d_svd_03-14-21.json"))
            # the words and their scores in each attribute
            # allscores = pd.from_dict(get_json("allscoredwords03-14-21.json"))
            #newdf = pd.DataFrame()
            # for anc in anchorwords:
            #   try:
            #     newdf = newdf.append(allscores[allscores['word']==anc])
            #   except: pass
            # saved as "anchorscores03-14-21.json"
            anchorscores = pd.DataFrame().from_dict("anchorscores03-14-21.json")
            anchorscores=anchorscores.drop("structure.1",axis=1)
            # add a column for the sum of attribute weights in 3 dim
            dfscores['sum']=dfscores.sum(axis=1)
            # 1stD, 2ndD, 3rdD, or sum
            whichcolumn="1stD"
            # to make a dict attribute : weight using whichcolumn
            dfd = dfscores[["Attribute",whichcolumn]].to_dict()
            newd={}
            for i in range(8):
                i = str(i)
                newd[dfd["Attribute"][i]]=dfd[whichcolumn][i]
            # not sure if this makes sense to do or not
            def new_sum(row):
                s =  0
                for a in newd:
                    s +=  row[a]*newd[a]
                return s
            anchorscores['sum'] =  anchorscores.apply(lambda row: new_sum(row),axis=1)
            # using this sum, which traits have L or R higher saved as "lor116rol81_03-14-21.json"
            missingwords = []
            leftscore={}
            rightscore={}
            # using valence, L or R higher saved as "lor90rol66_03-14-21.json"
            # using danger, saved as "lor71rol85_03-14-21.json"
            # using goodness, saved as "lor90rol66goodness_03-14-21.json"
            for i in range(len(left)):
                word = left[i]
                if word in list(anchorscores['word']):
                    leftscore[word]=tuple(anchorscores[anchorscores['word']==left[i]]['valence'])[-1]
                else:
                    missingwords.append(word)
            for i in range(len(right)):
                word = right[i]
                if word in list(anchorscores['word']):
                    rightscore[word]=tuple(anchorscores[anchorscores['word']==right[i]]['valence'])[-1]
                else:
                    missingwords.append(word)
            #missing words saved as "anchors_no_scores03-14-21.json"
            lor = []
            rol = []
            for traitd in c.coldict.values():
                lw,rw = traitd.split("<->")
                if lw in leftscore:
                    lc = leftscore[lw]
                else:
                    lc = None
                if rw in rightscore:
                    rc = rightscore[rw]
                else:
                    rc = None
                if rc != None and lc != None:
                    if lc > rc:
                        lor.append(traitd)
                    else:
                        rol.append(traitd)
        if method == "ourweights":
            pass
            
            
            
            
        
        return None
        
        

predictedtrait1d = "orderly<->chaotic"
most_extreme_features_in_1st_svd_dimension = ["diligent<->lazy",
                                          "competent<->incompetent",
                                          "workaholic<->slacker",
                                          "valedictorian<->drop out",
                                          "works hard<->plays hard",
                                          "loyal<->traitorous",
                                          "studious<->goof-off",
                                          "high IQ<->low IQ",
                                          "orderly<->chaotic",
                                          "prestigious<->disreputable",
                                          "disorganized<->self-disciplined",
                                          "ludicrous<->sensible",
                                          "barbaric<->civilized",
                                          "juvenile<->mature",
                                          "lewd<->tasteful",
                                          "scandalous<->proper",
                                          "deranged<->reasonable",
                                          "rude<->respectful",
                                          "gossiping<->confidential",
                                          "selfish<->altruistic"]
c = CharData()
#X_svd, svdmodel, evr, evrs, ssv = c.runSVD(c.df,verbose=True,chart=True)













