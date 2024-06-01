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
  <link rel="stylesheet" href="assets/css/upload.css" />
  <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- HEADER -->
  <?php navbar("", "active py-2"); ?>
  <!-- END HEADER -->

  <!-- MAIN -->
  <main class="d-flex align-items-start gap-3 justify-content-center mx-auto mt-5">
    <a href="lihat-profil.php"><i class="fa-solid fa-circle-chevron-left fs-4 mt-3"></i></a>
    <div id="video-added" class="border border-dark rounded-4 p-3 w-50">
      <h5 class="fw-bold">Unggah Video</h5>
      <hr>
      <div class="mb-3 mt-4">
        <label for="video" class="form-label fw-bold d-block">Video*</label>
        <input type="file" name="video">
      </div>
      <div class="mb-3 mt-4">
        <label for="judul" class="form-label fw-bold">Judul*</label>
        <input type="text" class="form-control small" id="judul" placeholder=""></input>
      </div>
      <div class="mb-3 mt-4">
        <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
        <textarea type="text" class="form-control small" id="deskripsi" rows="4" placeholder="Tambahkan deskripsi video"></textarea>
      </div>
      <div class="mb-3">
        <label for="link" class="form-label fw-bold">Link Toko <i class="fa-solid fa-link"></i></label>
        <input type="text" class="form-control" id="link">
      </div>
      <div class="d-flex align-items-center justify-content-end gap-3">
        <a href="lihat-profil.php">
          <button type="submit" class="btn shadow-sm border rounded-pill px-3 py-1 fw-bold">Batal</button>
        </a>
        <a href="lihat-profil.php">
          <button type="submit" class="btn button-secondary-80 rounded-pill px-3 py-1 fw-bold">Simpan</button>
        </a>
      </div>
    </div>
    <!-- <div id="add-video" class="border border-dark rounded-4 h-100 w-100 d-flex align-items-center justify-content-center">
      <div class="text-center">
        <i class="fa-solid fa-upload display-3 text-dark mb-3"></i>
        <p class="m-0 text-muted">Pilih video untuk diunggah</p>
        <p class="m-0 text-muted">atau tarik file ke sini</p>
        <button type="submit" class="btn button-secondary-80 rounded-pill px-3 py-1 fw-bold mt-3">Pilih video</button>
      </div>
    </div> -->
  </main>
  <!-- END MAIN -->
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