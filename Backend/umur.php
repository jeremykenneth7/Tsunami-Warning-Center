<?php
    function hitung_umur($umur) {
        $tanggal_lahir = new DateTime($umur);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang)
        {
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;

        echo $thn." tahun ".$bln. " bulan ".$tgl. " hari ";
    }

?>