#update the count

file=open('counter.txt','r+b');

counter=0;

line=file.readline();
line = int(line)+1;
file.seek(0);
file.truncate();
file.write(str(line));
file.close();


