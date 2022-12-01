<?php
    require 'backend/koneksi.php';

    $nama = @$_POST['nama'];
    $alamat = @$_POST['alamat'];
    $telp = @$_POST['telp'];
    $jk = @$_POST['jk'];
    $status = $_POST['status'];

    if(@$_POST['id'])
    {
        $id = $_POST['id'];

        $query = "UPDATE hilang SET nama='$nama', jk = '$jk', alamat='$alamat', telp='$telp', status='$status'  WHERE id = '$id'";
        mysqli_query($konek, $query) or die('error');
        header("location:listorang.php?update=sukses");
    }
    elseif(@$_GET['id'])
    {
        $id = $_GET['id'];
        mysqli_query($konek, "DELETE FROM hilang WHERE id = '$id'") or die(mysqli_error($konek));

        header("location: listorang.php?delete=sukses");
    }
    else {

        $query = "INSERT INTO hilang(nama, jk, alamat, telp, status) VALUES ('$nama', '$jk', '$alamat', '$telp', '$status')";
        mysqli_query($konek, $query) or die('error');

        header("location: listorang.php?tambah=sukses");
    }
