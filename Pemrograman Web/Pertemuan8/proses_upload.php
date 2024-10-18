<?php
//lokasi penyimpanan file yg diunggah
$targetDirectory = "images/";


// periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}


if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5*1024*1024;

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        if (in_array($fileType, $allowedExtensions) && $_FILES['files']['size'][$i] < $maxsize) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File " . $fileName . " berhasil diunggah<br>";
            } else {
                echo "Gagal mengunggah file " . $fileName . "<br>";
            }
        } else {
            echo "File " . $fileName . " tidak valid atau melebihi ukuran maksimal yang diizinkan<br>";
        }
    }
}else {
    echo "Tidak ada file yang diunggah";
}
?>