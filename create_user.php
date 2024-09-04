<?php
include 'config.php';

session_start();

$message = ''; // Variable untuk menyimpan pesan

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $user_id = uniqid('UI'); // Menghasilkan user_id unik
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Simpan password dalam bentuk teks biasa
    $nama_user = $_POST['nama_user'];
    $location = $_POST['location'];
    $regist_date = date('Y-m-d');
    $last_log_date = date('Y-m-d');

    $sql = "INSERT INTO users (username, email, password, nama_user, location, regist_date, last_log_date) VALUES ('$username', '$email', '$password', '$nama_user', '$location', '$regist_date', '$last_log_date')";

    if (mysqli_query($koneksi, $sql)) {
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id;
        header("Location: welcome.html?message=" . urlencode("User berhasil ditambahkan!"));
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script type="text/javascript">
        // Fungsi untuk menampilkan alert
        function showAlert(message) {
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body onload="showAlert('<?php echo $message; ?>')">
    <?php if (!$message): ?>
        <form method="post">
            Username: <input type="text" name="username"><br>
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            Nama User: <input type="text" name="nama_user"><br>
            Lokasi: <input type="text" name="location"><br>
            <input type="submit" value="Tambah User">
        </form>
    <?php endif; ?>
</body>
</html> -->
