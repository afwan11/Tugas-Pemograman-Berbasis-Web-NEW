<?php
include 'koneksi.php';

$stmt = $conn->prepare("UPDATE tiket_konser 
SET nama_konser=?, nama_artis=?, lokasi=?, tanggal=?, harga=?, stok=? 
WHERE id=?");

$stmt->bind_param("ssssiii",
$_POST['nama_konser'],
$_POST['nama_artis'],
$_POST['lokasi'],
$_POST['tanggal'],
$_POST['harga'],
$_POST['stok'],
$_POST['id']
);

$stmt->execute();

header("Location: index.php?msg=edit");
?>