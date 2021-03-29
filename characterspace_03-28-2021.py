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

def add_work_name(row,character_map):
    return tuple(character_map[character_map['ID'] == row['unnamed.1']]['Fictional work'])[0]

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
    # saved in characterspace_03-02-2021.py
    return None
 
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
        #self.word_scores = pd.read_csv("http://pdodds.w3.uvm.edu/permanent-share/VAD_GES_PDSdata.txt",sep="\t")
        if verbose:
            x1 = Counter([x for x in self.df.columns])
            print("The 5 most common columns to start: ",x1.most_common(5))
        # The codebook.html file tells you the character names and "universe" listed above as "unnamed.1".
        codebookmaps = pd.read_html("characters-aggregated/codebook.html")
        self.character_map, self.bap_map = codebookmaps[0], codebookmaps[1]
        # add a column for the character names
        if addnames:
            self.df['name'] = self.df.apply(lambda row: add_character_name(row,self.character_map), axis=1)
            # also want to add which fictional work a character is from as a level in the dataframe
            self.df['work'] = self.df.apply(lambda row: add_work_name(row,self.character_map), axis=1)
            if verbose:
                print(self.df[["name","work"]].head())
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
        # saved in "characterspace_03-02-2021.py"
        return None
    
    def find_shared_anchor_words(self):
        # saved in "characterspace_03-02-2021.py"
        return None
    
    def realign_anchors(self,method="ourweights"):
        left=get_json("leftanchorwords03-14-21.json")
        right=get_json("rightanchorwords03-14-21.json")
        anchorwords = left+right
        #if method == "wordscores": #(Dodds' meaning word scores) saved in "characterspace_03-02-2021.py"
        if method == "ourweights":
            # read in Phil's realignment info
            pass           
        return None

            
# saved in "characterspace_03-02-2021.py"
# predictedtrait1d = "orderly<->chaotic"
# most_extreme_features_in_1st_svd_dimension = [] #to do: fill in list

c = CharData()
#X_svd, svdmodel, evr, evrs, ssv = c.runSVD(c.df,verbose=True,chart=True)













