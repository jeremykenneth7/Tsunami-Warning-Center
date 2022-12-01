<?php
    require 'backend/koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
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

    <?php include 'frontend/header/navbar.php'; ?>
    <main>
        <div class="container" style="margin-top: 120px;">
            <div class="card bg-light">
                <div class="card-body">
                    <h1 class="text-center mb-5">Tambah Data Anggota Hilang</h1>
                    <div class="border-bottom mt-3 mb-5"></div>
                    <?php
                    if (@$_GET['id']) {
                        $id = $_GET['id'];
                        $query = mysqli_query($konek, "SELECT * FROM hilang WHERE id = '$id'");
                        $hilang = mysqli_fetch_array($query);
                    }
                    ?>
                    <form action="funct.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama" value="<?= @$hilang['nama']; ?>" class="form-control" required>
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input type="radio" id="jk_l" name="jk" value="L" class="form-check-input" required>
                                <label class="form-check-label" for="jk_l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="jk_p" name="jk" value="P" class="form-check-input" required>
                                <label class="form-check-label" for="jk_p">Perempuan</label>
                            </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                            <div class="col-sm-10">
                            <textarea rows="4" type="text" name="alamat" value="<?= @$hilang['alamat']; ?>" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="telp">Telp</label>
                            <div class="col-sm-10">
                            <input type="text" name="telp" value="<?= @$hilang['telp']; ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label class="col-sm-2 col-form-label" for="Status">Status</label>
                            <div class="col-sm-10">
                            <select class="form-control" name="status" required="required" disabled>
                                    <option <?php if(@$hilang['status']=="0"){echo "selected='selected'";} ?> value="0">Hilang</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="telp"></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="hidden" name="id" value="<?= @$hilang['id']; ?>">
                            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            atau
                            <a href="listorang.php" style="color:grey;">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<br><br><br><br><br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>