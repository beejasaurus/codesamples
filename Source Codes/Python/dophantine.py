print "Equation is: 6a + 9b + 20c = n"

for n in range(50,66):
    for a in range(0,20):
        #print "A is", a
        for b in range(0,20):
            #print "B is", b
            for c in range (0,3):
                #print "C is", c
                if n == 6*a + 9*b + 20*c:
                    print "6*",a," + 9*",b," + 20*",c," = ",n
