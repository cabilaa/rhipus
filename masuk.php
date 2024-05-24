<?php
require "components/functions.php";
if (isset($_GET["logout"])) {
  session_unset();
  session_destroy();
  echo "<script>document.location.href = 'masuk.php';</script>";
} else if (isset($_SESSION["login"])) {
  echo "<script>document.location.href = 'index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk | Rhipus</title>
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
            <p class="text-white mt-4">Untuk tetap terhubung dengan kami,<br>silahkan masuk dengan akun anda</p>
          </div>
        </div>
        <div class="col rounded-end-4 bg-primary-80 p-5">
          <h2 class="fw-bold text-white text-center mb-4">Masuk</h2>
          <form method="post" action="">
            <?php
            if (isset($_POST['submit'])) {
              $username = $_POST['username'];
              // $password = $_POST['password'];
              $password = md5($_POST['password']);
              $sql = "SELECT * FROM akun WHERE username = '$username'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              if ($result->num_rows > 0) {
                if ($password == $row['password']) {
                  $_SESSION['login'] = true;
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                  header("Location: index.php");
                } else {
                  echo "
                    <small class='text-danger mb-2 d-block'>Username / password Anda salah</small>
                    ";
                }
              } else {
                echo "
                  <small class='text-danger mb-2 d-block'>Username / password Anda salah</small>
                  ";
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
            <button type="submit" name="submit" class="btn button-secondary-80 rounded-pill px-5 py-2 fw-bold text-white d-block mx-auto mt-5">MASUK</button>
            <div class="d-flex align-items-center mt-3 gap-1 justify-content-center">
              <p class="m-0 small text-white">Belum punya akun?</p><a href="daftar.html" class="small color-light-primary">Daftar</a>
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