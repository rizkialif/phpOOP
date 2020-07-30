<?php
$title = 'Clover Hijau | Organsisai Lingkungan';
require_once 'header.php';
?>

    <?php if (isset($_GET['sukses'])): ?>

    <div class="alert alert-success mb-0 text-center">

        <?php
        if ($_GET['sukses'] == 'daftar') {
            echo "Registrasi berhasil. Silahkan login untuk melanjutkan.";
        } elseif ($_GET['sukses'] == 'login') {
            echo "Anda telah masuk. Selamat datang ". $_SESSION['user_nama'].".";
        } elseif ($_GET['sukses'] == 'logout') {
            echo "Anda telah logout. Terima kasih telah menggunakan platform kami.";
        }
        ?>

    </div>

    <?php endif ?>

    <!-- Section Slider -->
    <section id="slider" class="hidder">
        <div id="sliderCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

                <?php
                $no = 0;
                $kueri = 'SELECT * FROM slider ORDER BY id';
                $hasil = mysqli_query($koneksi, $kueri);
                $jum_slider = mysqli_num_rows($hasil);
                
                while ($no < $jum_slider) :
                    $active = $no == 0 ? 'active' : '';
                ?>

                    <li data-target="#sliderCarousel" data-slide-to="<?php echo $no; ?>" class="<?php echo $class; ?>"></li>
                
                <?php 
                $no++;
                endwhile; 
                ?>
            
            </ol>

            <div class="carousel-inner">

                <?php
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)):
                    $active = $no == 0 ? 'active' : '';
                ?>
                <div class="carousel-item <?php echo $active; ?>">
                    <img src="img/<?php echo kucilkan_script($data['gambar']); ?>" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1><?php echo kucilkan_script($data['teks1']); ?></h1>
                        <br><br>
                        <h4><?php echo kucilkan_script($data['teks2']); ?></h4>
                    </div>
                </div>
                
                <?php 
                $no++;
                endwhile;
                ?>

            </div>

            <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sliderCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>   
    <!-- end Section Slider -->

    <!-- Section Top Article-->
    <section id="topArticle" class="py-5 text-white hidder" style="background-color: #3E2723">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <span class="rounded-icon"><i class="fas fa-leaf fa-lg"></i></span>
                    <blockquote class="blockquote">
                        <p class="mb-0 mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida quam ac
                            ante rutrum,
                            in mollis ligula mattis. Integer nulla nisi, ullamcorper et posuere vel.
                        </p>
                        <a href="#" class="blockquote-footer">Baca Selengkapnya</a>
                    </blockquote>
                </div>

                <div class="col-md-4 text-center">
                        <span class="rounded-icon"><i class="fas fa-recycle fa-lg"></i></span>
                    <blockquote class="blockquote">
                        <p class="mb-0 mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida quam ac
                            ante rutrum,
                            in mollis ligula mattis. Integer nulla nisi, ullamcorper et posuere vel.
                        </p>
                        <a href="#" class="blockquote-footer">Baca Selengkapnya</a>
                    </blockquote>
                </div>

                <div class="col-md-4 text-center">
                    <span class="rounded-icon"><i class="fas fa-water fa-lg"></i></span>
                    <blockquote class="blockquote">
                        <p class="mb-0 mt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida quam ac
                            ante rutrum,
                            in mollis ligula mattis. Integer nulla nisi, ullamcorper et posuere vel.
                        </p>
                        <a href="#" class="blockquote-footer">Baca Selengkapnya</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>  
    <!-- end Section Top Article -->
    
    <!-- Section Event -->
    <section id="event" class="py-5">
        <div class="container">
            <h2 class="text-center"><strong>Event</strong></h2>
            <hr>
            <div class="row">

                <?php
                $kueri = 'SELECT * FROM event ORDER BY waktu DESC LIMIT 1';
                $hasil = mysqli_query($koneksi, $kueri);
                $data = mysqli_fetch_array($hasil);
                ?>

                <div class="col-md-6">
                    <img src="img/<?php echo kucilkan_script($data['gambar']); ?>" class="img-thumbnail" width="500">
                </div>
                <div class="col-md-6">
                    <h5><a class="text-success link-unstyled" href="detail-event.php?id=<?php echo kucilkan_script($data['id']); ?>"><?php echo kucilkan_script($data['judul']); ?></a></h5>
                    <div class="text-muted">
                        <i class="fas fa-calendar-day"></i> Tanggal: <?php echo date('d F Y', strtotime(kucilkan_script($data['waktu']))); ?>
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-clock"></i> Waktu: <?php echo date('h:i A', strtotime(kucilkan_script($data['waktu']))); ?>
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-map-marked"></i> Tempat: <?php echo kucilkan_script($data['tempat']); ?>
                    </div>

                    <?php $intro = buat_intro(($data['konten']), 600, 'detail-event', $data['id']);?>
                    
                    <p class="text-justify"><?php echo $intro; ?></p>
                </div>
            </div>
        </div>
    </section>   
    <!-- end Section Event -->
    
    <!-- Section Arsip Kegiatan -->
    <section id="arsip">
        <div class="container">
            <h3>Kegiatan Kami Lainnya</h3>
            <hr>
            <div class="row">

                <?php
                $kueri = 'SELECT * FROM arsip ORDER BY tanggal_terbit DESC LIMIT 4 OFFSET 1';
                $hasil = mysqli_query($koneksi, $kueri);
                while ($data = mysqli_fetch_array($hasil)):
                ?>

                <div class="col-md-3">
                    <img src="img/<?php echo kucilkan_script($data['gambar']); ?>" width="200" class="card-img-top">
                    <p class=" mt-2"><a class="text-success link-unstyled" href="detail-arsip.php?id=<?php echo kucilkan_script($data['id']); ?>"><?php echo kucilkan_script($data['judul']); ?></a></p>

                    <?php $intro = buat_intro(($data['konten']), 100,'detail-arsip', $data['id']);?>
                    
                    <p class="text-justify"><?php echo $intro; ?></p>
                    
                </div>
                
                <?php endwhile; ?>

            </div>
        </div>
    </section>
    <!-- end Section Arsip Kegiatan -->

<?php
require_once 'footer.php';
?>
