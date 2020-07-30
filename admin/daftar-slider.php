<?php
$title = 'Daftar Slider';
require_once 'header.php';
?>

        <?php if (isset($_GET['sukses'])): ?>

            <div class="alert alert-success">

                <?php
                if ($_GET['sukses'] == 'tambah') {
                    echo "Slider berhasil ditambahkan.";
                } elseif ($_GET['sukses'] == 'edit') {
                    echo "Slider berhasil diperbarui.";
                } elseif ($_GET['sukses'] == 'hapus') {
                    echo "Slider berhasil dihapus.";
                }
                ?>

            </div>

        <?php endif; ?>

        <a href="tambah-slider.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Slider</a>
        <br><br>

        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Teks 1</th>
                    <th>Teks 2</th>
                    <th width="160">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $kueri = 'SELECT * FROM slider ORDER BY id';
                $hasil = mysqli_query($koneksi, $kueri);

                while ($data = mysqli_fetch_array($hasil)):
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="../img/<?php echo kucilkan_script($data['gambar']); ?>" width="100"></td>
                    <td><?php echo substr(kucilkan_script($data['teks1']), 0, 50); ?></td>
                    <td><?php echo substr(kucilkan_script($data['teks2']), 0, 50); ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit-slider.php?id=<?php echo kucilkan_script($data['id']); ?>">
                            <i class="fas fa-pencil-alt"></i> Edit
                        </a>
                        <a class="btn btn-danger" href="hapus-slider.php?id=<?php echo kucilkan_script($data['id']); ?>"
                        onClick="javascript: return confirm('Yakin hapus data ini?');">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </td>
                </tr>
    
                <?php endwhile; ?>
                
            </tbody>
        </table>

<?php
require_once 'footer.php';
?>

<script>
    $("#linkSlider").addClass("active");
</script>