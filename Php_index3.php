<html>
<head>
    <title>Anasayfa</title>
    <link rel="stylesheet">
</head>
<body>



<div class="ortakisim">
    <?php
    if(isset($_POST["pg"])){

          //  $girilensayi = $_POST["Mukemmel_sayi"];

            $girilensayi = addslashes(strip_tags($_POST["Mukemmel_sayi"]));

            $intsayi = intval($girilensayi);

            $toplam = 0;

            for($c=2; $c < $intsayi; $c++){
                if (($intsayi%$c) == 0)
                {
                    $toplam = $toplam + $c;
                }
            }
        

            //echo "Kullanıcı Adınız: ".$kullanici."<br> Parolanız:".$parola;

            if (($toplam > 0) && ($intsayi != 2) || (($intsayi == 1))){
                echo "Bu bir Asal Sayı değildir.";
            }
            else{
                echo "Bu bir asal sayidir";
            }

            
    }
    else {
    ?>
    <form action="?" method="post">
    <label for="kullanici_adi">Bir Sayı Giriniz</label>
            <input type="text" name="Mukemmel_sayi" id="mukemmel_sayi" autocomplete="off"
            placeholder="Sayı Giriniz"/>


            <button type="submit" name="pg">Kontrol Et</button>
    </form>
    <?php
    }
    ?>
</div>

</body>
</html>