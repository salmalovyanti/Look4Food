<?php

// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_reviews";

// Buat koneksi ke database
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Set timezone
date_default_timezone_set('Asia/Jakarta'); // Ganti dengan timezone yang sesuai

?>
