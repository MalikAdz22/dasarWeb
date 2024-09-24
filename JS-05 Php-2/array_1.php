<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    $jumlahDosen = count($Listdosen);

    for ($i = 0; $i < $jumlahDosen; $i++) {
        echo $Listdosen[$i] . "<br>";
    }
?>
</body>
</html>


