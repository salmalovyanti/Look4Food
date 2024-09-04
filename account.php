<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: welcome.html');
    exit;
} else {
    $user_id = $_SESSION['user_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account | Look4Food</title>
    <link rel="stylesheet" href="Look4FoodStyle.css">
</head>
<body>
    <header>
        <h2 class="logo">Look 4 Food</h2>
        <nav class="navigation"> 
            <a href="all.php" class="nav-btn">Browse</a>
            <a href="#" class="active">Account</a>
            <a href="logout.php" class="nav-btn">Log Out</a>           
        </nav>
    </header>

    <section class="add-rev-ask">
        <h3>My Account</h3>
    </section>

    <div class="profile-sq">
        <?php
            include 'config.php';
            $sql = "SELECT * FROM users WHERE user_id = $user_id";
            $result = $koneksi->query($sql);
            $row = mysqli_fetch_assoc($result);

            $username = $row['username'];
            $nama_user = $row['nama_user'];
            $email = $row['email'];
            $location = $row['location'];
            $regist_date = $row['regist_date'];
            
            echo '<h4>Username:</h4>';
            echo '<p>' . $username . '</p>';
            echo '<h4>Name:</h4>';
            echo '<p>' . $nama_user . '</p>';
            echo '<h4>Email:</h4>';
            echo '<p>' . $email . '</p>';
            echo '<h4>Location:</h4>';
            echo '<p>' . $location . '</p>';
            echo '<h4>Date Joined:</h4>';
            echo '<p id="date-joined">' . $regist_date . '</p>';
        ?>
    </div>

    <footer>
        <div class="in-footer-1">
            <h2>Look 4 Food</h2>
        </div>
        <p class="by">©Created by Group 7 - B - Informatika</p> 
        <div class="team">
            <div class="in-team">
                <p>Deliana Wahyukusumaningati</p>
                <p>2210511047</p>
            </div>
            <div class="in-team">
                <p>Widya Amellia Putri</p>
                <p>2210511052</p>
            </div>
            <div class="in-team">
                <p>Salma Nabila Lovyanti</p>
                <p>2210511069</p>
            </div>
            <div class="in-team">
                <p>Wira Febriyani</p>
                <p>2329915071</p>
            </div>
        </div>      
    </footer> 

    <script src="L4F.js"></script>
</body>
</html>
