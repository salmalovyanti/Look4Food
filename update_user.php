<?php
$conn = new mysqli("localhost", "root", "", "restaurant_reviews");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
$location = $_POST['location'];

$sql = "UPDATE users SET username='$username', email='$email', password='$password', nama_user='$nama_user', location='$location' WHERE user_id='$user_id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=User updated successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
