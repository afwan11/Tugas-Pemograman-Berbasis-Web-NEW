<?php
include 'koneksi.php';

$stmt = $conn->prepare("DELETE FROM tiket_konser WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: index.php?msg=hapus");
?>