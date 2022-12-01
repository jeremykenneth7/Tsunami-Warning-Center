<?php
require 'backend/koneksi.php';

?>
<!doctype html>
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
    <?php include 'frontend/header/navbar.php' ?>
    <main>
        <div class="container" style="margin-top: 120px;">
            <div class="card bg-light">
                <div class="card-body">
                    <h1 class="text-center">Data Anggota Hilang</h1>
                    <div class="border-bottom mt-3 mb-5"></div>
                    <a href="temukan_tambah.php" class="btn btn-primary mb-4">Tambah Data</a>
                    <?php
                    if (@$_GET['tambah'] == 'sukses') {
                        $color = 'success';
                        $msg = 'Data Anggota berhasil di tambah';
                    } elseif (@$_GET['update'] == 'sukses') {
                        $color = 'info';
                        $msg = 'Data Anggota berhasil di ubah';
                    } elseif (@$_GET['delete'] == 'sukses') {
                        $color = 'danger';
                        $msg = 'Data Anggota berhasil di hapus';
                    } else {
                        $msg = '';
                    }

                    $limit = 4;
                    if (@$_GET['hal'] == '') {
                        $offset = 0;
                        $hal = 1;
                        $no = 1;
                    } else {
                        $offset = ($_GET['hal'] - 1) * $limit;
                        $hal = $_GET['hal'];
                        $no = $offset + 1;
                    }

                    if (@$_POST['cari']) {
                      $cari = $_POST['cari'];
                      $hilang = mysqli_query($konek, "SELECT * FROM hilang WHERE 
                      nama LIKE '%$cari%'
                      OR alamat LIKE '%$cari%'
                      OR telp LIKE '%$cari%'
                      ORDER BY nama ASC ") or die(mysqli_error($konek));
                    } else {
                        $hilang = mysqli_query($konek, "SELECT * FROM hilang ORDER BY nama ASC  LIMIT $offset, $limit") or die(mysqli_error($konek));
                    }
                    ?>

                    <?php
                    if ($msg != '') { ?>
                        <div class="alert alert-<?= $color ?> alert-dismissible fade show" role="alert">
                            <?= $msg ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php } ?>
                    <form action="" method="post">
                        <div class="form-row align-items-center">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="cari" class="form-control mb-2" id="cari" placeholder="Cari data">
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary mb-2" type="submit">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table table-sm table-striped align-item-center text-center mt-3">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Nomor Handphone</th>
                            <th>Status</th>
                        </tr>

                        <?php
                        $hilang_tot = mysqli_query($konek, "SELECT * FROM hilang") or die(mysqli_error($konek));

                        $no = 1;
                        $total = mysqli_num_rows($hilang_tot);
                        foreach ($hilang as $row) : {

                                $jk = ($row['jk'] == 'L') ? 'Laki-laki' : 'Perempuan';
                        ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row["nama"] ?></td>
                                    <td><?= $jk ?></td>
                                    <td><?= $row["alamat"] ?></td>
                                    <td><?= $row["telp"] ?></td>
                                    <td>
                                        <?php
                                            if($row['status']=="0"){
                                                echo "<div class='text-danger' role='status'>
                                                    <span class='visually'>Hilang</span>
                                                </div>";
                                            }else if($row['status']=="1"){
                                                echo "<div class='text-info' role='status'>
                                                    <span class='visually'>Proses</span>
                                                </div>";
                                            }else if($row['status']=="2"){
                                                echo "<div class='text-success' role='status'>
                                                    <span class='visually'>Ditemukan</span>
                                                </div>";
                                            }
                                            ?>
                                    </td>
                                </tr>

                            <?php $no++;
                            } ?>
                        <?php endforeach ?>
                    </table>
                    <p>Total Data : <?= $total; ?></p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            $jml_hal = ceil($total / $limit);
                            for ($i = 1; $i <= $jml_hal; $i++) {
                                if ($i != $hal) {
                            ?>
                                    <li class="page-item">
                                        <a href="listorang.php?hal=<?= $i ?>" class="page-link"><?= $i ?></a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li class="page-item active">
                                        <a class="page-link"><?= $i ?></a>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    
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
    <!-- Optional JavaScript -->
    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>