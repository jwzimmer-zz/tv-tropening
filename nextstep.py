#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Jul  6 15:47:38 2021

@author: jzimmer1
"""

#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Mon Jun 28 13:55:13 2021

@author: jzimmer1
"""

import pandas as pd
from pandas_ods_reader import read_ods
import json
import matplotlib.pyplot as plt
import seaborn as sns
import numpy as np
import scipy as sp
from numpy import linalg
from scipy import linalg
from collections import Counter
from mpl_toolkits.mplot3d import Axes3D
import random
from wordcloud import WordCloud

# === === Helper functions === ===
def write_json(data, filename):
    with open(filename,"w") as f:
        json.dump(data,f)
    return None

def get_json(filename):
    with open(filename) as f:
        jsonobj = json.load(f)
    return jsonobj

# === === Other artifacts that might be useful === ===
# # Load the original data as dataframes
# path="characters-aggregated.ods"
# df_original = pd.read_json("June2021_df_original.json")
# df_n_original =  pd.read_json("June2021_df_n_original.json")
# df_std_original =  pd.read_json("June2021_df_std_original.json")
# column_dict_original = get_json("June2021_column_dict_original.json")

# # Load the tables that tell you what the BAP traits are and who the characters are
# character_map, bap_map = pd.read_html("codebook.html")


df_bap = pd.read_json("July2021_df_bap.json")
df_traits = pd.read_json("July2021_df_traits.json")

clean_column_dict = get_json("July2021_cleaned_column_dict.json")

def runSVD(df1,dropcols=['unnamed.1','name','work'],n=None):
    if len(dropcols) > 0:
        for x in dropcols:
            df1 = df1.drop(x,axis=1)
    if n==None:
        n=df1.shape[1]-1
    X = df1.to_numpy()
    #decompose
    U, D, V = np.linalg.svd(X)
    # get dim of X
    M,N = X.shape
    # Construct sigma matrix in SVD (it simply adds null row vectors to match the dim of X)
    Sig = sp.linalg.diagsvd(D,M,N)
    # Now you can get X back:
    remakeX = np.dot(U, np.dot(Sig, V))
    assert np.sum(remakeX - X) < 0.00001
    return df1, U, D, V, Sig, X, remakeX

# Output from SVD without removing means
df1, U, D, V, Sig, X, remakeX = runSVD(df_traits)

# Remove the average of each trait
df1_means = df1.mean().mean()
df1_normed = df1 - df1_means

# Output from SVD WITH removing means
df2, U2, D2, V2, Sig2, X2, remakeX2 = runSVD(df1_normed,dropcols=[])
# When remaking X, Sig2 and V2 are combined, then their product is combined with U2, so here is that first product
SigV2 = np.dot(Sig2,V2)
# the traits in order of columns
col2 = df2.columns

def vector_barchart(vector_names,vector,n,style="by_mag",ascending=False):
    """ vector_names should be the labels for the values in the vector
        vector should be the vector (ndarray)
        n should be the number of values you want displayed in the chart
        style should be the format of the chart
        ascending=False will be most relevant traits by magnitude,
        ascending=True will be least relevant traits by magnitude"""
    n=min(n,len(vector_names))
    vectordf = pd.DataFrame()
    vectordf["Trait"] = col2
    vectordf["Values"] = vector
    
    if style=="by_mag":
        vectordf["Magnitude"] = vectordf.apply(lambda row: abs(row["Values"]), axis = 1)
        sorteddf = vectordf.sort_values(by="Magnitude",ascending=ascending)
        #plotguy = sorteddf.iloc[-2*n:].iloc[::-1]
        plotguy = sorteddf.iloc[0:2*n]
    # if side=="half_n_half":
    #     sorteddf = lincombos3d.sort_values(by=d)
    #     top_n_top = sorteddf.iloc[0:n]
    #     top_n_bottom = sorteddf.iloc[-n:].iloc[::-1]
    #     plotguy = pd.concat([top_n_top,top_n_bottom])
    # if side=="neg":
    #     plotguy = sorteddf.iloc[0:2*n]
    # if side=="pos":
    #     plotguy = sorteddf.iloc[-2*n:].iloc[::-1]
    #print(plotguy)
    sns.barplot(plotguy["Values"],plotguy["Trait"])
    return vectordf, plotguy



