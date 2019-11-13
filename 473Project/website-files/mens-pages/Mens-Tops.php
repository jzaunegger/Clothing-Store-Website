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
                 <a href="/473Project/website-files/mens-pages/Mens.php" class="active">Men's</a> 
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
            <h1 class="Page-Title">Men's Tops</h1>
            <hr> <br>

        </div>

        <!-- HTML for the Popup Modal to view products -->
        <div class="popup-container-bg" id="popup-container-bg">
            <div class="popup-container">
                <div class="popup-header">
                    <span class="popup-product-name" id="popup-product-name"></span>
                    <span class="popup-close-button" id="popup-close-button" onclick="closePopup();"> <i class="fas fa-times"></i> </span>
                </div>

                <div class="popup-images">
                    <img class="popup-image" id="image1" src="">
                    <img class="popup-image" id="image2" src="">
                    <img class="popup-image" id="image3" src="">
                    <img class="popup-image" id="image4" src="">
                    <img class="popup-image" id="image5" src="">
                    <img class="popup-image" id="image6" src="">
                </div>

                <div class="popup-details">
                    <div class="popup-details-left">
                        <label class="detail">Product Description:</label>  <label id="productDescription"></label> <br><br>
                        <label class="detail">Sex:</label>                  <label id="productSex"></label> <br><br>
                        <label class="detail">Category:</label>             <label id="productCategory"></label> <br><br>
                        <label class="detail">Subcategory:</label>          <label id="productSubcategory"></label> <br><br>
                    </div>

                    <div class="popup-details-right">
                        <label class="detail">Price</label>                 <label id="productPrice"></label> <br><br>
                        <label class="detail">Quantity </label><br>         <label id="quantity"></label>
                        <input type="number" min="0" step="1" max="100" placeholder="0" class="popup-input"><br><br>

                        <label class="detail">Size </label><br>


                        <select class="detail-sizebox" id="detailSizebox">
                            
                        </select> 
                    </div>
                </div>

                <div class="popup-buttons">
                    <button class="popup-button" id="likeProduct">Like This Item <i class="fas fa-heart"></i></button>
                    <button class="popup-button" id="addToWishlist">Add To Wishlist <i class="fas fa-star"></i></button>
                    <button class="popup-button" id="addToCart">Add To Cart</button>
                </div>
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
        <script src="/473Project/website-files/mens-pages/popup.js"></script>
    </body>
</html>