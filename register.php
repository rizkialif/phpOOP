<?php
$title = 'Clover Hijau | Daftar Member';
require_once 'header.php';
?>

    <div class="headactivity d-none d-md-block text-left">
        <h2>Come and Help Us</h2>
        <h5><i>Come and help us with registration as an member</i></h5>
    </div>

    <section id="registrasi">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                </div>
                <div class="col-md-6 mt-5">

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nama       = mysqli_real_escape_string($koneksi, $_POST['nama']);
                        $telepon    = mysqli_real_escape_string($koneksi, $_POST['telepon']);
                        $email      = mysqli_real_escape_string($koneksi, $_POST['email']);
                        $password   = mysqli_real_escape_string($koneksi, $_POST['password']);
                        $k_password = mysqli_real_escape_string($koneksi, $_POST['k_password']);
                        $level      = 2;

                        if ($password == $k_password) {
                            $hash_password = password_hash($password, PASSWORD_DEFAULT);
                            
                            $kueri = "INSERT INTO user(nama, telepon, email, password, level) 
                                      VALUES('$nama', '$telepon', '$email', '$hash_password', $level)";
                            $hasil = mysqli_query($koneksi, $kueri);

                            if ($hasil) {
                                header('Location: index.php?sukses=daftar');
                            }

                        } else {
                            $error = 'Kesalahan. Passoword tidak sama.';
                        }
                    }
                    ?>

                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <h5 class="text-success"><strong>Daftar sebagai member</strong></h5>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="telepon" class="col-md-2 col-form-label">Telepon</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="telepon" placeholder="No. Telepon valid">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" placeholder="contoh@mail.com">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password" placeholder="Buat password yang kuat">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="k_password" class="col-md-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="k_password" placeholder="Pastikan password sama">
                            </div> 
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-success">Daftar</button>
                                <span class="ml-2">
                                    Sudah punya akun? Silahkan <a href="login.php" data-target="#myModal">Login</a>.
                                </span>
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