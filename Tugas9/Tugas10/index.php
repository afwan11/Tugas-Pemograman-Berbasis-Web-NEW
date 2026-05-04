<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Data Tiket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>
<div class="container">
<h3 class="mb-3">Data Tiket Konser</h3>
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>

<!-- SEARCH -->
<form method="GET" class="mb-3">
    <input type="text" name="cari" class="form-control" placeholder="Cari konser...">
</form>

<table class="table table-bordered table-striped">
<thead class="table-dark">
<tr>
<th>No</th>
<th>Konser</th>
<th>Artis</th>
<th>Lokasi</th>
<th>Tanggal</th>
<th>Harga</th>
<th>Edit/Hapus</th>
</tr>
</thead>
<tbody>

<?php
$cari = $_GET['cari'] ?? '';

$stmt = $conn->prepare("SELECT * FROM tiket_konser WHERE nama_konser LIKE ?");
$like = "%$cari%";
$stmt->bind_param("s", $like);
$stmt->execute();
$result = $stmt->get_result();

$no = 1;
while ($row = $result->fetch_assoc()) {
?>

<tr>
<td><?= $no++ ?></td>
<td><?= htmlspecialchars($row['nama_konser']) ?></td>
<td><?= htmlspecialchars($row['nama_artis']) ?></td>
<td><?= htmlspecialchars($row['lokasi']) ?></td>
<td><?= $row['tanggal'] ?></td>
<td>Rp <?= number_format($row['harga']) ?></td>
<td>
    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapus.php?id=<?= $row['id'] ?>" 
       class="btn btn-danger btn-sm"
       onclick="return confirm('Yakin hapus data?')">Hapus</a>
</td>
</tr>

<?php } ?>

</tbody>
</table>
</div>
</body>
</html>