<?php
$title = 'Daftar Event';
require_once 'header.php';
?>

        <?php if (isset($_GET['sukses'])): ?>

            <div class="alert alert-success">

                <?php
                if ($_GET['sukses'] == 'tambah') {
                    echo "Event berhasil ditambahkan.";
                } elseif ($_GET['sukses'] == 'edit') {
                    echo "Event berhasil diperbarui.";
                } elseif ($_GET['sukses'] == 'hapus') {
                    echo "Event berhasil dihapus.";
                }
                ?>
                
            </div>

        <?php endif ?>

        <a href="tambah-event.php" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Event</a>
        <br><br>

        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                    <th>Peserta</th>
                    <th>Status</th>
                    <th width="160">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $kueri = 'SELECT * FROM event ORDER BY waktu DESC';
                $hasil = mysqli_query($koneksi, $kueri);

                while ($data = mysqli_fetch_array($hasil)):
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo kucilkan_script($data['judul']); ?></td>
                    <td><?php echo date('d-m-Y H:i', strtotime(kucilkan_script($data['waktu']))); ?></td>
                    <td><?php echo kucilkan_script($data['tempat']); ?></td>

                    <?php
                    $kueri2 = "SELECT * FROM partisipasi WHERE event_id=".$data['id'];
                    $hasil2 = mysqli_query($koneksi, $kueri2);
                    $partisipasi = mysqli_num_rows($hasil2);
                    ?>

                    <td><?php echo $partisipasi; ?></td>
                    <td>

                        <?php if (strtotime(kucilkan_script($data['waktu'])) > strtotime(date('Y-m-d H:i:s'))): ?>
                            <span class="btn btn-primary">Aktif</span>
                        <?php else: ?>
                            <span class="btn btn-dark">Selesai</span>
                        <?php endif; ?>
                    
                    </td>
                    <td>
                        <a class="btn btn-warning" href="edit-event.php?id=<?php echo kucilkan_script($data['id']); ?>">
                            <i class="fas fa-pencil-alt"></i> Edit
                        </a>
                        <a class="btn btn-danger" href="hapus-event.php?id=<?php echo kucilkan_script($data['id']); ?>"
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
    $("#linkEvent").addClass("active");
</script>