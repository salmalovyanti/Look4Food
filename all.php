<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Browse Restaurant | Look4Food</title>
    <link rel="stylesheet" href="Look4FoodStyle.css">
</head>
<body>
    <header>
        <h2 class="logo">Look 4 Food</h2>
        <nav class="navigation">
            <a href="home.html" class="nav-btn">Home</a>
            <a href="#" class="active">Browse</a>
            <a href="account.php" class="nav-btn">Account</a>           
        </nav>
    </header>
    <div class="serv-sort">
        <button onclick="showAll()">All</button>
        <button onclick="showDineIn()">Dine In</button>
        <button onclick="showTakeAway()">Take Away</button>
    </div>
    <div class="cuis-sort">
        <button>Chicken</button>
        <button>Seafood</button>
        <button>Vegan</button>
        <button>Bakery</button>
        <button>Noodles</button>
        <button>Fast Food</button>
        <button>Indonesian</button>
        <button>Asian</button>
        <button>Western</button>
        <button>Sweets</button>
        <button>Coffee</button>
        <button>Beverages</button>                
    </div>
    <section>
        <section class="browse-title">
            <h2>Find Restaurant - </h2>
            <div class="accent-title">
               <p class="accent">Browse by Service and Cuisine Categories</p> 
            </div>
        </section>

        <section class="browse-title">
            <div class="browse" id="rest1" onclick="redirectToRest1()">
                <img src="img/rest1_1.avif" alt="">
                <h3>Resto Nusantara</h3>
                <p class="ctg">Indonesian</p>
                <p class="loc">Jagakarsa, South Jakarta</p>
                <p class="rate">4.8 Ratings</p>                
            </div>
            <div class="browse" id="rest2" onclick="redirectToRest2()">
                <img src="img/rest2_1.avif" alt="">
                <h3>Sakura Sushi</h3>
                <p class="ctg">Seafood, Asian</p>
                <p class="loc">Menteng, Central Jakarta</p>
                <p class="rate">4.5 Ratings</p>                
            </div>
            <div class="browse" id="rest3" onclick="redirectToRest3()">
                <img src="img/rest3_1.jpg" alt="">
                <h3>Green Garden</h3>
                <p class="ctg">Vegan</p>
                <p class="loc">Kemayoran, Central Jakarta </p>
                <p class="rate">4.2 Ratings</p>                
            </div>          
        </section>
        <section class="browse-title">
            <div class="browse" id="rest4">
                <img src="img/rest4.avif" alt="">
                <h3>Bella Italia</h3>
                <p class="ctg">Fast Food, Western</p>
                <p class="loc">Gambir, Central Jakarta </p>
                <p class="rate">4.6 Ratings</p>                
            </div>
            <div class="browse" id="rest5">
                <img src="img/rest5.avif" alt="">
                <h3>Tandoori House</h3>
                <p class="ctg">Chicken, Western</p>
                <p class="loc">Senen, Central Jakarta </p>
                <p class="rate">4.1 Ratings</p>                
            </div>
            <div class="browse" id="rest6">
                <img src="img/rest6.avif" alt="">
                <h3>Steak Master</h3>
                <p class="ctg">Western</p>
                <p class="loc">Kelapa Gading, North Jakarta </p>
                <p class="rate">4 Ratings</p>                
            </div>          
        </section>
        <section class="browse-title">
            <div class="browse">
                <img src="img/rest7.avif" alt="">
                <h3>Cafe Aroma</h3>
                <p class="ctg">Coffee, Bakery</p>
                <p class="loc">Kelapa Gading, North Jakarta </p>
                <p class="rate">4.7 Ratings</p>                
            </div>
            <div class="browse">
                <img src="img/rest8.avif" alt="">
                <h3>Seafood Delight</h3>
                <p class="ctg">Seafood</p>
                <p class="loc">Koja, North Jakarta </p>
                <p class="rate">4.1 Ratings</p>                
            </div>
            <div class="browse">
                <img src="img/rest9.avif" alt="">
                <h3>Bean Bliss</h3>
                <p class="ctg">Coffee, Beverages</p>
                <p class="loc">Cilandak, South Jakarta</p>
                <p class="rate">4.9 Ratings</p>                
            </div>          
        </section>
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