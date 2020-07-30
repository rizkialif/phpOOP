<?php
$title = 'Tambah Slider';
require_once 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $teks1 = mysqli_real_escape_string($koneksi, $_POST['teks1']);
    $teks2 = mysqli_real_escape_string($koneksi, $_POST['teks2']);

    $gambar = rand(10, 100) . $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_ext =  strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    
    $target_file = '../img/'.$gambar;
    $upload_gambar = true;

    if ($gambar_ext != 'bmp' &&
        $gambar_ext != 'gif' &&
        $gambar_ext != 'jpg' &&
        $gambar_ext != 'png' &&
        $gambar_ext != 'jpeg') {
            $upload_gambar = false;
            $gambar = '';
        }
    
    $kueri = "INSERT INTO slider(gambar, teks1, teks2)
              VALUES('$gambar', '$teks1', '$teks2')";
    $hasil = mysqli_query($koneksi, $kueri);

    if ($hasil) {
        if ($upload_gambar) {
            move_uploaded_file($gambar_tmp, $target_file);
        }

        header('Location: daftar-slider.php?sukses=tambah');
   
    } else {
        $error = 'Error '. mysqli_error($koneksi);
    }
}
?>
        <a href="daftar-slider.php" class="btn btn-outline-dark"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
        <br><br>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Gambar:</label>
                <input type="file" name="gambar" class="form-control-file" onchange="loadFile(event)">
                <br>
                <img src="" width="300" class="img-thumbnail" id="imgPreview">
            </div>

            <div class="form-group">
                <label>Teks 1:</label>
                <textarea id="editor" name="teks1"></textarea>
            </div>

            <div class="form-group">
                <label>Teks 2:</label>
                <textarea id="editor2" name="teks2"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>

        </form>


<?php
require_once 'footer.php';
?>

<script>
    $("#linkSlider").addClass("active");
</script>