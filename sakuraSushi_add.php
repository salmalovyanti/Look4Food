<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rate = $_POST['rate'];
    $rec = $_POST['choice'];
    $review = $_POST['review'];
    
    // Assuming you have user_id stored in session
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO sakurasushi (user_id, rate, recommend, isi_review) VALUES ('$user_id', '$rate', '$rec', '$review')";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: sakuraSushi.php#showRev");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
