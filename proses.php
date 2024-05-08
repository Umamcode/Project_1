<?php
session_start();

require 'dbkoneksi.php';

// Tangkap data yang dikirimkan melalui form login
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Cari pengguna berdasarkan username dalam database
$query_sql = "SELECT * FROM users WHERE username = ?";
$stmt = mysqli_prepare($conn, $query_sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Periksa apakah pengguna ditemukan
if ($row = mysqli_fetch_assoc($result)) {
    // Jika ditemukan, verifikasi kata sandi
    if (password_verify($password, $row['password'])) {
        // Kata sandi cocok, pengguna berhasil login
        // Lakukan tindakan setelah login berhasil, misalnya mengatur sesi
        $_SESSION['username'] = $username;
        // Redirect ke halaman setelah login
        header("Location: home.php");
        exit();
    } else {
        // Kata sandi tidak cocok, tampilkan pesan kesalahan
        echo "Login Gagal: Kata sandi salah.";
    }
} else {
    // Pengguna tidak ditemukan, tampilkan pesan kesalahan
    echo "Login Gagal: Pengguna tidak ditemukan.";
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
