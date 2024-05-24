<?php
require "components/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar | Rhipus</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/global.css" />
  <link rel="stylesheet" href="assets/css/masuk.css" />
  <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- MAIN -->
  <main class="d-flex h-100 w-100 align-items-center justify-content-center">
    <div class="container w-75">
      <div class="row">
        <div class="col rounded-start-4 bg-secondary-80 text-center p-5 d-flex align-items-center justify-content-center">
          <div>
            <img src="assets/img/logoo.png" alt="Logo Rhipus" class="img-fluid">
            <p class="text-white mt-4">Bergabunglah dengan kami,<br>untuk mewujudkan bumi bersih tanpa sampah</p>
          </div>
        </div>
        <div class="col rounded-end-4 bg-primary-80 p-5">
          <h2 class="fw-bold text-white text-center mb-5">Buat Akun</h2>
          <form method="post" action="">
            <?php
            if (isset($_POST['submit'])) {
              $username = $_POST['username'];
              $password = md5($_POST['password']);
              $password_c = md5($_POST['password_c']);
              if ($password == $password_c) {
                $query = "INSERT INTO `akun` (`username`, `password`) VALUES('$username', '$password')";
                if (mysqli_query($conn, $query)) {
                  echo "<script>alert('Berhasil membuat akun');document.location.href = 'index.php';</script>";
                } else {
                  echo "<small class='text-danger mb-2 d-block'>Gagal membuat akun</small>";
                }
              } else {
                echo "<small class='text-danger mb-2 d-block'>Password dan Konfirmasi Password tidak cocok</small>";
              }
            }
            ?>
            <div class="mb-3">
              <label for="username" class="form-label fw-bold text-white">Nama Pengguna</label>
              <input type="text" class="form-control bg-white-50 border-0" id="username" name="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-bold text-white">Kata Sandi</label>
              <input type="password" class="form-control bg-white-50 border-0" id="password" name="password">
            </div>
            <div class="mb-3">
              <label for="password_c" class="form-label fw-bold text-white">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control bg-white-50 border-0" id="password_c" name="password_c">
            </div>
            <button type="submit" name="submit" class="btn button-secondary-80 rounded-pill px-5 py-2 fw-bold text-white d-block mx-auto mt-5">DAFTAR</button>
            <div class="d-flex align-items-center mt-3 gap-1 justify-content-center">
              <p class="m-0 small text-white">Sudah punya akun?</p><a href="masuk.html" class="small color-light-primary">Masuk</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- END MAIN -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>