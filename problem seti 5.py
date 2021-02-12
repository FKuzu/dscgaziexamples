class Okul(object):
    def __init__(self, okuladi, yer, kurulus, ogrencisayi, ogretmensayi, kacsinif):
        self.okuladi = okuladi
        self.yer = yer
        self.kurulus = kurulus
        self.ogrencisayi = ogrencisayi
        self.ogretmensayi = ogretmensayi
        self.kacsinif = kacsinif
    

okul1 = Okul("23 Nisan İ.Ö.O.", "Ankara", 1950, 500, 45, 18)
okul2 = Okul("Çizmeci İ.Ö.O.", "İstanbul", 2000, 570, 50, 20)
okul3 = Okul("Nihat Asya İ.Ö.O.", "Artvin", 1976, 630, 60, 25)

print("Okul Adi: {}, Yer: {}, Kuruluş Tarihi: {}, Öğrenci Sayısı: {}, Öğretmen Sayısı: {}, Sınıf Sayısı: {}".format(okul1.okuladi, okul1.yer, okul1.kurulus, okul1.ogrencisayi, okul1.ogretmensayi, okul1.kacsinif))
print("Okul Adi: {}, Yer: {}, Kuruluş Tarihi: {}, Öğrenci Sayısı: {}, Öğretmen Sayısı: {}, Sınıf Sayısı: {}".format(okul2.okuladi, okul2.yer, okul2.kurulus, okul2.ogrencisayi, okul2.ogretmensayi, okul2.kacsinif))
print("Okul Adi: {}, Yer: {}, Kuruluş Tarihi: {}, Öğrenci Sayısı: {}, Öğretmen Sayısı: {}, Sınıf Sayısı: {}".format(okul3.okuladi, okul3.yer, okul3.kurulus, okul3.ogrencisayi, okul3.ogretmensayi, okul3.kacsinif))
    
