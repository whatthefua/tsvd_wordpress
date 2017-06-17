fpI = open("fieldofstudy_list_raw.txt", "r")
fpO = open("fieldofstudy_list.txt", "w")

res = []

for i in range(26):
	str = fpI.readline().split()

	if "." in str[0]:
		resstr = ""

		for x in str[1:]:
			resstr += x + " "

		res.append(resstr)

# res.sort()

for x in res:
	fpO.write("%s\n" % x[:-1])

fpI.close()
fpO.close()