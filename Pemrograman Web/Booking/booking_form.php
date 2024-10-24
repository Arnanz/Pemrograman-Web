<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking</title>
    <link rel="stylesheet" href="form.css">
    
    <script>
        function validateForm() {
            const jamMulai = document.getElementById('jam_mulai').value;
            const jamSelesai = document.getElementById('jam_selesai').value;

            // Konversi jam ke bentuk jam 24 agar bisa dibandingkan
            const mulai = parseInt(jamMulai.split(':')[0]);
            const selesai = parseInt(jamSelesai.split(':')[0]);

            // Jika jam mulai lebih besar atau sama dengan jam selesai, tampilkan peringatan
            if (mulai >= selesai) {
                alert("Jam selesai harus lebih besar dari jam mulai.");
                return false; // Mencegah form submit
            }

            return true; // Mengizinkan submit jika validasi lolos
        }
    </script>
</head>
<body>

<div class="form-container">
    <h2>Form Booking Lapangan</h2>
    <form action="proses_booking.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>

        <label for="jam_mulai">Jam Mulai:</label>
        <select id="jam_mulai" name="jam_mulai" required>
            <?php for ($i = 8; $i <= 21; $i++): ?>
                <option value="<?php echo $i . ':00'; ?>"><?php echo $i . ':00'; ?></option>
            <?php endfor; ?>
        </select>

        <label for="jam_selesai">Jam Selesai:</label>
        <select id="jam_selesai" name="jam_selesai" required>
            <?php for ($i = 8; $i <= 21; $i++): ?>
                <option value="<?php echo $i . ':00'; ?>"><?php echo $i . ':00'; ?></option>
            <?php endfor; ?>
        </select>

        <label for="lapangan">Lapangan:</label>
        <input type="text" id="lapangan" name="lapangan" value="<?php echo isset($_GET['lapangan']) ? htmlspecialchars($_GET['lapangan']) : ''; ?>" readonly>

        <label for="bukti_pembayaran">Unggah Bukti Pembayaran (DP):</label>
        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>

        <p><strong>Harga: Rp 40.000 / jam</strong></p>
        <p><strong>Nomor Rekening: 64224703 (Bank BRI)</strong></p>

        <button type="submit">Submit Booking</button>
    </form>
</div>

</body>
</html>
