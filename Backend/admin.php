<?php
require_once 'koneksi.php';
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
<style>
  .jumbotron {
    margin-top: 150px;
  }
</style>

<body>

  <?php include 'layout/navbar.php'; ?>

  <!-- awal main -->
  <main>
    <div class="main-item container border-bottom">
      <div class="row align-items-center pt-4">
        <div class="col-auto text-gray-500 font-weight-light">
          <h3><b>Admin</b></h3>
        </div>
      </div>
    </div>
    <div class="container mt-3">
      <div class="card-bg-light">
        <div class="jumbotron">
          <h1 class="display-4">Halaman Admin</h1>
          <p class="lead">Informasi tentang orang hilang dan tentang orang yang sudah ditemukan</p>
          <hr class="my-4">
          <p>Gunakanlah button dibawah ini untuk menambah data anggota yang ditemukan</p>
          <a class="btn btn-primary btn-lg" href="tambah.php" role="button">+ Anggota</a>
        </div>
      </div>
    </div>
  </main>
  <!-- Akhri main -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>