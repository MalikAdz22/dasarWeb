<?php

$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error

$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error
echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>