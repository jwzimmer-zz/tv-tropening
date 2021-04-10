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
import random


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
 
def svdweightchart(df1,svd,d="1stD",side="by_mag",big=True):
    n=min(10,len(df1.columns))
    lincombos3d = pd.DataFrame()
    lincombos3d["Attribute"] = [x for x in df1.columns if "<->" in x]
    lincombos3d["1stD"] = svd.components_[0]
    lincombos3d["2ndD"] = svd.components_[1]
    lincombos3d["3rdD"] = svd.components_[2]
    if side=="by_mag":
        lincombos3d["mag_1stD"] = lincombos3d.apply(lambda row: abs(row["1stD"]), axis = 1)
        lincombos3d["mag_2ndD"] = lincombos3d.apply(lambda row: abs(row["2ndD"]), axis = 1)
        lincombos3d["mag_3rdD"] = lincombos3d.apply(lambda row: abs(row["3rdD"]), axis = 1)
        sorteddf = lincombos3d.sort_values(by="mag_"+d)
        if big:
            plotguy = sorteddf.iloc[-2*n:].iloc[::-1]
        else:
            plotguy = sorteddf.iloc[0:2*n]
    if side=="half_n_half":
        sorteddf = lincombos3d.sort_values(by=d)
        top_n_top = sorteddf.iloc[0:n]
        top_n_bottom = sorteddf.iloc[-n:].iloc[::-1]
        plotguy = pd.concat([top_n_top,top_n_bottom])
    if side=="neg":
        plotguy = sorteddf.iloc[0:2*n]
    if side=="pos":
        plotguy = sorteddf.iloc[-2*n:].iloc[::-1]
    #print(plotguy)
    sns.barplot(plotguy[d],plotguy["Attribute"])
    return lincombos3d

def chart(data,n=15,title="Percent of explained variance",chart="bar"):
    # evr is the list of the explained variance
        # pass in evr,chart="pie" to get a pie chart showing the explained variance for all dimensions
        # pass in evr,chart="bar",n=#,title="str" to get a bar chart of the first n dimensions' explained variance
        # pass in evr,chart="cumbar", etc., to get cumulative explained variance
    # ssv is the singular values
    #colors = [] #dunno how to set nice colors
    if chart == "bar":
        mydf = pd.DataFrame()
        mydf[title]=data[:n]
        plt.bar(range(n),mydf[title])
    if chart == "pie":
        plt.pie(data)
    # to get a cumulative bar chart of the evr
    if chart == "cumbar":
        mydf = pd.DataFrame()
        cumevr = [data[:i+1].sum() for i in range(n)]
        mydf[title]=cumevr
        plt.bar(range(n),mydf[title])
    return None

def work_chardf(df,svd,work,c1=0,c2=1,c3=2):
    # e.g. df=c.df, work="NCIS"
    workdf = df.loc[df['work'] == work]
    attrs = pd.DataFrame()
    attrs["Trait"] = [x for x in workdf.columns if "<->" in x]
    attrs["1stD"] = svd.components_[c1]
    attrs["2ndD"] = svd.components_[c2]
    attrs["3rdD"] = svd.components_[c3]
    # want to multiply each character's trait score 
    # by the weight for that trait in each dimension
    bychar = {}
    for j in range(workdf.shape[0]):
        dims = {}
        for dim in ["1stD","2ndD","3rdD"]:
            char_dimsum = 0
            for i in range(attrs[dim].shape[0]):
                weight = attrs[dim].iloc[i]
                trait = attrs["Trait"].iloc[i]
                score = workdf[trait].iloc[j]
                char_dimsum += weight*score
            title = dim + "_lc_sum"
            dims[title] = char_dimsum
        bychar[workdf["name"].iloc[j]] = dims
    chardf = pd.DataFrame().from_dict(bychar)
    chardf = chardf.transpose()
    return chardf

