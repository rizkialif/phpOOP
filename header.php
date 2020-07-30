<?php
session_start();    
ob_start();

require_once 'config/database.php';
require_once 'config/functions.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Wiredwiki App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo kucilkan_script($title); ?></title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark" id="myNavbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">CLOVER HIJAU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav flex-fill justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="index.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="event.php">EVENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="arsip.php">ARSIP KEGIATAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="tentangkami.php">TENTANG KAMI</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                      
                    <?php if (!(empty($_SESSION['user_id']))): ?> 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-4 text-white" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['user_nama'] ?> 
                            </a>
                            <div class="dropdown-menu">
                                
                                <?php if ($_SESSION['user_level'] == 1): ?>
                                    <a class="dropdown-item" href="admin/index.php">Dashboard</a>
                                <?php endif; ?>
                                
                                <a class="dropdown-item" href="account.php">Kelola Akun</a>
                                <a class="dropdown-item" href="logout.php">Keluar</a>
                            </div>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link px-4 text-white " href="login.php">
                                <i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;|&nbsp;Daftar
                            </a>
                        </li>

                    <?php endif; ?>

                </ul>
            </div>
        </div>  
    </nav>
    <!-- end Navbar -->
