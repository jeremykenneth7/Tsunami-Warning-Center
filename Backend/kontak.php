<!DOCTYPE html>
<html>

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
    <style>
        #map {
            height: 80%;
            width: 80%;
            margin: 0 auto 0 auto;
        }

        html,
        body {
            height: 100%;
        }
    </style>
</head>

<!-- navbar -->
<?php include 'layout/navbar.php'; ?>
<!-- akhir navbar -->

<body>
    <div class="main-item container border-bottom">
        <div class="row align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">
                <h3><b>Kontak Darurat</b></h3>
            </div>
        </div>
    </div>
    <br>
    <div class="container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <img class="card-img-top" src="../frontend/Images/bpbddiy.jpg" width="200px" height="400px" alt="BPBD DIY">
                        <div class="card-body">
                            <p class="card-text">BPBD Provinsi DI Yogyakarta - Jl. Kenari No.14A, Semaki, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166</p>
                            <p class="card-text">(0274) 555836</p>
                            <a href="https://www.google.com/maps/place/BPBD+Provinsi+DI+Yogyakarta/@-7.7984976,110.3848038,17z/data=!3m1!4b1!4m12!1m6!3m5!1s0x2e7a577c5bd77ca3:0x50227c42ed53f6aa!2sBPBD+Provinsi+DI+Yogyakarta!8m2!3d-7.7984976!4d110.3869925!3m4!1s0x2e7a577c5bd77ca3:0x50227c42ed53f6aa!8m2!3d-7.7984976!4d110.3869925">
                                <p class="card-title"><b>Lokasi BPBD DIY</b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <img class="card-img-top" src="../frontend/Images/bpbdsleman.jpg" width="200px" height="400px" alt="BPBD Sleman">
                        <div class="card-body">
                            <p class="card-text">BPBD Kabupaten Sleman - Jl. Candi Boko No.1, Beran Kidul, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55511</p>
                            <p class="card-text">(0274) 868504</p>
                            <a href="https://www.google.com/maps/place/Badan+Penanggulangan+Bencana+Daerah+Kabupaten+Sleman/@-7.7179947,110.3378787,15z/data=!4m10!1m2!2m1!1sbpbd!3m6!1s0x2e7a58ca736684b1:0x678396f81e262b68!8m2!3d-7.7180536!4d110.3553637!15sCgRicGJkWgYiBGJwYmSSARRwdWJsaWNfc2FmZXR5X29mZmljZZoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VSSGVGbFFNbmQzUlJBQuABAA!16s%2Fg%2F11g8_2t9jf">
                                <p class="card-title"><b>Lokasi BPBD Sleman</b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <img class="card-img-top" src="../frontend/Images/bpbdbantul.jpg" width="200px" height="400px" width="200px" height="400px" alt="BPBD Bantul">
                        <div class="card-body">
                            <p class="card-text">BPBD Bantul - 482C+6QJ, Jetis, Palbapang, Bantul, Bantul Regency, Special Region of Yogyakarta 55713</p>
                            <p class="card-text">(0274) 6462100</p>
                            <a href="https://www.google.com/maps/place/Bpbd+Bantul/@-7.8994233,110.3197166,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7aff5d09c78d4b:0x886d9763b0360fe3!8m2!3d-7.8994146!4d110.3218839">
                                <p class="card-title"><b>Lokasi BPBD Bantul</b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <img class="card-img-top" src="../frontend/Images/bpbdkota.jpeg" width="200px" height="400px" alt="BPBD Kota Yogyakarta">
                        <div class="card-body">
                            <p class="card-text">BPBD Kota Yogyakarta - Jl. Gambiran No.26, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161</p>
                            <p class="card-text">(0274) 587101</p>
                            <a href="https://www.google.com/maps/place/Badan+Penanggulangan+Bencana+Daerah+(+BPBD+)+Kota+Yogyakarta/@-7.8171429,110.3884806,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5764be328389:0x486685fb0d20e9ce!8m2!3d-7.817143!4d110.3907067">
                                <p class="card-title"><b>Lokasi BPBD Kota Yogyakarta</b></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiRncAHPx3uNScCZ3RPUiErghVhZZD1vQ&callback=GMPStart" async defer></script>
    <script type="text/javascript">
        let map;
        let infoWindow;
        let mapOptions;
        let bounds;

        function GMPStart() {
            // infoWindow ini digunakan untuk menampilkan pop-up diatas marker terkait lokasi markernya
            infoWindow = new google.maps.InfoWindow;
            //  Variabel berisi properti tipe peta yang bisa diubah-ubah
            mapOptions = {
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            // Deklarasi untuk melakukan load map Google Maps API
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            // Variabel untuk menyimpan batas kordinat
            bounds = new google.maps.LatLngBounds();
            // Pengambilan data dari database MySQL
            <?php
            // Sesuaikan dengan database yang sudah Anda buat diawal
            $host     = "localhost";
            $username = "root";
            $password = "";
            $Dbname   = "db_rnd";
            $db       = new mysqli($host, $username, $password, $Dbname);

            $query = $db->query("SELECT * FROM latlng_kota_kab ORDER BY kota_kab ASC");
            while ($row = $query->fetch_assoc()) {
                $nama = $row["kota_kab"];
                $lat  = $row["latitude"];
                $long = $row["longitude"];
                echo "addMarker($lat, $long, '$nama');\n";
            }
            ?>
            // Proses membuat marker 
            var location;
            var marker;

            function addMarker(lat, lng, info) {
                location = new google.maps.LatLng(lat, lng);
                bounds.extend(location);
                marker = new google.maps.Marker({
                    map: map,
                    position: location
                });
                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);
            }
            // Proses ini dapat menampilkan informasi lokasi Kota/Kab ketika diklik dari masing-masing markernya
            function bindInfoWindow(marker, map, infoWindow, html) {
                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);

                });
            }
        }
    </script>
</body>

</html>