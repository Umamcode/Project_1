<?php
// Konfigurasi database
$host = 'localhost'; // Ganti sesuai dengan host Anda
$dbname = 'dbpuskesmas2'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = ''; // Ganti dengan kata sandi database Anda

$dsn = "mysql:host=$host;dbname=$dbname";

// Buat koneksi Database
$dbh = new PDO($dsn, $user, $pass);
$conn = mysqli_connect ('localhost','root','','dbpuskesmas2');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>