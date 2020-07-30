<?php
session_start();    
ob_start();

require_once '../config/database.php';
require_once '../config/functions.php';

if (empty($_SESSION['user_id']) || $_SESSION['user_level'] != 1) {
    header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Wiredwiki App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard | <?php echo kucilkan_script($title); ?></title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet">
    <link href="../css/style-admin.css" rel="stylesheet"  >
    
</head>

<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Clover Hijau</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Admin Panel</p>
            <li id="linkEvent">
                <a href="daftar-event.php"> <i class="fas fa-calendar-day"></i> Event</a>
            </li>
            <li id="linkArsip">
                <a href="daftar-arsip.php"><i class="fas fa-clone"></i> Arsip</a>
            <li id="linkSlider">
                <a href="daftar-slider.php"> <i class="fas fa-expand"></i> Slider</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="../logout.php" class="logout">LOGOUT</a>
            </li>
            <li>
                <a href="../index.php" class="btn btn-info">Kembali ke Beranda</a>
            </li>
        </ul>

        <p class="copyright">&copy; <a href="https://kodingnext.com/" target="_blank" rel="nofollow">Koding Next</a> | <?php echo date('Y');?></p>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-success">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>

        <h4 class="text-center text-muted"><?php echo kucilkan_script($title); ?></h4>