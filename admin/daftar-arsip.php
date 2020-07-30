<?php
$title = 'Daftar Arsip Kegiatan';
require_once 'header.php';
?>

        <?php if (isset($_GET['sukses'])): ?>

            <div class="alert alert-success">

                <?php
                if ($_GET['sukses'] == 'tambah') {
                    echo "Arsip kegiatan berhasil ditambahkan.";
                } elseif ($_GET['sukses'] == 'edit') {
                    echo "Arsip kegiatan berhasil diperbarui.";
                } elseif ($_GET['sukses'] == 'hapus') {
                    echo "Arsip kegiatan berhasil dihapus.";
                }
                ?>
                
            </div>

        <?php endif ?>

        <a href="tambah-arsip.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Arsip Kegiatan</a>
        <br><br>

        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Tanggal Terbit</th>
                    <th width="160">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $kueri = 'SELECT * FROM arsip ORDER BY tanggal_terbit DESC';
                $hasil = mysqli_query($koneksi, $kueri);

                while ($data = mysqli_fetch_array($hasil)):
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo kucilkan_script($data['judul']); ?></td>
                    <td><?php echo date('Y-m-d', strtotime(kucilkan_script($data['tanggal_terbit']))); ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit-arsip.php?id=<?php echo kucilkan_script($data['id']); ?>">
                            <i class="fas fa-pencil-alt"></i> Edit
                        </a>
                        <a class="btn btn-danger" href="hapus-arsip.php?id=<?php echo kucilkan_script($data['id']); ?>"
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
    $("#linkArsip").addClass("active");
</script>