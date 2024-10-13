<!DOCTYPE html>
<html>
<head>
  <title>Form Input PHP</title>
</head>
<body>
  <h2>Form Input PHP</h2>
  <?php
  // Inisialisasi variabel
  $namaErr = $emailErr = "";
  $nama = $email = "";

  // Cek apakah form sudah disubmit
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama (contoh: pastikan nama tidak kosong)
    $namaInput = $_POST["nama"];
    $namaInput = htmlspecialchars($namaInput, ENT_QUOTES, 'UTF-8');
    if (empty($namaInput)) {
      $namaErr = "Nama harus diisi";
    } else {
      $nama = $namaInput;
      echo "Nama berhasil disimpan!<br>";
    }

    // Validasi email
    $emailInput = $_POST["email"];
    $emailInput = htmlspecialchars($emailInput, ENT_QUOTES, 'UTF-8');
    if (filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
      $email = $emailInput;
      echo "Email berhasil disimpan!<br>";
    } else {
      $emailErr = "Format email tidak valid";
    }
  }
  ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama: </label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"><br>
    <span class="error"><?php echo $namaErr; ?></span><br>

    <label for="email">Email: </label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br>
    <span class="error"><?php echo $emailErr; ?></span><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>