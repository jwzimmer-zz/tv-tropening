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

# === === Helper functions === ===
def write_json(data, filename):
    with open(filename,"w") as f:
        json.dump(data,f)
    return None

def get_json(filename):
    with open(filename) as f:
        jsonobj = json.load(f)
    return jsonobj

# Load the original data as dataframes
path="characters-aggregated.ods"
df_original = pd.read_json("June2021_df_original.json")
df_n_original =  pd.read_json("June2021_df_n_original.json")
df_std_original =  pd.read_json("June2021_df_std_original.json")

column_dict_original = get_json("June2021_column_dict_original.json")

# Load the tables that tell you what the BAP traits are and who the characters are
character_map, bap_map = pd.read_html("codebook.html")

# Helper functions to make an easier to read version
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

# Make an easy-to-read version of the original data
df_easy_read = pd.read_json("June2021_df_original.json")
# add a column for the character names
df_easy_read['name'] =  df_original.apply(lambda row: add_character_name(row, character_map), axis=1)
# add which fictional work a character is from as a level in the dataframe
df_easy_read['work'] = df_original.apply(lambda row: add_work_name(row, character_map), axis=1)
# drop  the emoji  traits
df_easy_read = drop_emoji_columns(df_easy_read)
# Correcting misspelling  (BAP73),  weird quote formatting (BAP140), and 2,@ symbol (BAP71)
column_dict_original['BAP140']='right-brained<->left-brained'
column_dict_original['BAP71']='down to earth<->head in clouds'
column_dict_original['BAP73']= 'open to new experiences<->uncreative'
column_dict_original['BAP183']='hard<->soft 2'

df_easy_read.to_json("July2021_df_bap.json")

df_easy_read.rename(columns=column_dict_original, inplace=True)
df_easy_read.to_json("July2021_df_traits.json")

write_json(column_dict_original, "July2021_cleaned_column_dict.json")










