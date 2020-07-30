<?php
$title = 'Hapus Slider';
require_once 'header.php';

$id = $_GET['id'];

$kueri = "DELETE FROM slider WHERE id=$id";
$hasil = mysqli_query($koneksi, $kueri);

if ($hasil) {
    header('Location: daftar-slider.php?sukses=hapus');
}

require_once 'footer.php';
?>