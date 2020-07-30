<?php
$title = 'Clover Hijau | Organsisai Lingkungan';
require_once 'header.php';

if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
}

$kueri = "SELECT * FROM user WHERE id=".$_SESSION['user_id'];
$hasil = mysqli_query($koneksi, $kueri);
$data  = mysqli_fetch_assoc($hasil); 
?>
    
    <div class="headactivity d-none d-md-block text-left">
        <h2>Selamat Datang | <?php echo $_SESSION['user_nama']; ?></h2>
    </div>
    <section id="profille">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-5">
                    <h5 class="text-success">Atur profil Anda</h5><hr style="border: 1px solid rgb(0, 161, 11);">
                    <form action="">
                        <div class="form-group row">
                            <label for="nama" class="col-md-2 col-form-label" >Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['user_nama']; ?>">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label" >Nomor Telepon</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="telepon" value="<?php echo $_SESSION['user_telepon']; ?>">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label" >Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user_email']; ?>">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-success">Update profil</button>
                            </div> 
                        </div>
                        
                    </form>  
                </div>
            </div>
        </div>
    </section>
    
<?php
require_once 'footer.php';
?>
