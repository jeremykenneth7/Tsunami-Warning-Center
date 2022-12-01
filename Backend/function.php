<?php
    require 'koneksi.php';

    $nama = @$_POST['nama'];
    $alamat = @$_POST['alamat'];
    $telp = @$_POST['telp'];
    $jk = @$_POST['jk'];
    $posko = @$_POST['posko'];
    $tanggal_lahir = @$_POST['tanggal_lahir'];


    if(@$_POST['id'])
    {
        $id = $_POST['id'];

        // jika ada file/foto yang diupload 
        if(@$_FILES['foto']['name'])
        {
            $tmp_foto = explode(".", $_FILES['foto']['name']);

            $foto = $nama.'.'.$tmp_foto[1];
            $new_foto = 'foto/'.$foto;
            move_uploaded_file($_FILES['foto']['tmp_name'], $new_foto);

        }
        // jika tidak ada file yang diupload
        else 
        {
            $foto = '';
        }
        $query = "UPDATE anggota SET nama='$nama', jk = '$jk', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telp='$telp', posko='$posko', foto = '$foto'  WHERE id = '$id'";
        mysqli_query($konek, $query) or die('error');
        header("location:tampil.php?update=sukses");
    }
    elseif(@$_GET['id'])
    {
        $id = $_GET['id'];
        mysqli_query($konek, "DELETE FROM anggota WHERE id = '$id'") or die(mysqli_error($konek));

        header("location: tampil.php?delete=sukses");
    }
    else {
         // jika ada file/foto yang diupload 
         if(@$_FILES['foto']['name'])
         {
             $tmp_foto = explode(".", $_FILES['foto']['name']);
 
             $foto = $nama.'.'.$tmp_foto[1];
             $new_foto = 'foto/'.$foto;
             move_uploaded_file($_FILES['foto']['tmp_name'], $new_foto);
 
         }
         // jika tidak ada file yang diupload
         else 
         {
             $foto = '';
         }
        $query = "INSERT INTO anggota(nama, jk, tanggal_lahir, alamat, telp, posko, foto) VALUES ('$nama', '$jk', '$tanggal_lahir','$alamat', '$telp', '$posko', '$foto')";
        mysqli_query($konek, $query) or die('error');

        header("location: tampil.php?tambah=sukses");
    }
