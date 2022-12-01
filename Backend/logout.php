<?php
    session_start();
    $_SESSION['sesi'] = null;

    header("location: ../index.php");

?>