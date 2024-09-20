<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;


echo "Hasil Operasi Matematika <br>";
echo "Penjumlahan: $a + $b = $hasilTambah<br>";
echo "Pengurangan: $a - $b = $hasilKurang<br>";
echo "Perkalian: $a * $b = $hasilKali<br>";
echo "Pembagian: $a / $b = $hasilBagi<br>";
echo "Sisa Pembagian: $a % $b = $sisaBagi<br>";
echo "Pangkat: $a ** $b = $pangkat<br>";
echo "Hasil sama: $a == $b = $hasilSama<br>";
echo "Hasil tidak sama: $a != $b = $hasilTidakSama<br>";
echo "Hasil lebih kecil: $a < $b = $hasilLebihKecil<br>";
echo "Hasil lebih besar: $a > $b = $hasilLebihBesar<br>";
echo "Hasil lebih kecil sama: $a <= $b = $hasilLebihKecilSama<br>";
echo "Hasil lebih besar sama: $a >= $b = $hasilLebihBesarSama<br>";
echo "Hasil AND: $a && $b = $hasilAnd<br>";
echo "Hasil OR: $a || $b = $hasilOr<br>";
echo "Hasil NOT A: !$a = $hasilNotA<br>";
echo "Hasil NOT B: !$b = $hasilNotB<br>";
$a += $b;
echo "Hasil a += b: $a += $b = $a<br>";
$a -= $b;
echo "Hasil a -= b: $a -= $b = $a<br>";
$a *= $b;
echo "Hasil a -= b: $a -= $b = $a<br>";
$a /= $b;
echo "Hasil a /= b: $a /= $b = $a<br>";
$a %= $b;
echo "Hasil a %= b: $a %= $b = $a<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil identik: $a === $b = $hasilIdentik<br>";
echo "Hasil tidak identik: $a !== $b = $hasilTidakIdentik<br>";

$kursi_total = 45;
$kursi_ditempati = 28;

$kursi_kosong = $kursi_total - $kursi_ditempati;

$persentase_kosong = ($kursi_kosong / $kursi_total) * 100;

echo "Persentase kursi yang masih kosong: " . number_format($persentase_kosong, 2) . "%";
?>

