<?php
include 'koneksi.php'; // Menghubungkan ke database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$lapangan = $_POST['lapangan'];
$status_pembayaran = "Sudah Terkirim";


// Menghitung total pembayaran
$tarif_per_jam = 40000; // Tarif per jam
$waktu_mulai = strtotime($jam_mulai);
$waktu_selesai = strtotime($jam_selesai);

// Hitung selisih waktu dalam satuan jam
$selisih_jam = ($waktu_selesai - $waktu_mulai) / 3600; // 3600 detik = 1 jam
$total_pembayaran = abs($selisih_jam * $tarif_per_jam); // Pastikan tidak negatif

// Mengunggah bukti pembayaran
$uploadDir = 'uploads/';
$uploadFile = $uploadDir . basename($_FILES['bukti_pembayaran']['name']);

if (move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], $uploadFile)) {
    // Query untuk menyimpan booking
    $sql = "INSERT INTO Booking (nama, tanggal, jam_mulai, jam_selesai, tempat, bukti_pembayaran, status_pembayaran, total_pembayaran) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($nama, $tanggal, $jam_mulai, $jam_selesai, $lapangan, $uploadFile, $status_pembayaran, $total_pembayaran);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        // Mengarahkan ke halaman receipt setelah berhasil menyimpan data
        header("Location: receipt.php?lapangan=$lapangan&nama=$nama&tanggal=$tanggal&jam_mulai=$jam_mulai&jam_selesai=$jam_selesai&total_pembayaran=" . number_format($total_pembayaran, 0, ',', '.'));
        exit();
    } else {
        echo "Gagal melakukan booking.";
        die(print_r(sqlsrv_errors(), true));
    }
} else {
    echo "Error mengunggah bukti pembayaran.";
}
}
?>
