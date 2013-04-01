import datetime

#keep track of current time

file=open('time.txt','a');
file.write(str(datetime.datetime.now())+'\n');
file.close();


