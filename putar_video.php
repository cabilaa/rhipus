<?php
require "components/functions.php";
if (isset($_GET['id'])) {
    $video_id = $_GET['id'];
    $videos = query("SELECT * FROM `video` JOIN akun ON video.channel = akun.akun_id WHERE video_id = $video_id");
    $videos_lain = query("SELECT * FROM `video` JOIN akun ON video.channel = akun.akun_id WHERE video_id <> $video_id");
}
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
            <form action="index.php" method="get">
                <div class="mb-3 position-relative w-50 mx-auto">
                    <input type="text" name="keyword" class="form-control rounded-pill pe-5" placeholder="Telusuri">
                    <button type="submit">
                        <img src="assets/img/search.png" alt="" class="position-absolute top-0 end-0 img-fluid" width="57">
                    </button>
                </div>
            </form>
        </div>

        <a href="index.php" class="button mb-4">
            <button class="semua fw-bold px-2 py-1 rounded">Semua video</button>
        </a>
        <!-- <iframe class="w-100 rounded-4" height="230" src="https://www.youtube.com/embed/MqcjUWwCsFg?si=bDAwg1F1W8cmuuIq"></iframe> -->
        <?php
        // print_r($videos);
        foreach ($videos as $video) :
        ?>
            <div class="row py-4 g-3 playing-video h-100">
                <div class="col-7">
                    <div class="video-container w-100">
                        <video controls class="img-fluid w-100 rounded-3">
                            <source src="<?= $video['video_path'] ?>" type="video/mp4">
                            Browser Anda tidak mendukung elemen video.
                        </video>
                    </div>
                    <!-- <div class="thumbnail rounded-3">
                        <img src="<?= $video['thumbnail'] ?>" alt="" class="img-fluid">
                    </div> -->
                </div>
                <div class="col-5 max-h-100">
                    <div class="d-flex flex-column align-items-start h-100">
                        <h2 class="fw-bold m-0"><?= $video['judul'] ?></h2>
                        <p class="fw-bold text-secondary m-0"><?= $video['username'] ?></p>
                        <p class="fw-bold text-secondary"><?= $video['views'] ?> x ditonton - <?= time_elapsed_string($video['tgl_upload']) ?></p>
                        <?php
                        if ($video['link_toko'] != null) {
                        ?>
                            <a href="<?= $video['link_toko'] ?>" target="_blank" class="button-secondary d-inline-flex align-items-center text-decoration-none text-dark gap-2 py-2 px-3 rounded-4 shadow">
                                <i class="fa-solid fa-link"></i>
                                <p class="fw-bold m-0">Link tokonya</p>
                            </a>
                        <?php
                        }
                        ?>
                        <div class="px-4 py-3 mt-3 rounded-4 desc-box text-muted w-100 h-100 d-flex flex-column justify-content-between">
                            <small class="d-block fw-bold"><?= $video['deskripsi'] ?></small>
                            <div class="d-flex align-items-center gap-2 mt-4">
                                <img src=<?= $video['image'] ?> alt="" width="40" class="img-fluid rounded-circle">
                                <p class="fw-bold m-0"><?= $video['username'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <hr class="my-5">

        <div class="row g-5">
            <?php
            foreach ($videos_lain as $video_lain) :
                // print_r($videos);
            ?>
                <a href="putar_video.php?id=<?= $video_lain['video_id'] ?>" class="col-4 image-card py-4">
                    <!-- <iframe class="w-100 rounded-4"  src="https://www.youtube.com/embed/MqcjUWwCsFg?si=bDAwg1F1W8cmuuIq"></iframe> -->
                    <img src="<?= $video_lain['thumbnail'] ?>" alt="" class="img-fluid">
                    <div class="d-flex align-items-start gap-3 mt-2">
                        <img src="<?= $video_lain['image'] ?>" alt="" class="uploader-img">
                        <div>
                            <p class="fw-bold m-0 mt-2"><?= $video_lain['judul'] ?></p>
                            <small class="text-secondary fw-bold d-block"><?= $video_lain['username'] ?></small>
                            <small class="text-secondary fw-bold"><?= $video_lain['views'] ?>x ditonton - <?= time_elapsed_string($video['tgl_upload']) ?></small>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            <!-- <div class="col-4 image-card py-4">
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
            </div> -->
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