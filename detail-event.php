<?php
$title = 'Clover Hijau | Kegiatan Terbaru';
require_once 'header.php';

if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
}

$id = $_GET['id'];

$kueri = "SELECT * FROM partisipasi WHERE event_id=$id AND user_id=".$_SESSION['user_id'];
$hasil = mysqli_query($koneksi, $kueri);
$partisipasi = mysqli_num_rows($hasil) == 0 ? false : true;
echo $partisipasi;

$kueri = "SELECT * FROM event WHERE id=$id";
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
                <div class="col-md-6 mt-2">
                    <img src="img/<?php echo kucilkan_script($data['gambar']); ?>" width="500" class="img-thumbnail mx-auto d-block mb-3">
                </div>
                <div class="col-md-6 mt-2">
                    <div class="text-muted">
                        <i class="fas fa-calendar-day"></i> Tanggal: <?php echo date('d F Y', strtotime(kucilkan_script($data['waktu']))); ?>
                    </div>
                    <div class="text-muted">
                        <i class="fas fa-clock"></i> Waktu: <?php echo date('h:i A', strtotime(kucilkan_script($data['waktu']))); ?>
                    </div>
                    <div class="text-muted mb-2">
                        <i class="fas fa-map-marked"></i> Tempat: <?php echo kucilkan_script($data['tempat']); ?>
                    </div>
                
                    <?php echo kucilkan_script($data['konten']); ?>
                    
                    <div class="mt-3">

                        <?php if (strtotime(kucilkan_script($data['waktu'])) < strtotime(date('Y-m-d H:i:s'))): ?>
                            <?php if ($partisipasi): ?>
                                <button class="btn btn-primary" disabled> <i class="fas fa-check-circle"></i> Mengikuti</button>
                            <?php endif; ?>

                            <button class="btn btn-dark">Selesai</button>
                        
                        <?php else: ?>
                            <?php if ($partisipasi): 
                                
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $kueri = "DELETE FROM partisipasi WHERE event_id=$id AND user_id=".$_SESSION['user_id'];
                                    $hasil = mysqli_query($koneksi, $kueri);
                                    header("Location: detail-event.php?id=$id");
                                }  
                            
                            ?>
                                <form action="" method="POST">
                                    <button class="btn btn-primary"><i class="fas fa-check-circle"></i> Mengikuti</button>
                                </form>
                            
                            <?php else:
                             
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $kueri = "INSERT INTO partisipasi(event_id, user_id)
                                            VALUES($id, ".$_SESSION['user_id'].")";
                                    $hasil = mysqli_query($koneksi, $kueri);
                                    header("Location: detail-event.php?id=$id");
                                }    
                            ?>

                                <form action="" method="POST">
                                    <button class="btn btn-info">Ikuti</button>
                                </form>

                            <?php endif; ?>
                            
                        <?php endif; ?>
                        
                    </div>         

                </div>               
            </div>
        </div>
    </section>
      
<?php
require_once 'footer.php';
?>