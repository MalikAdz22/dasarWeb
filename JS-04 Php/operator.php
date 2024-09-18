<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b; 
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil operasi dari angka $a dan $b adalah:<br>";
echo "Penjumlahan: $hasilTambah<br>";
echo "Pengurangan: $hasilKurang<br>";
echo "Perkalian: $hasilKali<br>"; 
echo "Pembagian: $hasilBagi<br>";
echo "Sisa Bagi: $sisaBagi<br>";
echo "Pangkat: $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama : {$hasilSama} <br>";
echo "Hasil tidak sama : {$hasilTidakSama} <br>";
echo "Hasil lebih kecil : {$hasilLebihKecil} <br>";
echo "Hasil lebih besar : {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama : {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama : {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;  
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "hasil AND : ($hasilAnd)<br>";
echo "hasil OR : ($hasilOr)<br>";
echo "hasil NOA : ($hasilNotA)<br>";
echo "hasil NOTB : ($hasilNotB)<br>";

$a += $b;
echo "Hasil : $a <br>";
$a -= $b;
echo "Hasil : $a <br>";
$a *= $b;
echo "Hasil : $a <br>";
$a /= $b;
echo "Hasil : $a <br>";
$a %= $b;
echo "Hasil : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "hasilIdentik : ($hasilIdentik) <br>";
echo "hasikRidakIdentik : ($hasilTidakIdentik) <br>";

$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;  
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;  

echo "Persentase kursi kosong = {$persentaseKosong}%<br>";
echo "<br>";
?>

