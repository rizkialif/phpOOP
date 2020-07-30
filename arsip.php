<?php
$title = 'Clover Hijau | Kegiatan Terbaru';
require_once 'header.php';
?>

    <section id="content">
        <div class="headactivity d-none d-md-block text-left">
            <h2>Save our Earth</h2>
            <h5><i>"The lights grow brighter as the earth lurches away from the sun"</i></h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h3 class="textheadcontent">Arsip Kegiatan</h3><hr style="border:1px solid #1B5E20;">
                </div>
                <div class="col-md-12 mt-2">

                    <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : '';
                    if (!$page) $page = 1;

                    $limit = 5;
                    $offset = ($page - 1) * $limit;

                    $kueri = "SELECT id FROM arsip";
                    $hasil = mysqli_query($koneksi, $kueri);
                    $jumlah_arsip = mysqli_num_rows($hasil);

                    $kueri = "SELECT * FROM arsip ORDER BY tanggal_terbit DESC LIMIT $limit OFFSET $offset";
                    $hasil = mysqli_query($koneksi, $kueri);
                    
                    while ($data = mysqli_fetch_array($hasil)):
                    ?>

                    <div class="row">
                        <div class="card mb-3 box-shadow">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card mb-3 box-shadow mt-4 ml-3">
                                        <img src="img/<?php echo kucilkan_script($data['gambar']); ?>" class="card-img-top">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h4 class="textheadcontent"><a href="detail-arsip.php?id=<?php echo kucilkan_script($data['id']); ?>"><?php echo kucilkan_script($data['judul']); ?></a></h4>
                                        <?php $intro = buat_intro(($data['konten']), 200, 'detail-arsip', $data['id']);?>
                                        <p class="textcontent"><?php echo $intro; ?></p>
                                            <small><i class="fa fa-calendar-check-o text-muted float-right" aria-hidden="true"></i> <?php echo date('d F Y', strtotime(kucilkan_script($data['tanggal_terbit']))); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>        
                    
                    <?php if (($limit + $offset) < $jumlah_arsip): ?>
                    <a href="arsip.php?page=<?php echo $page+1; ?>"><< Sebelumnya</a>
                <?php endif; ?>

                <?php if ($limit <= $offset): ?>
                    <a href="arsip.php?page=<?php echo $page-1; ?>" class="float-right">Selanjutnya >></a>
                <?php endif; ?>
                
                
                </div>
            </div>
        </div>
    </section>
      
<?php
require_once 'footer.php';
?>