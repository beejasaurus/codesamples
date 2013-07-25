from string import *

target = "atgacatgcacaagtatgcat"
key = "atgc"

##def countSubStringMatch(target,key):
##    print find(target,key)
##

def countSubStringMatchRecursive(target,key):
    n = 0
    m = 0
    if len(target) > 0:
        while n < len(target):
            a = find(target,key,n)
            n = a+1
            m = m+1
        return m
    else:
        print "Need a sequence"
        return -1
        
print countSubStringMatchRecursive(target,key)

