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
    <title>Green Garden | Look4Food</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Look4FoodStyle.css">
</head>
<body>
    <header>
        <h2 class="logo">Look 4 Food</h2>
        <nav class="navigation">
            <a href="all.php" class="nav-btn">Browse</a>
            <a href="account.php" class="nav-btn">Account</a>
            <a href="logout.php" class="nav-btn">Log Out</a>            
        </nav>
    </header>

    <div class="box" id="pic-3">
        <div class="rest-header">
            <img src="img/rest3_1.jpg" alt="green garden 1">
        </div>
        <div class="rest-header">
            <img src="img/rest3_3.avif" alt="green garden 2">
        </div>
        <div class="rest-header">
            <img src="img/rest3_2.avif" alt="green garden 3">
        </div>
    </div>
    
    <div class="box">
        <div class="sec-30">
            <h1>Green Garden</h1>
            <h4>Vegan</h4>
            <div class="box">
                <p class="serv">Open at:</p>  
                <p class="serv-time">08.30 - 22.00</p>              
            </div>
            <p class="serv">Take Away</p> 
            <p class="inrate">4.2 Ratings</p> 
        </div>
        <div class="sec-70">
            <p class="desc">Vegetarian restaurant with healthy and fresh menu options, suitable for vegans and vegetarians.</p>
            <p class="rec">Kemayoran, Central Jakarta</p>
        </div>        
    </div>

    <div class="menu-box">
    <h2>Popular Menu</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="img/veggieburger.avif" class="card-img-top" alt="veggieburger">
                <div class="card-body">
                  <p class="card-text">Veggie Burger</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/quinoasalad.avif" class="card-img-top" alt="quinoasalad">
                <div class="card-body">
                  <p class="card-text">Quinoa Salad</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/smoothiebowl.avif" class="card-img-top" alt="smoothiebowl">
                <div class="card-body">
                  <p class="card-text">Smoothie Bowl</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div id="showReview">
        <section class="rev-quest" id="showRev">
            <h2>What do people say about it?</h2>
        </section>

        <div class="rev-box">
                <?php
                include 'config.php';
                $sql = "SELECT * FROM greengarden";
                $result = $koneksi->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $rating = $row['rate'];
                        $rec = $row['recommend'];
                        $fullReview = $row['isi_review'];
        
                        // Tampilkan konten review di dalam HTML
                        echo '<div class="rev-sq">';
                        echo '<div class="rev-sq-us">';
                        echo '<p>' . $rating . ' Ratings </p>';
                        echo '<p> • ' . $rec . '</p>';
                        echo '</div>';
                        echo '<div class="rev-sq-in">';
                        echo '<p>' . $fullReview . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Tidak ada ulasan yang ditemukan.</p>';
                }
        
                mysqli_close($koneksi);
                ?>
        </div> 

        <div class="rev-ask-box">
            <div class="rev-ask">
                <h2 >Have something to share too?</h2>           
            </div>
            <div class="rev-ask">
                <p>Send in your own thoughts on this restaurant!</p>   
                <button onclick="showAddReview()" id="revBtn">Add Review</button>         
            </div>       
        </div>
    </div>

    <div id="review" class="hidden">
        <section id="rev-1" class="add-rev-ask">
            <h2>Write your own review</h2>
        </section>
        <!-- add review -->
        <form action="greenGarden_add.php"  method="post">
            <div class="rev-box">
                <div class="rev-sq">
                    <div class="add-rev">
                        <div class="container1">
                            <label for="rate">Rating</label>
                            <input type="number" id="rate" name="rate" step="0.1" min="0.1" max="5.0">
                        </div>
                        <div class="container2">
                            <label for="rec">Would you recommend this to a friend?</label>
                            <input type="text" list="options" id="choice" name="choice" placeholder="Choose">
                            <datalist id="options">
                                <option value="Recommended">Recommended</option>
                                <option value="Not Recommended">Not Recommended</option>
                            </datalist>
                        </div>                  
                    </div>
                    <label class="rev-label" for="review">Tell us what you think.</label>
                    <input class="rev-inp" type="textarea" id="review" name="review" placeholder="Enter your review on this restaurant" required>
                    <button onclick="showReview()" type="submit" class="submit-btn" id="subReview">Submit</button>                  
                </div>
            </div>
        </form>
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