<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mens Tops</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <ul>
           <!-- Logo that links to the index page -->
           <li>
                <img src="/473Project/assets/images/ZAS.png" class="logo" onclick="window.location.href='/473Project/website-files/index-page/index.html'">
            </li>

            <!-- Mens Nav Selection -->
            <li class="dropdown">
                 <a href="/473Project/website-files/mens-pages/Mens.php" class="dropbtn">Men's</a> 
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/mens-pages/Mens-Tops.php">Tops</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Bottoms.php">Bottoms</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Accessories.php">Accessories</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Shoes.php">Shoes</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Swimwear.php">Swimwear</a>
                    </div>
            </li>


            <!-- Womens Nav Selection -->
            <li class="dropdown">
                 <a href="/473Project/website-files/womens-pages/Womens.php" class="dropbtn">Women's</a>
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/womens-pages/Womens-Tops.php">Tops</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Bottoms.php">Bottoms</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Accessories.php">Accessories</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Shoes.php">Shoes</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Swimwear.php">Swimwear</a>
                    </div>
            </li>

            <!-- Unisex Nav Selection -->
            <li class="dropdown">
                 <a href="/473Project/website-files/unisex-pages/Unisex.php" class="dropbtn">Unisex</a>
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/unisex-pages/Unisex-Tops.php">Tops</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Bottoms.php">Bottoms</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Accessories.php">Accessories</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Shoes.php">Shoes</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Swimwear.php">Swimwear</a>
                    </div>
            </li>

            <!-- Cart Button -->
            <li id="cartButton"> <a href="#"> <i class="fas fa-shopping-cart"></i> </a> </li>
            
            <!-- Check if user is logged in -->
            <?php
               session_start();

               if (isset($_SESSION['loggedIn'])) {
                   $loginStatus = $_SESSION["loggedIn"];

                   if($loginStatus == 1){
                       echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php'> <i class='fas fa-user'></i> </a> </li>");
                   }
               }
               else{
                   echo("<li id='loginButton'> <a href='/473Project/registration/login/login.html'>Login / Sign Up</a> </li>");
               }
            ?>

            <!-- Search the website for something -->
            <li id="searchContainer"> 
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." size="30" id="searchBar">
                    <button type="submit" id="searchIcon"> <i class="fa fa-search"></i> </button>
                </form>
             </li>
        </ul>

        <!------------------------------------------------ Page Contents ------------------------------------------------->
        <div class="Page-Content">
            
            <div class="error-container">

                <img src="/473Project/assets/images/man-leaning.jpg">

                <h1 class="header">404</h1>
                <h1 class="header2">Page Not Found</h1>

                <p class="message">
                    We know our products are awesome, but you are trying to load something that doesn't exist. 
                    Sorry we can't load anything here for you, but perhaps we have something else thay may interest you.
                    You can check out our products using the Navigation bar at the top of the screen, or you could visit
                    our home page using the button below. 
                </p>

                <button class="HomeBTN" onclick="linkHome();">Home</button>
            </div>

        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
            <a href="/473Project/support-pages/About.php">About Us</a>
            <a href="/473Project/support-pages/Careers.php">Careers</a>
            <a href="/473Project/support-pages/FAQ.php">FAQ</a>
            <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
        </div>

        <script src="/473Project/website-files/product-grid.js"></script>

        <script>
            function linkHome(){
                window.location.href="/473Project/website-files/index-page/index.html"
            }
        </script>
    </body>
</html>