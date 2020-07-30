<?php
$title = 'Hapus Arsip';
require_once 'header.php';

$id = $_GET['id'];

$kueri = "DELETE FROM arsip WHERE id=$id";
$hasil = mysqli_query($koneksi, $kueri);

if ($hasil) {
    header('Location: daftar-arsip.php?sukses=hapus');
}

require_once 'footer.php';
?>