#!/usr/bin/python
import random

flag=open("flag.txt","r").read()

key= random.randrange(1,9000000)

try:
	en = input()

	if(en == key):
		print "you got it!\n"+flag
	else:
		print"nop!....your lucky number was",key
except:
	print "invalid input!"