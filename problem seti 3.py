liste = list()
a = 0
gecici = 0
toplam = int(input("Kaç sayı giriceksiniz:"))

while (a < toplam):
    liste.append(int(input("Lütfen {}. sayı giriniz:".format(a+1))))
    a += 1
    
liste.sort(reverse = False) 
print(liste)
