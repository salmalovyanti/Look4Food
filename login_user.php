<?php
include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan username dan password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Ambil data pengguna
        $row = mysqli_fetch_assoc($result);

        // Update last_log_date
        $user_id = $row['user_id'];
        $update_last_log_sql = "UPDATE users SET last_log_date = NOW() WHERE user_id = '$user_id'";
        mysqli_query($koneksi, $update_last_log_sql);

        // Tetapkan sesi username dan user_id
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id;

        // Check jika username adalah 'admin'
        if ($username === 'admin') {
            // Redirect admin ke index.php
            header("Location: index.php?message=" . urlencode("Berhasil login sebagai admin!"));
        } else {
            // Redirect pengguna lain ke home.html
            header("Location: home.php?message=" . urlencode("Login berhasil!"));
        }
        exit();
    } else {
        // Username atau password salah
        header("Location: welcome.html?message=" . urlencode("Username atau password salah!"));
        exit();
    }

}
?>
