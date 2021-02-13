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

            $lirasayi = addslashes(strip_tags($_POST["Lira_sayi"]));
            $kurussayi = addslashes(strip_tags($_POST["Kurus_sayi"]));

            $lira = array(100, 50, 25, 10, 5, 1);
            $lirasonuc = array(0, 0, 0, 0, 0, 0);

            $intlira = intval($lirasayi);
            $intkurus = intval($kurussayi);


            $toplam = 100*$intlira + $intkurus;

            for($c=0; $c < 6; $c++){
                if (($toplam/$lira[$c]) > 0)
                {
                    $lirasonuc[$c] = intval($toplam/$lira[$c]);
                }

                $toplam = $toplam%$lira[$c];
            }
            
            $toplamsonuc = $lirasonuc[0] + $lirasonuc[1] + $lirasonuc[2] + $lirasonuc[3] + $lirasonuc[4] + $lirasonuc[5];

            echo $toplamsonuc;
            
    }
    else {
    ?>
    <form action="?" method="post">
    <label for="kullanici_adi">Bir Sayı Giriniz</label>
            <input type="text" name="Lira_sayi" id="lira_sayi" autocomplete="off"
            placeholder="Lira Giriniz"/>
            <input type="text" name="Kurus_sayi" id="kurus_sayi" autocomplete="off"
            placeholder="Kuruş Giriniz"/>


            <button type="submit" name="pg">Kontrol Et</button>
    </form>
    <?php
    }
    ?>
</div>

</body>
</html>