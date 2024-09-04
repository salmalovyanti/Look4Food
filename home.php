<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: welcome.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Look4Food</title>
    <link rel="stylesheet" href="Look4FoodStyle.css">
    <script>
        // Fungsi untuk menampilkan alert jika ada pesan di URL
        function showAlertFromURL() {
            const params = new URLSearchParams(window.location.search);
            const message = params.get('message');
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body onload="showAlertFromURL()">
    <header>
        <h2 class="logo">Look 4 Food</h2>
        <nav class="navigation">
            <!-- <button onclick="redirectToBrowse()" id="homebtn" class="nav-btn">Browse</button> -->
            <a href="#" class="active">Home</a>
            <a href="all.html" class="nav-btn">Browse</a>
            <a href="" class="nav-btn">Account</a> 
        </nav>
    </header>
    
    <!-- landing page -->
    <section class="welcome-pad">
        <div class="welcome">
            <img src="img/welc.jpg" id="welcomingpic">
            <div class="box">
                <div class="left-wel">
                    <h2 id="text">Can't decide yet?</h2>
                    <div class="wel-msg">Discover and share us what you're tummy desires!</div> 
                    <nav>
                        <a class="discover" href="#about">Discover More</a>
                    </nav>                    
                </div>
                <div class="right-wel"></div>
            </div>
        </div>        
    </section>

    <!-- Services -->
    <section class="sec-2">
       <h3>View restaurants by services</h3>
       <br>
        <div class="rest-type">
            <div class="rest-type-col-1">
                <div class="rest-type-img-1">
                    <img class="rest-type-img" src="img/dine.avif" id="welcomingpic">   
                </div>
                <div class="rest-type-half-1">
                    <p class="rest-type-col-text">DINE IN</p>
                </div>
            </div>
            <div class="rest-type-col-2">
                <p>OR</p>
            </div>
            <div class="rest-type-col-1">
                <div class="rest-type-img-1">
                    <img class="rest-type-img" src="img/take.avif" id="welcomingpic">   
                </div>
                <div class="rest-type-half-1">
                    <p class="rest-type-col-text">TAKE AWAY</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Cuisines Question -->
     <div class="box">
         <section class="land-quest">
            <h2>What are you in the mood for today?</h2>
            <button onclick="redirectToBrowse()" id="brwallBtn">Browse All Restaurants</button>
        </section>
        <img class="land-quest-img" src="img/cuis.jpg" alt="">        
    </div>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <h2>About Us</h2>
            <img src="img/img2.jpg" alt="">
        </div>
        <div class="about-text">
            <h4 class="about-text-1">Look4Food is a web-based restaurant aggregator that brings a world of flavors right to your fingertips.</h4>
            <h4 class="about-text-1">We are dedicated to helping food lovers discover and enjoy the best dining experiences, whether they're looking for a cozy café, a bustling street food stall, or a fine dining establishment.</h4>
            <br>
        </div>
    </section>

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

