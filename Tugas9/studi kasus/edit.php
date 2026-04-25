<?php 
require 'function.php';

$buku_id = $_GET["buku_id"];
$buku = query("SELECT * FROM buku WHERE buku_id = $buku_id")[0];
if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
         echo "
            <script>
                alert('Tidak ada perubahan data atau data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>
