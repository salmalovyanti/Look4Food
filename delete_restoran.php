<?php
$conn = new mysqli("localhost", "root", "", "restaurant_reviews");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resto = $_GET['resto'];
$id = $_POST['id'];
$user_id = $_POST['user_id'];
$rate = $_POST['rate'];
$recommend = $_POST['recommend'];
$isi_review = $_POST['isi_review'];

$sql = "DELETE FROM $resto WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=Record updated successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

