<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo"Perkenalkan, nama saya ".$nama." <br/>";
    echo"Senang berkenalan dengan anda <br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Pasha", "Hallo");

echo "<hr>";

$saya = "Hamdan";
$ucapanSalam = "selamat pagi";

//memanggil tanpa mengisi parameter salam
perkenalan($saya);

 ?>