def work_chart(chardf,ang1=30,ang2=30,fontsize=10):
    fig = plt.figure()
    ax = fig.add_subplot(projection='3d')
    #ax.scatter(chardf["1stD_lc_sum"], chardf["2ndD_lc_sum"], chardf["3rdD_lc_sum"])
    for i in range(len(chardf.index)): #plot each point + it's index as text above
        x,y,z = chardf["1stD_lc_sum"].iloc[i], chardf["2ndD_lc_sum"].iloc[i], chardf["3rdD_lc_sum"].iloc[i]
        ax.scatter(x,y,z)
        ax.text(x,y,z,  '%s' % (chardf.index[i]), size=fontsize, zorder=1,color='k') 
    ax.view_init(ang1,ang2)
    ax.set_xlabel('1st Dim LC')
    ax.set_ylabel('2nd Dim LC')
    ax.set_zlabel('3rd Dim LC')
    plt.show()
    return chardf

def flat_work_chart(chardf,work,fontsize=10,c1=0,c2=1,c3=2):
    #expects chardf to be the df output by work_chardf
    #make 3 flat versions, 2d each
    fig = plt.figure()
    ax = fig.add_subplot()
    plt.subplot(2, 2, 1)
    for i in range(len(chardf.index)): #plot each point + it's index as text above
        x,y,z = chardf["1stD_lc_sum"].iloc[i], chardf["2ndD_lc_sum"].iloc[i], chardf["3rdD_lc_sum"].iloc[i]
        plt.scatter(x,y)
    plt.title(work)
    plt.xlabel('1st')
    plt.ylabel('2nd')
    plt.subplot(2, 2, 2)
    for i in range(len(chardf.index)): #plot each point + it's index as text above
        x,y,z = chardf["1stD_lc_sum"].iloc[i], chardf["2ndD_lc_sum"].iloc[i], chardf["3rdD_lc_sum"].iloc[i]
        plt.scatter(x,z)
        if (i-1)%2:
            plt.text(x,z,  '%s' % (chardf.index[i]), size=fontsize, zorder=1,color='k')
    plt.xlabel('1st')
    plt.ylabel('3rd')
    plt.subplot(2, 2, 3)
    for i in range(len(chardf.index)): #plot each point + it's index as text above
        x,y,z = chardf["1stD_lc_sum"].iloc[i], chardf["2ndD_lc_sum"].iloc[i], chardf["3rdD_lc_sum"].iloc[i]
        plt.scatter(y,z)
        if (i)%2:
            plt.text(y,z,  '%s' % (chardf.index[i]), size=fontsize, zorder=1,color='k')
    plt.xlabel('2nd')
    plt.ylabel('3rd')
    plt.show()
    return chardf

def single_flat_work_chart(chardf,work,fontsize=8,c1=0,c2=1,c3=2):
    #expects chardf to be the df output by work_chardf
    #make 1 flat version, 2d each with 3rd d color
    fig = plt.figure()
    ax = fig.add_subplot()
    xlist = []
    ylist = []
    zlist = []
    for i in range(len(chardf.index)): #plot each point + it's index as text above
        x,y,z = chardf["1stD_lc_sum"].iloc[i], chardf["2ndD_lc_sum"].iloc[i], chardf["3rdD_lc_sum"].iloc[i]*100
        xlist.append(x)
        ylist.append(y)
        zlist.append(z)
        plt.text(x,y,  '%s' % (chardf.index[i]), size=fontsize)
    plt.scatter(xlist,ylist,c=zlist)
    plt.title(work)
    plt.xlabel('1st')
    plt.ylabel('2nd')
    plt.show()
    return chardf

def svdweigh_picktraits(df1,svd,weights,d=8):
    # expects c.df, svdmodel, weights = e.g. evr (list)
    lincombos = pd.DataFrame()
    lincombos["Attribute"] = [x for x in df1.columns if "<->" in x]
    for i in range(d):
        thisdim = "Dim "+str(i)
        lincombos[thisdim] = svd.components_[i]
        mag = "Mag of "+thisdim
        lincombos[mag] = lincombos.apply(lambda row: abs(row[thisdim]), axis = 1)
    n=len(svd.components_[0])
    # columns to drop
    dropcols = []
    keepcols = []
    for i in range(d):
        f = int(weights[i]*n)
        sorteddf = lincombos.sort_values(by="Mag of Dim "+str(i))
        plotguy = sorteddf.iloc[0:].iloc[::-1]
        dimitraits = plotguy["Attribute"].tolist()[:f]
        #print(f,keepcols)
        keepcols += dimitraits
    dropcols += [x for x in df1.columns if x not in keepcols]
    return lincombos, keepcols, dropcols
    
