<?php
require "components/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video | Rhipus</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/beranda.css" />
    <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- HEADER -->
    <?php navbar("active py-3", ""); ?>
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

        <div class="button mb-4">
            <button class="semua fw-bold px-2 py-1 rounded">Semua video</button>
        </div>
<!-- <iframe class="w-100 rounded-4" height="230" src="https://www.youtube.com/embed/MqcjUWwCsFg?si=bDAwg1F1W8cmuuIq"></iframe> -->
        <div class="row py-4 g-3 playing-video">
            <div class="col-7">
                <img src="assets/img/video_thumbnail.svg" alt="" class="img-fluid">
            </div>
            <div class="col-5">
                <div class="d-flex flex-column align-items-start">
                    <h2 class="fw-bold m-0">DIY TAS CANTIK!</h2>
                    <p class="fw-bold text-secondary m-0">Finaliza</p>
                    <p class="fw-bold text-secondary">550.000 x ditonton - 2 bulan yang lalu</p>
                    <a href="https://id.shp.ee/tHgDWB7" target="_blank" class="button-secondary d-inline-flex align-items-center text-decoration-none text-dark gap-2 py-2 px-3 rounded-4 shadow">
                        <i class="fa-solid fa-link"></i>
                        <p class="fw-bold m-0">Link tokonya</p>
                    </a>
                    <div class="px-4 py-3 mt-3 rounded-4 desc-box text-muted">
                        <small class="d-block fw-bold">Begitulah langkah langkah yang bisa kalian ikuti ketika kalian ingin mengubah
                            sampah menjadi tas diy yang cantik.</small>
                        <small class="d-block fw-bold my-5">Sangat mudah bukan? jangan lupa follow and subscribe channel kita.</small>
                        <div class="d-flex align-items-center gap-2">
                            <img src="assets/img/finaliza.svg" alt="" width="40" class="img-fluid rounded-circle">
                            <p class="fw-bold m-0">Finaliza</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row g-5 justify-content-center">
            <div class="col-4 image-card py-4">
                <!-- <iframe class="w-100 rounded-4" height="230" src="https://www.youtube.com/embed/MqcjUWwCsFg?si=bDAwg1F1W8cmuuIq"></iframe> -->
                <img src="assets/img/potbunga.png" alt="" class="img-fluid">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/finaliza.svg" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">DIY botol plastik</p>
                        <small class="text-secondary fw-bold d-block">Finaliza</small>
                        <small class="text-secondary fw-bold">90rb ditonton - 6 hari yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/dompetkecap.png" alt="" class="img-fluid">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/vaniprofil.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">TUTORIAL DOMPET BANGO</p>
                        <small class="text-secondary fw-bold d-block">Vani DIY</small>
                        <small class="text-secondary fw-bold">1rb ditonton - 3 jam yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/dompetmiesedap.jpeg" alt="" class="img-fluid rounded-4">
                <div class="d-flex align-items-start gap-3 mt-4">
                    <img src="assets/img/profilkardus.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">DOMPET DARI MIE SEDAP!</p>
                        <small class="text-secondary fw-bold d-block">Mainan Kreatif</small>
                        <small class="text-secondary fw-bold">992rb ditonton - 2 minggu yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/stikeskrim.png" alt="" class="img-fluid">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/profillebah.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">MEMBUAT VAS MINI</p>
                        <small class="text-secondary fw-bold d-block">Pinkie Making</small>
                        <small class="text-secondary fw-bold">9rb ditonton - 4 hari yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/tempatpensil.png" alt="" class="img-fluid">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/profilcabila.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">TUTORIAL TEMPAT PENSIL AESTHETIC</p>
                        <small class="text-secondary fw-bold d-block">cabila foryou</small>
                        <small class="text-secondary fw-bold">33rb ditonton - 1 bulan yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/storage.png" alt="" class="img-fluid rounded-4">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/profilkaleng.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">TEMPAT PENSIL CANTIK BANGET^^</p>
                        <small class="text-secondary fw-bold d-block">Kalengku</small>
                        <small class="text-secondary fw-bold">2jt ditonton - 8 bulan yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/taspita.png" alt="" class="img-fluid rounded-4">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/profillebah.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">KAMU HARUS BIKIN INI..</p>
                        <small class="text-secondary fw-bold d-block">lebah manis</small>
                        <small class="text-secondary fw-bold">2,3rb ditonton - 10 jam yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/vasbunga.jpeg" alt="" class="img-fluid rounded-4">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/catsprofil.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">PAS BUNGA DARI TUTUP BOTOL</p>
                        <small class="text-secondary fw-bold d-block">second choice</small>
                        <small class="text-secondary fw-bold">1,5jt ditonton - 7 bulan yang lalu</small>
                    </div>
                </div>
            </div>
            <div class="col-4 image-card py-4">
                <img src="assets/img/topisunlight.jpeg" alt="" class="img-fluid rounded-4">
                <div class="d-flex align-items-start gap-3 mt-2">
                    <img src="assets/img/profilslyabee.png" alt="" class="uploader-img">
                    <div>
                        <p class="fw-bold m-0 mt-2">PLASTIK CUCI PIRING JANGAN DIBUANG!</p>
                        <small class="text-secondary fw-bold d-block">Moms update</small>
                        <small class="text-secondary fw-bold">115rb ditonton - 3 minggu yang lalu</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- <table>
      <tr>
        <td>
          <iframe width="390" height="248" src="https://www.youtube.com/embed/MqcjUWwCsFg?si=bDAwg1F1W8cmuuIq"></iframe>
        </td>
        <td>
          <iframe width="390" height="248" src="https://www.youtube.com/embed/yABjo-it1fI?si=qdJcW3ITfpT35JMo"></iframe>
        </td>
        <td>
          <iframe width="390" height="248" src="https://www.youtube.com/embed/oTVlH2TTh9Y?si=uR-8LJneKzHqD8Mm"></iframe>
        </td>
      </tr>
      <td>
        <iframe width="390" height="248" src="https://www.youtube.com/embed/-fvlyHqSbZQ?si=wW6xXgPmZZH_QY_t"></iframe>
      </td>
    </table> -->
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
                    <p class="m-0 text-white">Pada situs web ini kami akan berbagi totorial pengelolahan sampah yang bisa di daur ulang kembali, untuk menjadi hiasan ataupun kerajinan bertujuan mengurangi pencemaran sampah di indonesia dan menyelamatkan bumi.</p>
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