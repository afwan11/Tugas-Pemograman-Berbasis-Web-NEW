<?php
$nama = "";
$nilai = "";
$predikat = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75) {
        $predikat = "B";
    } elseif ($nilai >= 65) {
        $predikat = "C";
    } elseif ($nilai >= 50) {
        $predikat = "D";
    } elseif ($nilai >= 0) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    if ($nilai >= 65 && $nilai <= 100) {
        $status = "Lulus";
    } elseif ($nilai >= 0 && $nilai < 65) {
        $status = "Tidak Lulus";
    } else {
        $status = "Tidak valid";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <h2>Input Nilai Mahasiswa</h2>
    <hr>
    <form method="post">
        Nama:
        <input type="text" name="nama" required>

        Nilai:
        <input type="number" name="nilai" required>
        <button type="submit">Proses</button>
    </form>
 <?php if ($nama != "" && $nilai != ""): ?>
        <hr>
        <div class="result">
            <p><b>Nama:</b> <?php echo $nama; ?></p>
            <p><b>Nilai:</b> <?php echo $nilai; ?></p>
            <p><b>Predikat:</b> <?php echo $predikat; ?></p>
            <p><b>Status:</b> <?php echo $status; ?></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>