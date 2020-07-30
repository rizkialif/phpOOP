<?php
$title = 'Clover Hijau | Tentang Kami   ';
require_once 'header.php';
?>

    <section id="content">
        <div class="headactivity d-none d-md-block text-left">
            <h2>Save our Earth</h2>
            <h5> <i>"The lights grow brighter as the earth lurches away from the sun"</i></h5>
        </div>
    </section>
    <!-- Section Current Activity -->
    <section id="currentActivity" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/p-activity-6.jpg" class="img-fluid" width="500">
                </div>
                <div class="col-md-6">
                    <h3 class="text-success mb-4">Pemeliharaan Lingkungan Kembali Dilakukan</h3>
                    <p class="paragraphtext">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac turpis eget augue accumsan 
                        vehicula. Sed vestibulum finibus ligula, ultrices elementum nulla rhoncus consequat. Nullam 
                        metus neque, porta vel convallis non, cursus nec dolor. Donec id ipsum risus. Suspendisse 
                        venenatis felis pharetra neque luctus feugiat. Aenean nibh justo, pretium sagittis lectus id, 
                        mattis semper ante. Curabitur sit amet placerat dolor. Fusce eleifend lobortis euismod. Integer 
                        eget augue eget risus sagittis blandit. Etiam vel auctor arcu. Nunc viverra ultricies orci, eget 
                        sollicitudin dolor. Cras pellentesque justo mauris. Etiam ut sodales justo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="currentActivity" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success mb-4">Pemeliharaan Lingkungan Kembali Dilakukan</h3>
                    <p class="paragraphtext">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac turpis eget augue accumsan 
                        vehicula. Sed vestibulum finibus ligula, ultrices elementum nulla rhoncus consequat. Nullam 
                        metus neque, porta vel convallis non, cursus nec dolor. Donec id ipsum risus. Suspendisse 
                        venenatis felis pharetra neque luctus feugiat. Aenean nibh justo, pretium sagittis lectus id, 
                        mattis semper ante. Curabitur sit amet placerat dolor. Fusce eleifend lobortis euismod. Integer 
                        eget augue eget risus sagittis blandit. Etiam vel auctor arcu. Nunc viverra ultricies orci, eget 
                        sollicitudin dolor. Cras pellentesque justo mauris. Etiam ut sodales justo.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/p-activity-5.jpg" class="img-fluid" width="500">
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <div class="container">
            <div class="mark">
                <h2>Contact</h2><hr style="border:1px solid #1B5E20;"> 
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <h5>Send a massage to us if you have more question or suggestion</h5>
                        <address>
                            <strong>Koding Next</strong>
                            <p>Jl. Kedua Ketiga Keempat <br> 
                            PIK Avenue 1 2 3<br>
                            Jakarta Utara<br>
                            P: 021-1234567</p>
                        </address>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label" >Name:</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="name" placeholder="enter your name">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label" >Email:</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="name" placeholder="enter your email">
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label" >Comment:</label>
                            <div class="col-md-10">
                                <textarea name="comment"  cols="60" rows="10" placeholder=" enter your messages"></textarea>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-success">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end Section Current Activity -->

<?php
require_once 'footer.php';
?>