<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>

<h2>Edit Buku</h2>

<form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    Judul: <input type="text" name="judul" value="<?= $row['judul']; ?>"><br><br>
    Penulis: <input type="text" name="penulis" value="<?= $row['penulis']; ?>"><br><br>
    Tahun: <input type="number" name="tahun" value="<?= $row['tahun_terbit']; ?>"><br><br>
    Harga: <input type="number" step="0.01" name="harga" value="<?= $row['harga']; ?>"><br><br>
    Stok: <input type="number" name="stok" value="<?= $row['stok']; ?>"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>