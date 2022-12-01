<?php
    require 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css">
    <link rel="icon" href="Images/tsunami.png">
    <title>Tsunami Warning Center</title>
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>

    <?php include 'layout/navbar.php'; ?>
    <main>
        <div class="container" style="margin-top: 120px;">
            <div class="card bg-light">
                <div class="card-body">
                    <h1 class="text-center">Tambah Data Anggota Ditemukan</h1>
                    <div class="border-bottom mt-3 mb-5"></div>
                    <?php
                    if (@$_GET['id']) {
                        $id = $_GET['id'];
                        $query = mysqli_query($konek, "SELECT * FROM anggota WHERE id = '$id'");
                        $anggota = mysqli_fetch_array($query);
                    }
                    ?>
                    <form action="function.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-2">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= @$anggota['nama']; ?>" class="form-control" required>
                        </div>
                        <fieldset class="row mb-3">
                        <div class="form-group mt-2">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input type="radio" id="jk_l" name="jk" value="L" class="custom-control-input" required>
                                <label class="custom-control-label" for="jk_l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="jk_p" name="jk" value="P" class="custom-control-input" required>
                                <label class="custom-control-label" for="jk_p">Perempuan</label>
                            </div>
                            </div>
                        </div>
                        </fieldset>
                        <div class="form-group mt-2">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="<?= @$anggota['tanggal_lahir']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= @$anggota['alamat']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="telp">Telp</label>
                            <input type="text" name="telp" value="<?= @$anggota['telp']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="posko">Posko</label>
                            <input type="text" name="posko" value="<?= @$anggota['posko']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="foto">Upload Foto : </label>
                            <input type="file" class="form-control" name="foto" id="foto">
                        </div>
                        <div class="form-group mt-4">
                            <input type="hidden" name="id" value="<?= @$anggota['id']; ?>">
                            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            atau
                            <a href="tampil.php" style="color:grey;">Batal</a>
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