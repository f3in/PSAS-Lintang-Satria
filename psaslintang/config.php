<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'psaslintang';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if(mysqli_connect_errno()){
    echo "gagal koneksi : " . mysqli_connect_error();
    exit();
}