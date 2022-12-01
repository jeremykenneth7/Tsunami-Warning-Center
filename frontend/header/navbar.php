<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="frontend/Images/tsunami.png">
  <title>Tsunami Warning Center</title>
  <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../styles/main.css">
</head>

<!-- navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <img class="rounded-circle" src="frontend/Images/tsunami.png" alt="Logo Nomads">
        <b>Tsunami Warning Center</b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="gempa.php">Potensi Ancaman Tsunami</a>
          </li>
          <li class="nav-item dropdown mx-md-2">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Bencana
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pengetahuan.php">Definisi Tsunami</a></li>
              <li><a class="dropdown-item" href="penanggulangan.php">Sistem Penanggulangan Bencana</a></li>
              <li><a class="dropdown-item" href="berita.php">Berita Tsunami</a></li>
              <li><a class="dropdown-item" href="Tentang_Tsunami.php">Mitigasi Bencana</a></li>
            </ul>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="listorang.php">Daftar Pencarian</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="kontak.php">Kontak</a>
          </li>
        </ul>
        <div class="justify-content-center text-center">
          <a class="btn px-4 btn-warning ms-3" href="backend/login.php" role="button">Sign In</a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- akhir navbar -->

</body>

</html>