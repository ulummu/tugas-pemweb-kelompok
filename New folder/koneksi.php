<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "tugaskelompok";	//nama database

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>