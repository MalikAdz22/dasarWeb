<?php
session_start();
include 'koneksi.php'; 
include 'csrf.php'; // Pastikan CSRF token diperiksa

// Pastikan ID yang diterima adalah valid
$id = $_POST['id'];

if (!empty($id)) {
    $query = "DELETE FROM anggota WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("i", $id);
    
    if ($sql->execute()) {
        echo json_encode(['success'=> 'Sukses']);
    } else {
        echo json_encode(['error'=> 'Gagal menghapus data']);
    }
} else {
    echo json_encode(['error'=> 'ID tidak valid']);
}

$db1->close();
?>