sayi1 = int(input('Lütfen 1. Sayı giriniz.'))
sayi2 = int(input('Lütfen 2. Sayı giriniz.'))
fark = 0
kucuksayi=0
buyuksayi=0
if (sayi1==sayi2):
    print('sayilar ayni olamaz!')
else:
    if (sayi1 < sayi2):
        kucuksayi = sayi1
        buyuksayi = sayi2
    else:
        kucuksayi = sayi2
        buyuksayi = sayi1
        
    while (int(kucuksayi) <= int(buyuksayi)):
        if ((int(kucuksayi)%15)==0):
            print("FizzBuzz")
        elif ((int(kucuksayi)%3)==0):
            print("Fizz")
        elif ((int(kucuksayi)%5)==0):
            print("Buzz")
        else:
            print(kucuksayi)
        kucuksayi = kucuksayi+1
    


