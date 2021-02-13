<?php

date_default_timezone_set('Europe/Istanbul');

$saat = date("H", strtotime("Now"));
$saatd = intval($saat); 

if (($saatd >= 6) && (($saatd < 10)))
echo "Günaydın";
else if (($saatd >= 10) && (($saatd < 17)))
echo "İyi günler";
else if (($saatd >= 17) && (($saatd < 20)))
echo "İyi akşamlar";
else if (($saatd >= 20) && (($saatd < 24)))
echo "İyi geceler";
else if (($saatd >= 0) && (($saatd < 6)))
echo "Esenlikler dilerim";


?>