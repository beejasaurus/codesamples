find = int(raw_input("Which prime number are you looking for?  "))
    
primes = []

for n in range(1,10000):
    isprime = True
    counter = 2
    while counter < n and isprime:
        remainder = n%counter
        if remainder == 0:
            isprime = False
        counter += 1
    if isprime:
        primes.append(n)


print primes[find]

