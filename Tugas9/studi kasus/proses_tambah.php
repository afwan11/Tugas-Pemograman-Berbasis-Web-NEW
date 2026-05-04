<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn, "INSERT INTO buku 
VALUES (NULL, '$judul', '$penulis', '$tahun', '$harga', '$stok')");

header("Location: index.php");
?>