#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Jan 13 15:56:03 2021

@author: jzimmer1
"""

import os
import re
import json

# === === Helper functions === ===
def write_json(data, filename):
    with open(filename,"w") as f:
        json.dump(data,f)
    return None
def get_json(filename):
    with open(filename) as f:
        jsonobj = json.load(f)
    return jsonobj
    
# === === === === === === === === 

def delete_extras(filename):
    pathname = filename
    filename = filename.split("/")[-1]
    #filename = filename.split(".")[0]
    #print(filename)
    edit = "?action=edit"
    source = "?action=source"
    if filename.endswith(edit) or filename.endswith(source):
        print("deleting ", filename)
        os.remove(pathname)
    else:
        pass
    return None
        
    
def foldercont(foldername):
    allfiles = os.listdir(foldername)
    return allfiles



def compare_folders():
    attemptfiles = foldercont("tvtropes.org-attempt/pmwiki/pmwiki.php/Literature")
    attemptname = "tvtropes.org-attempt/pmwiki/pmwiki.php/Literature/"
    files = foldercont("tvtropes.org-plain/pmwiki/pmwiki.php/Literature")
    filesname = "tvtropes.org-plain/pmwiki/pmwiki.php/Literature/"
    thirdfiles = foldercont("tvtropes.org-third/pmwiki/pmwiki.php/Literature")
    thirdname = "tvtropes.org-third/pmwiki/pmwiki.php/Literature/"
    # for f in thirdfiles:
    #     delete_extras("tvtropes.org-third/pmwiki/pmwiki.php/Literature/" + f)
    # thirdfiles = foldercont("tvtropes.org-third/pmwiki/pmwiki.php/Literature")
    # different_files = []
    # filelist = []
    # for f in attemptfiles:
    #     if f not in files and f not in thirdfiles:
    #         different_files.append(f)
    #         filelist += ["In attempt only: tvtropes.org-attempt/pmwiki/pmwiki.php/Literature",f]
    # for f in files:
    #     if f not in attemptfiles and f not in thirdfiles:
    #         different_files.append(f)
    #         filelist += ["In plain only: tvtropes.org-plain/pmwiki/pmwiki.php/Literature",f]
    # for f in thirdfiles:
    #     if f not in files and f not in attemptfiles:
    #         different_files.append(f)
    #         filelist += ["In third only: tvtropes.org-third/pmwiki/pmwiki.php/Literature",f]
    # write_json(filelist, "difference_in_paths_3_Lit_wget_results_and.json")
    os.mkdir("Literature-Union")
    unionname = "Literature-Union/"
    unionfiles = list(set(attemptfiles + files + thirdfiles))
    write_json(unionfiles, "union_of_3_Lit_wget_results.json")
    for f in unionfiles:
        if f in thirdfiles:
            os.rename(thirdname+f, unionname+f)
        elif f in files:
            os.rename(filesname+f, unionname+f)
        elif f in attemptfiles:
            os.rename(attemptname+f, unionname+f)
        else:
            print("where did this come from: ",f)    
    return None

compare_folders()


