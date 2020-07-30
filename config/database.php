<?php

/* 
    KONEKSI KE DATABASE
 */

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'kn_nextdev');

$koneksi = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

if (!$koneksi) {
    echo 'Koneksi gagal!';
}