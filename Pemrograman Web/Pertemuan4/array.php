<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);


$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eve', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br><br>Daftar karyawan dengan pengalaman kerja lebh dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);


$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<br><br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah:<br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];
$mataKuliah = 'Matematika';
$jumlahNilai = 0;
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    $jumlahNilai += $nilai[1];
}
$rataRata = $jumlahNilai / count($daftarNilai[$mataKuliah]);

echo "<br><br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah yang mencapai nilai di atas rata-rata kelas ($rataRata):<br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
    }
}
?>