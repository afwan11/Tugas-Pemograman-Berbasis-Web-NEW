<!DOCTYPE html>
<html>
<head>
  <title>Latihan Diskon UKT</title>
</head>
<body>

<h2>Perhitungan Diskon Pembayaran UKT Mahasiswa</h2>
<hr>

<form method="post">
  NPM : <input type="text" name="npm" required><br>
  Nama : <input type="text" name="nama" required><br>
  Prodi : <input type="text" name="prodi" required><br>
  Semester : <input type="number" name="semester" required><br>
  Biaya UKT : <input type="number" name="bukt" required><br><br>

  <input type="submit" value="Proses"><br><br>

<?php
if (isset($_POST['bukt'])) {

  // Mengambil input dari form
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $semester = $_POST['semester'];
  $bukt = $_POST['bukt'];

  // Menentukan diskon berdasarkan kondisi
  if ($bukt >= 5000000 && $semester > 8) {
    $diskon = 0.15; // 15%
  } 
  else if ($bukt >= 5000000) {
    $diskon = 0.10; // 10%
  } 
  else {
    $diskon = 0; // tidak ada diskon
  }

  // Menghitung total bayar
  $bayar = $bukt - ($bukt * $diskon);

  // Output hasil
  echo "<h3>Luaran yang Dihasilkan</h3>";
  echo "NPM : $npm <br>";
  echo "NAMA : $nama <br>";
  echo "PRODI : $prodi <br>";
  echo "SEMESTER : $semester <br>";
  echo "BIAYA UKT : Rp " . number_format($bukt,0,",",".") . "<br>";
  echo "DISKON : " . ($diskon * 100) . "% (otomatis ditentukan oleh if)<br>";
  echo "<b>YANG HARUS DIBAYAR : Rp " . number_format($bayar,0,",",".") . "</b>";
}
?>

</form>

</body>
</html>