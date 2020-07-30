<?php
$title = 'Tambah Event';
require_once 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul  = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $tempat = mysqli_real_escape_string($koneksi, $_POST['tempat']);
    $konten = mysqli_real_escape_string($koneksi, $_POST['konten']);

    $waktu  = date('Y-m-d H:i:s', strtotime(mysqli_real_escape_string($koneksi, $_POST['waktu'])));

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
    
    $kueri = "INSERT INTO event(judul, waktu, tempat, konten, gambar)
              VALUES('$judul', '$waktu', '$tempat', '$konten', '$gambar')";
    $hasil = mysqli_query($koneksi, $kueri);

    if ($hasil) {
        if ($upload_gambar) {
            move_uploaded_file($gambar_tmp, $target_file);
        }

        header('Location: daftar-event.php?sukses=tambah');
   
    } else {
        $error = 'Error '. mysqli_error($koneksi);
    }
}
?>
        <a href="daftar-event.php" class="btn btn-outline-dark"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
        <br><br>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul:</label>
                <input type="text" name="judul" class="form-control">
            </div>

            <div class="form-group">
                <label>Waktu:</label>
                <input type="text" name="waktu" id="datetime" class="form-control">
            </div>

            <div class="form-group">
                <label>Tempat:</label>
                <input type="text" name="tempat" class="form-control">
            </div>

            <div class="form-group">
                <label>Konten:</label>
                <textarea id="editor" name="konten"></textarea>
            </div>

            <div class="form-group">
                <label>Gambar:</label>
                <input type="file" name="gambar" class="form-control-file" onchange="loadFile(event)">
                <br>
                <img src="" width="300" class="img-thumbnail" id="imgPreview">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>

        </form>


<?php
require_once 'footer.php';
?>

<script>
    $("#linkEvent").addClass("active");
</script>