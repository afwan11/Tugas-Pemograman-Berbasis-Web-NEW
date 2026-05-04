<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form action="proses_tambah.php" method="POST">
    Judul: <input type="text" name="judul"><br><br>
    Penulis: <input type="text" name="penulis"><br><br>
    Tahun: <input type="number" name="tahun"><br><br>
    Harga: <input type="number" step="0.01" name="harga"><br><br>
    Stok: <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>