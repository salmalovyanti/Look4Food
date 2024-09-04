<?php
$conn = new mysqli("localhost", "root", "", "restaurant_reviews");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];

$sql = "DELETE FROM users WHERE user_id = '$user_id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=User deleted successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
