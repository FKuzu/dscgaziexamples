<html>
<head>
    <title>Anasayfa</title>
    <link rel="stylesheet">
</head>
<body>


<?php
echo "<table border='1px' width='300px' height='300px'>";
    for($satir=1; $satir<10; $satir++)
    {
        echo "<tr>";
        for($deger = 1; $deger<10; $deger++)
        {
            echo "<td bgcolor = '";
            if($deger==1 && $satir<9)
                echo "#aabbdd'> ".(9-$satir);
            else if ($satir == 9 && $deger>1)
                echo "#aabbdd'> ".chr(63+$deger);
            else
            {
                if (($satir + $deger) % 2 == 0)
                    echo "#222222'";
                else
                    echo "#dddddd'";
                echo "> * ";
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "<table/>";
?>

</body>
</html>