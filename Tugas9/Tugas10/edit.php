<?php
include 'koneksi.php';
$stmt = $conn->prepare("SELECT * FROM tiket_konser WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
<h3>Edit Tiket</h3>

<form method="POST" action="proses_edit.php">

<input type="hidden" name="id" value="<?= $data['id'] ?>">

<input type="text" name="nama_konser" class="form-control mb-2" value="<?= htmlspecialchars($data['nama_konser']) ?>">
<input type="text" name="nama_artis" class="form-control mb-2" value="<?= htmlspecialchars($data['nama_artis']) ?>">
<input type="text" name="lokasi" class="form-control mb-2" value="<?= htmlspecialchars($data['lokasi']) ?>">
<input type="date" name="tanggal" class="form-control mb-2" value="<?= $data['tanggal'] ?>">
<input type="number" name="harga" class="form-control mb-2" value="<?= $data['harga'] ?>">
<input type="number" name="stok" class="form-control mb-2" value="<?= $data['stok'] ?>">

<button class="btn btn-success">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>
</body>
</html>