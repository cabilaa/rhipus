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
  <main class="content d-flex align-items-start gap-3 justify-content-center mx-auto mt-5">
  <i class="fa-solid fa-circle-chevron-left fs-4"></i>
    <div class="border border-dark rounded-4 h-100 w-100 d-flex align-items-center justify-content-center">
      <div class="text-center">
        <i class="fa-solid fa-upload display-3 text-dark mb-3"></i>
        <p class="m-0 text-muted">Pilih video untuk diunggah</p>
        <p class="m-0 text-muted">atau tarik file ke sini</p>
        <button type="submit" class="btn button-secondary-80 rounded-pill px-3 py-1 fw-bold mt-3">Pilih video</button>
      </div>
    </div>
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