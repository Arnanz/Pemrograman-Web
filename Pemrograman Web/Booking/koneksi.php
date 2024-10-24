<?php
$serverName = "ARNANZ\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "BookingLapangan",
);

// Membuat koneksi
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die("Koneksi database gagal: " . print_r(sqlsrv_errors(), true));
}

?>
