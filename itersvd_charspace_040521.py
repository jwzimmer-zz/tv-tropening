#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Mon Apr  5 17:25:28 2021

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
from torch.autograd import Variable
import torch
import pyro
import pyro.distributions as dist
import time
from mpl_toolkits.mplot3d import Axes3D
import math
import networkx

# vector 1d
testobs1d = torch.tensor([0.0001,0.1,0.001,0.002,0.0003])

def normal_density_estimation(obs,N=None):
    starttime = time.perf_counter()
    if N==None:
        N = len(obs)
    else: pass
    data = torch.Tensor(N)
    loc = pyro.sample("loc",dist.Normal(0.0,1.0))
    inverse_scale = pyro.sample("inverse_scale",dist.Gamma(3.0,2.0))
    for i in pyro.plate("data_loop", N):
        data[i] = pyro.sample("data_{}".format(i), dist.Normal(loc,1/inverse_scale), obs=obs[i])
    endtime = time.perf_counter()
    print("Time model took: ",endtime-starttime)
    print("Data: ",data)
    return data

print("normal density estimation")
#trace.nodes
trace = pyro.poutine.trace(normal_density_estimation).get_trace(testobs1d)
#networkx.draw(trace.nodes)
trace.compute_log_prob()
logp = trace.log_prob_sum()
print("Log probability scores: ",logp)
print(trace.format_shapes())


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