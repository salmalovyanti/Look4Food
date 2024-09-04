<?php
$conn = new mysqli("localhost", "root", "", "restaurant_reviews");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = uniqid('UI');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
$location = $_POST['location'];

$sql = "INSERT INTO users (user_id, username, email, password, nama_user, location) VALUES ('$user_id', '$username', '$email', '$password', '$nama_user', '$location')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=Record added successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
