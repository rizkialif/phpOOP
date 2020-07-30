<?php
$title = 'Hapus Event';
require_once 'header.php';

$id = $_GET['id'];

$kueri = "DELETE FROM event WHERE id=$id";
$hasil = mysqli_query($koneksi, $kueri);

if ($hasil) {
    header('Location: daftar-event.php?sukses=hapus');
}

require_once 'footer.php';
?>