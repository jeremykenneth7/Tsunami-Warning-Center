<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tsunami.png">
    <title>Tsunami Warning Center</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<!-- navbar -->
<?php include 'frontend/header/navbar.php'; ?>
<!-- akhir navbar -->

<!-- main -->
<div class="main-item container border-bottom">
    <div class="row align-items-center pt-4">
        <div class="col-auto text-gray-500 font-weight-light">
            <h3><b>Berita</b></h3>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/berita1.jpg" class="rounded" width="215px" height="224" alt="berita1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="https://travel.detik.com/travel-news/d-6391117/pvbmg-ancaman-tsunami-34-meter-di-selatan-jawa-bikin-panik-resah">
                                <h5 class="card-title"><b>PVBMG: Ancaman Tsunami 34 Meter di Selatan Jawa Bikin Panik-Resah</b></h5>
                            </a>
                            <p class="card-text">Pusat Vulkanologi dan Mitigasi Bencana Geodesi (PVMBG) menyebut pernyataan ahli ITB soal ancaman tsunami 34 meter di selatan Jawa itu bikin warga panik-resah.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/berita2.jpeg" class="rounded" width="215px" height="224" alt="berita2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="https://www.detik.com/sulsel/berita/d-6409699/pvmbg-temukan-endapan-diduga-jejak-tsunami-purba-tahun-1846-di-ternate">
                                <h5 class="card-title"><b>PVMBG Temukan Endapan Diduga Jejak Tsunami Purba Tahun 1846 di Ternate</b></h5>
                            </a>
                            <p class="card-text">Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG) menemukan dugaan endapan paleotsunami di Pulau Ternate.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/detik2.png" class="rounded" width="215px" height="224" alt="berita3">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="https://www.detik.com/jateng/berita/d-6387745/hari-kesadaran-tsunami-sedunia-5-november-sejarah-daftar-peristiwa-mematikan">
                                <h5 class="card-title"><b>Hari Kesadaran Tsunami Sedunia 5 November</b></h5>
                            </a>
                            <p class="card-text">Berikut ini penjelasan soal Hari Kesadaran Tsunami Sedunia dan daftar rangkuman peristiwa tsunami mematikan di dunia yang pernah terjadi.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/detik3.jpg" class="rounded" width="215px" height="224" alt="berita4">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="https://news.detik.com/berita/d-6254024/bmkg-ingatkan-potensi-gempa-m-89-dan-tsunami-15-meter-di-bengkulu">
                                <h5 class="card-title"><b>BMKG Ingatkan Potensi Gempa M 8,9 dan Tsunami 15 Meter di Bengkulu</b></h5>
                            </a>
                            <p class="card-text">Masyarakat Provinsi Bengkulu diminta untuk waspada terkait potensi akan terjadi gempa 8,9 magnitudo yang berpusat di wilayah Kabupaten Mukomuko.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- akhir main -->
<!-- Awal Footer -->
<footer class="section-footer mb-4 border-top fixed-bottom">
    <div class="container-fluid border-top">
        <div class="row justify-content-center align-items-center pt-3">
            <div class="row justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2022 Copyright Tsunami Center • All rights reserved • Made in Yogyakarta
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Akhir Footer -->


<script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>