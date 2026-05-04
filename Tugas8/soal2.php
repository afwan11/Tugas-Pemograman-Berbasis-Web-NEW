<?php include 'menu.php'; ?>

<h3>Soal 2 - Bilangan Genap</h3>

<form method="post">
    Masukkan batas angka:
    <input type="number" name="batas" required>
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];

    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . " ";
    }
}
?>