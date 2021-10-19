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
from matplotlib_venn import venn2, venn2_circles
import pprint

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
#df1_means = df1.mean().mean()
df1_means = 50
df1_normed = df1 - df1_means

# Output from SVD WITH removing means
df2, U2, D2, V2, Sig2, X2, remakeX2 = runSVD(df1_normed,dropcols=[])
# When remaking X, Sig2 and V2 are combined, then their product is combined with U2, so here is that first product
SigV2 = np.dot(Sig2,V2)
# the traits in order of columns
col2 = df2.columns

def get_adj(col_list=list(col2)):
    adj_list = []
    for pair in col_list:
        left, right = pair.split("<->")
        adj_list += [left, right]
    return set(adj_list)

# just the adjectives
adj_list = get_adj()

# https://projects.ori.org/lrg/PDFs_papers/Goldberg.Big-Five-Markers-Psych.Assess.1992.pdf
table_2_bipolar = ["silent","talkative","timid","bold","compliant","assertive","inhibited","spontaneous","passive","active","reserved","demonstrative","lethargic","energetic","apathetic","enthusiastic","unadventurous","adventurous","unsociable","sociable",
                   "cold","warm","unkind","kind","uncooperative","cooperative","selfish","unselfish","rude","polite","distrustful","trustful","stingy","generous","stubborn","flexible","inconsiderate","considerate","quarrelsome","agreeable",
                   "disorganized","organized","undependable","dependable","unconscientious","conscientious","impractical","practical","careless","thorough","extravagant","thrifty","rash","cautious","frivolous","serious","wasteful","economical","unreliable","reliable",
                   "emotional","unemotional","envious","unenvious","nervous","relaxed","subjective","objective","high-strung","imperturbable","demanding","undemanding","fretful","placid","volatile","peaceful","suggestible","independent","fearful","uninhibited",
                   "unintelligent","intelligent","imperceptive","perceptive","uninquisitve","curious","unimaginative","imaginative","uncreative","creative","unsophisticated","sophisticated","ignorant","knowledgeable","unintellectual","intellectual","shallow","deep","provincial","cultured"]

table_2_bi = set(table_2_bipolar)
overlap_names = adj_list.intersection(table_2_bi)

# https://darkwing.uoregon.edu/~sanjay/pubs/bigfive.pdf
table_1_neopir_facets = ["sociable","forceful","energetic","adventurous","enthusiastic","outgoing","forgiving","not demanding","warm","not stubborn","not show-off","sympathetic",
                         "efficient","organized","not careless","thorough","not lazy","not impulsive","tense","irritable","not contented","shy","moody","not self-confident","curious",
                         "imaginative","artistic","wide interests","excitable","unconventional"]
table_1_neo = set(table_1_neopir_facets)
# also from John 1990
table2_10psychologists = ["quiet","reserved","shy","silent","withdrawn","retiring","talkative","assertive","active","energetic","outgoing","outspoken","dominant","forceful","enthusiastic","show-off","sociable","spunky","adventurous","noisy","bossy","fault-finding","cold","unfriendly","quarrelsome","hard-hearted","unkind","cruel","stern","thankless","stingy",
                          "sympathetic","kind","appreciative","affectionate","soft-hearted","warm","generous","trusting","helpful","forgiving","pleasant","good-natured","friendly","cooperative","gentle","unselfish","praising","sensitive","careless","disorderly","frivolous","irresponsible","slipshot","undependable","forgetful","organized","thorough","planful",
                          "efficient","responsible","reliable","dependable","conscientious","precise","practical","deliberate","painstaking","cautious","stable","calm","contented","unemotional","tense","anxious","nervous","moody","worrying","touchy","fearful","high-strung","self-pitying","temperamental","unstable","self-punishing","despondent","emotional","commonplace","narrow interests",
                          "simple","shallow","unintelligent","wide interests","imaginative","intelligent","original","insightful","curious","sophisticated","artistic","clever","inventive","sharp-witted","ingenious","witty","resourceful","wise","logical","civilized","foresighted","polished","dignified"]
table2_10psy = set(table2_10psychologists)

# the measurement of meaning osgood, suci, tannenbaum 1957
# table 1 page 37
table1_pg37 = ["good","bad","large","small","beautiful","ugly","yellow","blue","hard","soft","sweet","sour","strong","weak","clean","dirty","high","low","calm","agitated","tasty","distasteful","valuable","worthless","red","green","young","old","cruel","kind","loud","soft","deep","shallow","pleasant","unpleasant","black","white","bitter","sweet","happy","sad","sharp","dull","empty","full",
               "ferocious","peaceful","heavy","light","wet","dry","sacred","profane","relaxed","tense","brave","cowardly","long","short","rich","poor","clear","hazy","hot","cold","thick","thin","nice","awful","bright","dark","bass","treble","angular","rounded","fragrant","foul","honest","dishonest","active","passive","rough","smooth","fresh","stale","fast","slow","fair","unfair","rugged","delicate",
               "near","far","pungent","bland","healthy","sick","wide","narrow"]
table1_pg37 = set(table1_pg37)
# table 6 page 67 "solomon study"
table6_pg67 = ["pleasant","unpleasant","repeated","varied","smooth","rough","active","passive","beautiful","ugly","definite","uncertain","low","high","powerful","weak","steady","fluttering","soft","loud","full","empty","good","bad","rumbling","whining","solid","hollow","clear","hazy","calming","exciting","pleasing","annoying","large","small","clean","dirty","resting","busy","dull","sharp","deep","shallow",
               "gliding","scraping","familiar","strange","soft","hard","heavy","light","wet","dry","safe","dangerous","concentrated","diffuse","pushing","pulling","labored","easy","dark","bright","even","uneven","loose","tight","relaxed","tense","colorful","colorless","hot","cold","rich","thin","obvious","subtle","wide","narrow","deliberate","careless","happy","sad","gentle","violent","mild","intense",
               "rounded","angular","slow","fast","rugged","delicate","simple","complex","green","red","masculine","feminine"]
table6_pg67 = set(table6_pg67)

def make_venn_diagram(set1,set2,label1,label2,n):
    overlap = set1.intersection(set2)
    total = set1.union(set2)
    smaller_size = min(len(set1),len(set2))
    # setup the figure
    fig, ax = plt.subplots()
    ax.set_title("Percent shared (overall and of smaller set): "+str(len(overlap)/len(total))+", "+str(len(overlap)/smaller_size)
                 , fontsize=10)
    # make the venn diagram
    v = venn2([set1, set2],
              set_labels=[label1, label2])
    # adjust labels from counts to names
    v.get_label_by_id('10').set_text("\n".join(list(set1)[:n]))
    #v.get_label_by_id('01').set_text("\n".join(list(set2)[:n]))
    v.get_label_by_id('11').set_text("\n".join(list(overlap)[:n]))
    
    df = pd.DataFrame(data=[set1,overlap,set2])
    df = df.T
    df.columns=[label1,"Overlap",label2]
    
    #print(df.to_latex())
    print(df.to_markdown())
    return df

all_other = table_2_bi.union(table_1_neo).union(table2_10psy).union(table1_pg37).union(table6_pg67)
print(len(all_other))
#call like, e.g. 
make_venn_diagram(adj_list,all_other,"Character Adjectives","Adjectives from FFM and MoM",5)
    


