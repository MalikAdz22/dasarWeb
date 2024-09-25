<?php

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan ("Malik","Hallo");

echo "<hr>";

$saya = "Malik";
$ucapanSalam = "Selamat pagi";


perkenalan($saya);
?>