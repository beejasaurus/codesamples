# User input asking for which prime number you would like to know. For instance, if you enter 5, it will tell you that the 5th prime number is 11.
find = int(raw_input("Which prime number are you looking for?  "))

primes = []
#Tests each number n from 1, 10000 for primality
#Checks each number n if it is divisible by all numbers before it
for n in range(1,10000):
    isprime = True
    counter = 2
    while counter < n and isprime:
        remainder = n%counter
        if remainder == 0:
            isprime = False
        counter += 1
    if isprime:
        primes.append(n) # Puts all prime numbers into array


print primes[find] # Calls array with index of the number which you wish to know

