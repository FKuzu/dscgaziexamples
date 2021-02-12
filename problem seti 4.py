liste = list()
a = 0
sayi = 0
toplam = int(input("Kaç sayı giriceksiniz:"))

while (a < toplam):
    sayi = int(input("Lütfen {}. sayı giriniz:".format(a+1)))
    if ((sayi%2) == 1):
        liste.append(sayi)
    a += 1

print(max(liste))
        
        
