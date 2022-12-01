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

<body>

    <!-- Awal navbar -->
    <?php include 'frontend/header/navbar.php'; ?>
    <!-- akhir navbar -->

    <!-- main -->
    <div class="container">
        <div class="badan-detail row justify-content-center ">
            <div class="col-8 col-lg-3 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="frontend/Images/bnpb.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <small>
                            Data UNISDR menyebutkan, dalam paparan terhadap penduduk atau jumlah manusia yang ada di
                            daerah yang mungkin kehilangan nyawa karena bencana, risiko bencana yang dihadapi Indonesia
                            sangat lah tinggi.
                        </small>
                        <br><br>
                        <small>
                            Sutopo menerangkan, untuk potensi bencana tsunami, Indonesia menempati peringkat pertama
                            dari 265 negara di dunia yang disurvei badan PBB itu. Resiko ancaman tsunami di Indonesia
                            bahkan lebih tinggi dibandingkan Jepang. Dalam itung-itungan UNISDR, kata Sutopo, ada
                            5.402.239 orang yang berpotensi terkena dampaknya
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-9 col-lg-9 col-md-9">
                <img src="frontend/Images/siaga.jpg" class="img-fluid" alt="...">
                <p>
                    Tsunami memiliki dampak positif dan dampak negatif yaitu sebagai berikut:
                </p>
                <ul>
                    <li>
                        <h4><b>Dampak Positif</b></h4>
                        <p>
                            - Terciptanya ekosistem yang baru di daerah pantai berpasir yang terdampak tsunami.
                            <br>
                            - Menjadi sumber penelitian dalam rangka mitigasi bencana terkait serta riset mengenai keadaan laut.
                            <br>
                            - Sebagai proses penyeimbangan bumi, terutama pada lempeng-lempeng bumi.
                            <br>
                            - Peningkatan kewaspadaan masyarakat terhadap bencana tsunami, terutama bagi masyarakat yang bertempat tinggal di kawasan rawan bencana.
                        </p>
                    </li>
                    <li>
                        <h4><b>Dampak negatif</b></h4>
                        <p>
                            - Timbulnya korban jiwa yang tidak sedikit.
                            <br>
                            - Kerusakan lingkungan (bergantung pada ketinggian tsunami).
                            <br>
                            - Timbulnya pencemaran air yang diakibatkan oleh menggenangnya air dalam jumlah yang masif.
                            <br>
                            - Dapat mengakibatkan banjir dikarenakan air yang membludak dikarenakan gelombang panjang dari tsunami.
                            <br>
                            - Pemerintah harus mengeluarkan biaya yang tidak sedikit di dalam mengembalikan kondisi lingkungan seperti awalnya.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- akhir main -->

    <!-- Awal Footer -->
<footer class="section-footer mb-4 border-top">
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