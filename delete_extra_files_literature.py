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
    files = foldercont("tvtropes.org/pmwiki/pmwiki.php/Literature")
    different_files = []
    for f in attemptfiles:
        if f not in files:
            different_files.append(f)
            print("In attempt only: ",f)
    for f in files:
        if f not in attemptfiles:
            different_files.append(f)
            print("In plain only: ",f)
    write_json(different_files, "difference_in_Lit_wget_results.json")
    return different_files

compare_folders()


