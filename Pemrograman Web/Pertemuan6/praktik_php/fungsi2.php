<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($name, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo"Perkenalkan, nama saya ".$name." <br/>";

    //memanggil fungsi lain
    echo"Saya berusia " . hitungUmur(2004, 2024) . " tahun<br/>";
    echo"Senang berkenalan dengan anda <br/>";
}

//memanggil fungsi perkenalan
perkenalan("Pasha");

?>