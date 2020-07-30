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
                        $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
                        $password = mysqli_real_escape_string($koneksi, $_POST['password']);

                        $kueri = "SELECT * FROM user WHERE email='$email'";
                        $hasil = mysqli_query($koneksi, $kueri); 

                        if ($hasil) {
                            $data  = mysqli_fetch_array($hasil);
                            $verifikasi = password_verify($password, $data['password']);

                            if ($verifikasi) {
                                
                                $_SESSION['user_id']      = $data['id'];
                                $_SESSION['user_nama']    = $data['nama'];
                                $_SESSION['user_telepon'] = $data['telepon'];
                                $_SESSION['user_email']   = $data['email'];
                                $_SESSION['user_level']   = $data['level'];

                                header('Location: index.php?sukses=login');
                            }
                        }
                    }
                    ?>

                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <h5 class="text-success"><strong>Masuk</strong></h5>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-success">Login</button>
                                <span class="ml-2">
                                    Belum punya akun? <a href="register.php" data-target="#myModal">Daftar</a> member sekarang.
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