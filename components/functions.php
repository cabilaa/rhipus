<?php
session_start();
// Mendapatkan skema (http atau https)
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";

// Mendapatkan hostname
$host = $_SERVER['HTTP_HOST'];

// Mendapatkan URI
$uri = $_SERVER['REQUEST_URI'];

// Menggabungkan semuanya untuk mendapatkan URL saat ini
$currentUrl = $scheme . "://" . $host . $uri;

// echo "URL saat ini: " . $currentUrl;
if ($currentUrl != "http://localhost/rhipus/masuk.php" && $currentUrl != "http://localhost/rhipus/daftar.php") {
  // if (!isset($_SESSION['username'])) {
  //   header("Location: http://localhost/rhipus/masuk.php");
  // } 
}
$conn = mysqli_connect("localhost", "root", "", "rhipus");
function navbar($beranda, $profil)
{
  if (isset($_SESSION["username"])) {
    echo "
  <div class='back-layer position-fixed'></div>
  <div class='floating-menu position-fixed top-0 end-0'>
    <div class='d-flex flex-column gap-3 bg-white p-4 pe-5 shadow rounded'>
      <a href='lihat-profil.php' class='d-flex align-items-center gap-3'>
        <i class='fa-solid fa-user fs-5'></i>
        <p class='m-0 fw-bold'>Lihat profil</p>
      </a>
      <a href='pengaturan.php' class='d-flex align-items-center gap-3'>
        <i class='fa-solid fa-gear fs-5'></i>
        <p class='m-0 fw-bold'>Pengaturan</p>
      </a>
      <a href='masuk.php?logout' class='d-flex align-items-center gap-3'>
        <i class='fa-solid fa-arrow-right-from-bracket fs-5 text-danger'></i>
        <p class='m-0 fw-bold text-danger'>Logout</p>
      </a>
    </div>
  </div>
<nav class='navbar navbar-expand-lg p-0'>
  <div class='container'>
    <div class='d-flex w-100 align-items-center justify-content-between'>
      <img src='assets/img/logoo.png' alt='' class='img-fluid' width='80'>
      <a href='index.php' class='$beranda text-dark text-decoration-none fs-5'>Beranda</a>
      <a id='profileBtn' class='$profil d-flex align-items-center gap-2 text-decoration-none'>
        <img src='" . $_SESSION['image'] . "' alt='' class='img-fluid avatar-img' width='40'>
        <small class='text-dark fs-5'>" . $_SESSION['username'] . "</small>
      </a>
    </div>
  </div>
</nav>
";
  } else {
    echo "
    <div class='back-layer position-fixed'></div>
    <div class='floating-menu position-fixed top-0 end-0'>
      <div class='d-flex flex-column gap-3 bg-white p-4 pe-5 shadow rounded'>
        <a href='lihat-profil.php' class='d-flex align-items-center gap-3'>
          <i class='fa-solid fa-user fs-5'></i>
          <p class='m-0 fw-bold'>Lihat profil</p>
        </a>
        <a href='pengaturan.php' class='d-flex align-items-center gap-3'>
          <i class='fa-solid fa-gear fs-5'></i>
          <p class='m-0 fw-bold'>Pengaturan</p>
        </a>
        <a href='masuk.php?logout' class='d-flex align-items-center gap-3'>
          <i class='fa-solid fa-arrow-right-from-bracket fs-5 text-danger'></i>
          <p class='m-0 fw-bold text-danger'>Logout</p>
        </a>
      </div>
    </div>
  <nav class='navbar navbar-expand-lg p-0'>
    <div class='container'>
      <div class='d-flex w-100 align-items-center justify-content-between'>
        <img src='assets/img/logoo.png' alt='' class='img-fluid' width='80'>
        <a href='index.php' class='$beranda text-dark text-decoration-none fs-5'>Beranda</a>
        <a id='profileBtn' href='masuk.php' class='d-flex align-items-center gap-2 text-decoration-none'>
          <small class='text-dark fs-5'>Login</small>
        </a>
      </div>
    </div>
  </nav>
  ";
  }
}

function single_query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  if ($row = $result->fetch_assoc()) {
    // Menggabungkan hasil menjadi satu string
    $resultString = $row['bio'];
    return $resultString;
  }
}

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function time_elapsed_string($datetime, $full = false)
{
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $string = array(
    'y' => 'tahun',
    'm' => 'bulan',
    'd' => 'hari',
    'h' => 'jam',
    'i' => 'menit',
    's' => 'detik',
  );

  // Array untuk menampung hasil format waktu
  $formatted = array();

  // Iterasi melalui setiap komponen waktu
  foreach ($string as $key => $value) {
    if ($diff->$key) {
      $formatted[$key] = $diff->$key . ' ' . $value;
    }
  }

  // Jika hanya ingin komponen waktu terbesar, potong array ke 1 elemen
  if (!$full) $formatted = array_slice($formatted, 0, 1);

  // Gabungkan semua komponen waktu menjadi satu string
  return $formatted ? implode(', ', $formatted) . ' lalu' : 'baru saja';
}

// function query($query)
// {
//   global $conn;
//   $result = mysqli_query($conn, $query);
//   $rows = [];
//   while ($row = mysqli_fetch_assoc($result)) {
//     $rows[] = $row;
//   }
//   return $rows;
// }