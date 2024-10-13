<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input dengan Validasi AJAX</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
  <h1>Form Input dengan Validasi</h1>
  <form id="myForm">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama"><br>
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br>
    <span id="email-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
  </form>

  <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        event.preventDefault(); 

        var nama = $("#nama").val();
        var email = $("#email").val();
        var valid = true;

        $("#nama-error").text("");
        $("#email-error").text("");

        if (nama === "") {
          $("#nama-error").text("Nama harus diisi");
          valid = false;
        }

        if (email === "") {
          $("#email-error").text("Email harus diisi");
          valid = false;
        }

        if (valid) {
          $.ajax({
            url: 'proses_validasi.php',
            type: 'POST',
            data: {
              nama: nama,
              email: email
            },
            success: function(response) {
              alert("Form berhasil dikirim: " + response);
            },
            error: function() {
              alert("Terjadi kesalahan saat mengirim form.");
            }
          });
        }
      });
    });
  </script>
</body>
</html>