<?php
$title = 'Clover Hijau | Kegiatan Terbaru';
require_once 'header.php';

$id = $_GET['id'];

$kueri = "SELECT * FROM arsip WHERE id=$id";
$hasil = mysqli_query($koneksi, $kueri);
$data = mysqli_fetch_array($hasil)
?>

    <section id="content">
        <div class="headactivity d-none d-md-block text-left">
            <h2>Save our Earth</h2>
            <h5><i>"The lights grow brighter as the earth lurches away from the sun"</i></h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h3 class="textheadcontent text-center"><?php echo kucilkan_script($data['judul']); ?></h3><hr style="border:1px solid #1B5E20;">
                </div>
                <div class="col-md-12 mt-2">
                    <img src="img/<?php echo kucilkan_script($data['gambar']); ?>" width="500" class="img-thumbnail mx-auto d-block">
                    <p class="text-muted mt-3">Dipublikasikan: <?php echo date('d F Y | h:i A', strtotime(kucilkan_script($data['tanggal_terbit']))); ?></p>
                    <?php echo kucilkan_script($data['konten']); ?>
                
                </div>               
            </div>
        </div>
    </section>
      
<?php
require_once 'footer.php';
?>