def runSVD(df1, n=None, i=1000, dropcols = ['unnamed.1','name','work'], verbose=False, chart=False):
    if len(dropcols) > 0:
        for x in dropcols:
            df1 = df1.drop(x,axis=1)
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
    return X_svd2,svd,evr,evrs,ssv,df1

def linear_reg(df1,features,predicted_trait,verbose=True,chart=True):
    # saved in "characterspace_03-02-2021.py"
    return None

def normalize_scores_realign(score):
    new_score = 100-score
    return new_score

# ==== generate the character data ====
class CharData():
    def __init__(self,
                 addnames=True,
                 dropemoji=True,
                 renameBAPtraits=True,
                 dropcolsfromnandstd=True,
                 verbose=True,
                 selectminratings=False,
                 drophardsoft=True,
                 realignanchors=True,
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
                print("The 5 most common columns after renaming BAP: ",x1.most_common(5))
        if realignanchors:
            self.anchordict,self.flipped = self.realign_anchors()
            if drophardsoft:
                self.flipped = [x for x in self.flipped if x!="hard<->soft"]
            if verbose:
                print("Before realigning, scores")
                print(self.df.head(30))
            self.df = normalize(self.df, self.flipped, normalize_scores_realign)
            self.df.rename(columns=self.anchordict, inplace=True)
            if verbose:
                print("After realigning, scores")
                print(self.df.head(30))
            if verbose:
                x1 = Counter([x for x in self.df.columns])
                print("The 5 most common columns after realigning: ",x1.most_common(5))
                print("Self.df shape: ",self.df.shape)
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
    
    def find_shared_anchor_words(self):
        # saved in "characterspace_03-02-2021.py"
        return None
    
    def realign_anchors(self,method="myweights",csvfile="03-30-21-flipped-200d.csv"):
        # 25d twitter: "032921-flipped.csv"
        # 200d twitter: "03-30-21-flipped-200d.csv"
        # 300d wikipedia: "03-31-21-wiki-300d.csv"
        # return a dict of old col name : new column name for renaming self.df
        anchordict = {}
        flipped = []
        #if method == "wordscores": #(Dodds' meaning word scores) saved in "characterspace_03-02-2021.py"
        if method == "ourweights":
            # read in Phil's realignment info
            flip = pd.read_csv(csvfile)
            onlyf = flip.loc[flip['flipped'] == True]
            for i in range(flip.shape[0]):
                oldname = list(flip.iloc[i])[1].split("'")
                newname = list(flip.iloc[i])[2].split("'")
                if oldname!=newname:
                    flipped.append(oldname[1]+"<->"+oldname[3])
                anchordict[oldname[1]+"<->"+oldname[3]]=newname[1]+"<->"+newname[3]
            if len(flipped) != onlyf.shape[0]:
                print("unexpected length in realign_anchors fn")
        if method == "myweights":
            thing = pd.read_csv("collist.csv")
            realigned = thing["Realigned"]
            original = thing["unnamed.1"]
            for i in range(realigned.shape[0]-2):
                o = original.iloc[i]
                r = realigned.iloc[i]
                anchordict[o] = r
                if o != r:
                    flipped.append(o)
        return anchordict,flipped

            
# saved in "characterspace_03-02-2021.py"
# predictedtrait1d = "orderly<->chaotic"
# most_extreme_features_in_1st_svd_dimension = [] #to do: fill in list

c = CharData()
X_svd, svdmodel, evr, evrs, ssv, svddf = runSVD(c.df,verbose=True,chart=False)













