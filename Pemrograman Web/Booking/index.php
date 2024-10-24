<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Lapangan Badminton</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <h1>Platinum Badminton</h1>
    </div>

    <!-- Lapangan Cards -->
    <div class="grid-container">
        <?php
        $lapangan = [
            ["Lapangan 1", "tersedia", 40000, "img/lapangan.jpg"],
            ["Lapangan 2", "tersedia", 40000, "img/lapangan.jpg"],
            ["Lapangan 3", "tidak tersedia", 40000, "img/lapangan.jpg"],
            ["Lapangan 4", "tersedia", 40000, "img/lapangan.jpg"],
        ];

        foreach ($lapangan as $l) {
            echo '<div class="card">';
            echo '<h3>' . $l[0] . '</h3>';
            echo '<img src="' . $l[3] . '" alt="' . $l[0] . '" class="lapangan-img">'; // Menambahkan gambar lapangan
            echo '<p>Rp ' . number_format($l[2], 0, ',', '.') . ' / jam</p>';
            if ($l[1] == 'tersedia') {
                echo '<span class="status tersedia">tersedia</span>';
                echo '<div class="action-buttons"><a href="booking_form.php?lapangan=' . $l[0] . '" class="book-now">Booking</a></div>';
            } else {
                echo '<span class="status tidak-tersedia">tidak tersedia</span>';
            }
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
