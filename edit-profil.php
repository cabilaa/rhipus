<?php
require "components/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profil | Rhipus</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/global.css" />
  <link rel="stylesheet" href="assets/css/lihat-profil.css" />
  <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- HEADER -->
  <?php navbar("", "active py-2"); ?>
  <!-- END HEADER -->

  <!-- MAIN -->
  <main class="d-flex h-100 w-100 align-items-center justify-content-center py-5">
    <div class="container w-75">
      <div class="d-flex gap-3 my-4 justify-content-center">
        <a href="lihat-profil.php">
          <i class="fa-solid fa-circle-chevron-left"></i>
        </a>
        <div class="rounded-4 border border-black p-0 flex-grow-1" style="max-width: 50%;">
          <div class="d-flex align-items-center justify-content-between border-bottom border-black p-3">
            <h2 class="fw-bold text-center m-0">Edit Profil</h2>
            <img src="assets/img/profill.png" alt="" class="img-fluid">
          </div>
          <form class="p-3">
            <div class="mb-3">
              <label for="nama_pengguna" class="form-label fw-bold">Nama Pengguna</label>
              <input type="text" class="form-control" id="nama_pengguna">
            </div>
            <div class="mb-3">
              <label for="bio" class="form-label fw-bold">Bio</label>
              <textarea type="text" class="form-control" id="bio" rows="4"></textarea>
            </div>
            <div class="d-flex align-items-center justify-content-end gap-3">
              <a href="lihat-profil.php">
                <button type="submit" class="btn button-secondary-80 rounded-pill px-3 py-1 fw-bold">Batal</button>
              </a>
              <a href="lihat-profil.php">
                <button type="submit" class="btn shadow-sm border rounded-pill px-3 py-1 fw-bold">Simpan</button>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- END MAIN -->

  <!-- FOOTER -->
  <footer class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-location-dot fs-4 text-white"></i>
            <div>
              <small class="text-white-50">Indonesia</small>
              <p class="m-0 text-white">Jawa Barat, Bandung</p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-3 mt-4">
            <i class="fa-solid fa-phone fs-4 text-white"></i>
            <p class="m-0 text-white">0813 6510 3590</p>
          </div>
        </div>
        <div class="col-3 d-flex align-items-center justify-content-center">
          <div class="d-flex gap-4">
            <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
              <i class="fa-brands fa-instagram fs-4 text-white"></i>
            </div>
            <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
              <i class="fa-brands fa-twitter fs-4 text-white"></i>
            </div>
            <div class="social-icon d-flex align-items-center justify-content-center p-2 rounded-circle">
              <i class="fa-brands fa-youtube fs-4 text-white"></i>
            </div>
          </div>
        </div>
        <div class="col-6 text-white">
          <h4 class="fw-bold">About Us</h4>
          <p class="m-0 text-white">Pada situs web ini kami akan berbagi totorial pengelolahan sampah yang bisa di daur
            ulang
            kembali, untuk
            menjadi hiasan ataupun kerajinan bertujuan mengurangi pencemaran sampah di indonesia dan
            menyelamatkan bumi.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script>
    const profileBtn = document.querySelector('#profileBtn')
    const floatingMenu = document.querySelector('.floating-menu')
    const backLayer = document.querySelector('.back-layer')

    profileBtn.addEventListener('click', function() {
      backLayer.classList.add("show")
      floatingMenu.classList.add("show")
    })

    backLayer.addEventListener('click', function() {
      backLayer.classList.remove("show")
      floatingMenu.classList.remove("show")
    })
  </script>
</body>

</html>