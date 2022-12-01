<?php 
    require 'koneksi.php';
    session_start();
    $_SESSION['sesi'] == null;

    if(@$_POST['user'] AND @$_POST['pass'])
    {
        $user = ($_POST['user']) ?: '';
        $pass = ($_POST['pass']) ?: '';
        $query = mysqli_query($konek, "SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
        $sesi = mysqli_num_rows($query);

        if($sesi == 1)
        {
            $admin = mysqli_fetch_array($query);
            $_SESSION['sesi'] = $admin['nama'];
            $_SESSION['id'] = $admin['id'];
            header("location: admin.php");
        }
        else {
            header("location: login.php?msg=gagal");
        }
    } 
    else
    {
        header("location: login.php?msg=kosong");
    }
?>