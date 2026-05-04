<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($conn, "UPDATE buku SET 
    judul='$judul',
    penulis='$penulis',
    tahun_terbit='$tahun',
    harga='$harga',
    stok='$stok'
    WHERE id='$id'");

header("Location: index.php");
?>