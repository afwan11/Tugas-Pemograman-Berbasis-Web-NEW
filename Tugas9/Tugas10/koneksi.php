<?php
$conn = new mysqli("localhost", "root", "", "Konser");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>