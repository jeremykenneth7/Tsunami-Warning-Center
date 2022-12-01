<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Images/tsunami.png">
  <title>Tsunami Warning Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/main.css">
</head>

  <!-- navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
          <img class="rounded-circle" src="Images/tsunami.png" alt="Logo Tsunami">
          <b>Tsunami Warning Center</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item mx-md-2">
              <a class="nav-link active" aria-current="page" href="admin.php">Beranda</a>
            </li>
            <li class="nav-item dropdown mx-md-2">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Data Master 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="temukan.php">Data Anggota Hilang</a></li>
                <li><a class="dropdown-item" href="tampil.php">Data Anggota Ditemukan</a></li>
              </ul>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link active" href="kontak.php">Kontak</a>
            </li>
          </ul>
          <div class="justify-content-center text-center">
            <a class="btn px-4 btn-danger ms-3" href="logout.php" role="button">Logout</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- akhir navbar -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>