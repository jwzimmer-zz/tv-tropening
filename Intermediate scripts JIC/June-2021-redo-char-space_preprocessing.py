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

# Load the original data
path="characters-aggregated.ods"
df_original = read_ods(path, 1)
df_n_original = read_ods(path, 2)
df_std_original = read_ods(path,3)

# Load the tables that tell you what the BAP traits are and who the characters are
character_map, bap_map = pd.read_html("codebook.html")

# === === Helper functions === ===
def write_json(data, filename):
    with open(filename,"w") as f:
        json.dump(data,f)
    return None

def get_json(filename):
    with open(filename) as f:
        jsonobj = json.load(f)
    return jsonobj

def make_column_dict(df1,map1):
    column_dict = {}
    for column_title in df1.columns:
        if 'BAP' in column_title:
            traits = map1[map1['ID'] == column_title]
            new_title = tuple(traits['low/left anchor'])[0]+"<->"+tuple(traits['high/right anchor'])[0]
            column_dict[column_title] = new_title
    return column_dict

column_dict_original = make_column_dict(df_original, bap_map)

df_original.to_json("June2021_df_original.json")
df_n_original.to_json("June2021_df_n_original.json")
df_std_original.to_json("June2021_df_std_original.json")
write_json(column_dict_original, "June2021_column_dict_original.json")