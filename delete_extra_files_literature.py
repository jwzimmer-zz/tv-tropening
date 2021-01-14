#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Jan 13 15:56:03 2021

@author: jzimmer1
"""

import os
import re

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
    for f in allfiles:
        delete_extras(foldername+"/"+f)
    return None
    
foldercont("tvtropes.org-attempt/pmwiki/pmwiki.php/Literature")