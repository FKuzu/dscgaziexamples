a = int(input('Uzantı uzunluğunu giriniz'))
b= input('Mail adresini giriniz')
mailadi = b.split("@")
uzanti = mailadi[1]

def ayikla(uzanti):
    if (len(uzanti.split("."))==a):
        return True
    else:
        return False

if (ayikla(uzanti)):
    print("Mail adresiniz doğrudur.")
else:
    print("Mail adresiniz yanlıştır.")
