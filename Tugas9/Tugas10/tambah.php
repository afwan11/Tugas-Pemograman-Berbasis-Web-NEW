<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
<h3>Tambah Tiket</h3>

<form method="POST" action="proses_tambah.php">

<input type="text" name="nama_konser" class="form-control mb-2" placeholder="Nama Konser" required>
<input type="text" name="nama_artis" class="form-control mb-2" placeholder="Artis" required>
<input type="text" name="lokasi" class="form-control mb-2" placeholder="Lokasi" required>
<input type="date" name="tanggal" class="form-control mb-2" required>
<input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
<input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>

<button class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>
</body>
</html>