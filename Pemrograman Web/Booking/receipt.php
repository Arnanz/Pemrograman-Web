<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt - Booking Lapangan</title>
    <link rel="stylesheet" href="receipt.css">
</head>
<body>

    <h2>Receipt Booking</h2>
    <p>Terima kasih telah melakukan booking!</p>
    <p>Nama: <?php echo isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : 'Data tidak tersedia'; ?></p>
    <p>Tanggal: <?php echo isset($_GET['tanggal']) ? htmlspecialchars($_GET['tanggal']) : 'Data tidak tersedia'; ?></p>
    <p>Jam Mulai: <?php echo isset($_GET['jam_mulai']) ? htmlspecialchars($_GET['jam_mulai']) : 'Data tidak tersedia'; ?></p>
    <p>Jam Selesai: <?php echo isset($_GET['jam_selesai']) ? htmlspecialchars($_GET['jam_selesai']) : 'Data tidak tersedia'; ?></p>
    <p>Lapangan: <?php echo isset($_GET['lapangan']) ? htmlspecialchars($_GET['lapangan']) : 'Data tidak tersedia'; ?></p>

    <?php
    // Menghitung total pembayaran di halaman receipt
    if (isset($_GET['jam_mulai']) && isset($_GET['jam_selesai'])) {
        $tarif_per_jam = 40000; // Tarif per jam
        $waktu_mulai = strtotime($_GET['jam_mulai']);
        $waktu_selesai = strtotime($_GET['jam_selesai']);

        // Hitung selisih waktu dalam satuan jam
        $selisih_jam = ($waktu_selesai - $waktu_mulai) / 3600; // 3600 detik = 1 jam
        $total_pembayaran = abs($selisih_jam * $tarif_per_jam);

        echo "<p>Total Pembayaran: Rp " . number_format((float)$total_pembayaran, 0, ',', '.') . "</p>";
    } else {
        echo "<p>Total Pembayaran: Data tidak tersedia</p>";
    }
    ?>
    
    <a href="index.php">Kembali ke Homepage</a>

</body>
</html>
