<?php
require "components/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil | Rhipus</title>
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
  <main class="container">

    <div class="search-container mt-4 pt-4 sticky-top bg-white">
      <form>
        <div class="mb-3 position-relative w-50 mx-auto">
          <input type="text" class="form-control rounded-pill pe-5" placeholder="Telusuri">
          <button>
            <img src="assets/img/search.png" alt="" class="position-absolute top-0 end-0 img-fluid" width="57">
          </button>
        </div>
      </form>
    </div>

    <div class="container">
      <section id="profile">
        <div class="d-flex align-items-center gap-4">
          <div>
            <img src="<?= $_SESSION['image'] ?>" alt="Profile" class="img-fluid" width="80">
          </div>
          <div>
            <h4 class="fw-bold m-0"><?= $_SESSION['username'] ?></h4>
            <p class="mb-2">
              <?php
              echo single_query("SELECT bio FROM akun WHERE akun_id = $_SESSION[akun_id]");
              ?>
            </p>
            <div class="d-flex align-items-center gap-4">
              <a href="unggah.php">
                <button class="d-flex align-items-center gap-1 px-2 py-1 bg-transparent rounded border border-black button-unggah">
                  <i class="fa-solid fa-plus"></i>
                  Unggah
                </button>
              </a>
              <a href="edit-profil.php" class="d-flex align-items-center gap-1 px-2 py-1 bg-transparent rounded border border-black button-unggah">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit Profil
              </a>
            </div>
          </div>
        </div>
      </section>

      <section id="my-videos" class="mt-5">
        <h5 class="fw-bold active-line d-inline-block">My Videos</h5>
        <div class="row g-5">
          <?php
          $videos = query("SELECT * FROM `video` JOIN `akun` ON channel = akun_id WHERE akun_id = $_SESSION[akun_id]");
          // print_r($videos);
          foreach ($videos as $video) :
          ?>
            <a href="putar_video.php?id=<?= $video['video_id'] ?>" class="col-4 image-card py-4">
              <img src="<?= $video['thumbnail'] ?>" alt="" class="img-fluid">
              <div class="d-flex align-items-start gap-3 mt-2">
                <img src="<?= $video['image'] ?>" alt="" class="img-fluid" width="45">
                <div>
                  <p class="fw-bold m-0 mt-2"><?= $video['judul'] ?></p>
                  <small class="text-secondary fw-bold d-block"><?= $video['username'] ?></small>
                  <small class="text-secondary fw-bold"><?= $video['views'] ?>x ditonton - <?= time_elapsed_string($video['tgl_upload']) ?></small>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </section>


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