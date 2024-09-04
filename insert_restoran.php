<?php
$conn = new mysqli("localhost", "root", "", "restaurant_reviews");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$resto = $_GET['resto'];
$user_id = $_POST['user_id'];
$rate = $_POST['rate'];
$recommend = $_POST['recommend'];
$isi_review = $_POST['isi_review'];

$sql = "INSERT INTO $resto (user_id, rate, recommend, isi_review) VALUES ('$user_id', '$rate', '$recommend', '$isi_review')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=Record added successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
