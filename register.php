<?php
require 'dbkoneksi.php';

// Tangkap data yang dikirimkan melalui form dan lakukan sanitasi
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Hash password sebelum disimpan di database
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Siapkan pernyataan SQL menggunakan parameter terikat
$query_sql = "INSERT INTO users (username, password, name) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query_sql);
mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword, $name);

if (mysqli_stmt_execute($stmt)) {
    // Jika pendaftaran berhasil, arahkan pengguna ke halaman index
    header("Location: login.php");
    exit(); // Pastikan tidak ada output lagi setelah header()
} else {
    // Jika terjadi kesalahan, tampilkan pesan kesalahan
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
