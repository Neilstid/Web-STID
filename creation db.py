import sqlite3
import csv
conn = sqlite3.connect('enquete.db')
c=conn.cursor()

with open('enquete_STID.csv', newline='') as csvfile:
	csvfile.readline()
	spamreader = csv.reader(csvfile, delimiter=',')
	requete = "create table enquete (Groupe TEXT,Numero_Q TEXT,Q1Rep1 TEXT,Q1Rep2 TEXT,Q2 TEXT,Q3 TEXT,Q4 TEXT,Q5 TEXT);"
	c.execute(requete)
	ligne = 1
	for row in spamreader:
		row=row[0].split(";")
		if (len(row) == 8):
			if (row[2]== "1"):
				row[2] = "Classe Preparatoire"
			elif (row[2] == "2"):
				row [2] = "BTS"
			elif (row[2] == "3"):
				row[2] = "DUT"
			elif (row[2] == "4"):
				row[2] = "Fac"
			else:
				row[2] = "NA"
			if (row[3]== "1"):
				row[3] = "Classe Preparatoire"
			elif (row[3] == "2"):
				row [3] = "BTS"
			elif (row[3] == "3"):
				row[3] = "DUT"
			elif (row[3] == "4"):
				row[3] = "Fac"
			else:
				row[3] = "NA"
			if (row[4]== "1"):
				row[4] = "Etudes courtes"
			elif (row[4] == "2"):
				row [4] = "Etudes longues"
			else:
				row[4] = "NA"
			if (row[5]== "1"):
				row[5] = "Oui"
			elif (row[5] == "0"):
				row [5] = "Non"
			else:
				row[5] = "NA"
			if (row[6]== "1"):
				row[6] = "Formation essentiellement theorique"
			elif (row[6] == "2"):
				row [6] = "Formation pratique encadree"
			else:
				row[6] = "NA"
			if (row[7]== "1"):
				row[7] = "Oui"
			elif (row[7] == "0"):
				row [7] = "Non"
			else:
				row[7] = "NA"
			requete = 'insert into enquete values('
			requete += "'" + row[0] + "','" + row[1] +"','" + row[2] +"','"+row[3] + "','" + row[4] + "','" + row[5] + "','"+ row[6] + "','"+ row[7] + "')"
			c.execute(requete)
		ligne += 1
conn.commit()
conn.close()
