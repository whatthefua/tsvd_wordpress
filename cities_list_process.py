fpI = open("cities_list_raw.txt", "r")
fpO = open("cities_list.txt", "w")

res = []

for i in range(100):
	fpI.readline()
	str = fpI.readline()

	res.append(str.split()[0])

	fpI.readline()

res.sort()

for city in res:
	fpO.write("%s\n" % city)

fpI.close()
fpO.close()