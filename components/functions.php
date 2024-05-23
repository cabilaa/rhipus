<?php
function navbar($beranda, $profil)
{
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
    </div>
  </div>
<nav class='navbar navbar-expand-lg p-0'>
  <div class='container'>
    <div class='d-flex w-100 align-items-center justify-content-between'>
      <img src='assets/img/logoo.png' alt='' class='img-fluid' width='80'>
      <a href='index.php' class='$beranda text-dark text-decoration-none fs-5'>Beranda</a>
      <a id='profileBtn' class='$profil d-flex align-items-center gap-2 text-decoration-none'>
        <img src='assets/img/profill.png' alt='' class='img-fluid'>
        <small class='text-dark fs-5'>Bimo DIY</small>
      </a>
    </div>
  </div>
</nav>
";
}
