<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi database benar
// include 'csrf.php';
$id = $_POST['id'];

// Setelah ini, lanjutkan dengan query ke database
$query = "SELECT * FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();
$res1 = $sql->get_result();

$h = [];
if ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama'] = $row["nama"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['alamat'] = $row["alamat"];
    $h['no_telp'] = $row["no_telp"];
}

echo json_encode($h);
$db1->close();
?>