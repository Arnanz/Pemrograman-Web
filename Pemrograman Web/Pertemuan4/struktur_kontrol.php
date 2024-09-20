<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br><br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br><br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br><br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br><br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai 500 km.<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah $jumlahBuah buah.<br><br>";

$skorUjian = [85,92,78,96,88];
$totalSkor= 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah $totalSkor.<br><br>";

$nilaiSiswa =[85,92,56,64,90,55,88,79,70,96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus).<br><br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus).<br><br>";
}

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nilaiSiswa = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);

$totalNilai = array_sum($nilaiSiswa);

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus).<br>";
    } else {
        echo "Nilai: $nilai (Lulus).<br>";
    }
}

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";

$nilaiRataRata = $totalNilai / count($nilaiSiswa);
echo "Nilai rata-rata: $nilaiRataRata <br><br>";

$hargaProduk = 120000;
$diskon = 0.20;

if ($hargaProduk > 100000) {
    $diskonRp = $hargaProduk * $diskon;
    $hargaSetelahDiskon = $hargaProduk - $diskonRp;
    echo "Harga produk: Rp $hargaProduk<br>";
    echo "Diskon: Rp $diskonRp<br>";
    echo "Harga setelah diskon: Rp $hargaSetelahDiskon<br><br>";
} else {
    echo "Tidak ada diskon karena harga produk di bawah Rp 100.000<br>";
    echo "Harga produk: Rp $hargaProduk<br><br>";
}


$poin = 750;
echo "Total skor pemain adalah: $poin<br>";
if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA\n";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK\n";
}
?>