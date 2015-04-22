#!/usr/bin/env python
import serial, time, json
mySerial = serial.Serial('/dev/ttyACM3', 9600)
cont=0
lista = []
while(cont<651):	
	# strip() retira os \ r \ n
	myBuffer = mySerial.readline().strip()
	if(cont > 50):
		lista.append(myBuffer);
	cont = cont + 1
print lista
mySerial.close()










   