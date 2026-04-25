<?php
include 'koneksi.php';

$stmt = $conn->prepare("INSERT INTO tiket_konser 
(nama_konser, nama_artis, lokasi, tanggal, harga, stok) 
VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssii",
$_POST['nama_konser'],
$_POST['nama_artis'],
$_POST['lokasi'],
$_POST['tanggal'],
$_POST['harga'],
$_POST['stok']
);

$stmt->execute();

header("Location: index.php?msg=tambah");
?>