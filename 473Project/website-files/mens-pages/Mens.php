<!-- Rough Layout for Project Design. Still needs AngularJS components. -->
<!-- Images from Pixabay.com, and W3Schools used as a refrence. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Men's Clothing</title>

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

        <!-------------------------------------------------- Page Contents ------------------------------------------------>
        <div class="Page-Content">

            <h1 class="Page-Title">Men's Clothing</h1>
            <hr>
            
            <h2>New Arrivals</h2>
            <!-- HTML for the New Arrivals Slideshow -->
            <div class="slideshow-container">
                <div class="image-slide new-arrivals">
                    <div class="image-number">1 / 6</div>
                    <img src="/473Project/assets/images/index/dancer2.jpg">
                </div>

                <div class="image-slide new-arrivals">
                    <div class="image-number">2 / 6</div>
                    <img src="/473Project/assets/images/index/man-standing.jpg">
                </div>

                <div class="image-slide new-arrivals">
                    <div class="image-number">3 / 6</div>
                    <img src="/473Project/assets/images/index/unisex.jpg">
                </div>

                <div class="image-slide new-arrivals">
                    <div class="image-number">4 / 6</div>
                    <img src="/473Project/assets/images/index/woman-front.jpg">
                </div>

                <div class="image-slide new-arrivals">
                    <div class="image-number">5 / 6</div>
                    <img src="/473Project/assets/images/index/clothing-shelf.jpg">
                </div>

                <div class="image-slide new-arrivals">
                    <div class="image-number">6 / 6</div>
                    <img src="/473Project/assets/images/man-laying.jpg">
                </div>

                <a class="prev" onclick="plusSlidesNA(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesNA(1)">&#10095;</a>
            </div>

            <br>

            <button class="shopBTN" onclick="window.location.href='#';">Shop Mens New Arrivals</button>
            <br><br>

            <h2>Mens Tops</h2>
            <!-- HTML for the Tops Slideshow -->
            <div class="slideshow-container">
                <div class="image-slide tops">
                    <div class="image-number">1 / 6</div>
                    <img src="/473Project/assets/images/index/dancer2.jpg">
                </div>

                <div class="image-slide tops">
                    <div class="image-number">2 / 6</div>
                    <img src="/473Project/assets/images/index/man-standing.jpg">
                </div>

                <div class="image-slide tops">
                    <div class="image-number">3 / 6</div>
                    <img src="/473Project/assets/images/index/unisex.jpg">
                </div>

                <div class="image-slide tops">
                    <div class="image-number">4 / 6</div>
                    <img src="/473Project/assets/images/index/woman-front.jpg">
                </div>

                <div class="image-slide tops">
                    <div class="image-number">5 / 6</div>
                    <img src="/473Project/assets/images/index/clothing-shelf.jpg">
                </div>

                <div class="image-slide tops">
                    <div class="image-number">6 / 6</div>
                    <img src="/473Project/assets/images/man-laying.jpg">
                </div>

                <a class="prev" onclick="plusSlidesTP(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesTP(1)">&#10095;</a>
            </div>
            
            <br>
            <button class="shopBTN" onclick="window.location.href='/473Project/website-files/mens-pages/Mens-Tops.php';">Shop Mens Tops</button>
            <br><br>

            <h2>Mens Bottoms</h2>
            <!-- HTML for the Tops Slideshow -->
            <div class="slideshow-container">
                <div class="image-slide bottoms">
                    <div class="image-number">1 / 6</div>
                    <img src="/473Project/assets/images/index/dancer2.jpg">
                </div>

                <div class="image-slide bottoms">
                    <div class="image-number">2 / 6</div>
                    <img src="/473Project/assets/images/index/man-standing.jpg">
                </div>

                <div class="image-slide bottoms">
                    <div class="image-number">3 / 6</div>
                    <img src="/473Project/assets/images/index/unisex.jpg">
                </div>

                <div class="image-slide bottoms">
                    <div class="image-number">4 / 6</div>
                    <img src="/473Project/assets/images/index/woman-front.jpg">
                </div>

                <div class="image-slide bottoms">
                    <div class="image-number">5 / 6</div>
                    <img src="/473Project/assets/images/index/clothing-shelf.jpg">
                </div>

                <div class="image-slide bottoms">
                    <div class="image-number">6 / 6</div>
                    <img src="/473Project/assets/images/man-laying.jpg">
                </div>

                <a class="prev" onclick="plusSlidesBO(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesBO(1)">&#10095;</a>
            </div>
            
            <br>
            <button class="shopBTN" onclick="window.location.href='/473Project/website-files/mens-pages/Mens-Bottoms.php';">Shop Mens Bottom</button>
            <br><br>

            <h2>Mens Accessories</h2>
            <!-- HTML for the Tops Slideshow -->
            <div class="slideshow-container">
                <div class="image-slide accessories">
                    <div class="image-number">1 / 6</div>
                    <img src="/473Project/assets/images/index/dancer2.jpg">
                </div>

                <div class="image-slide accessories">
                    <div class="image-number">2 / 6</div>
                    <img src="/473Project/assets/images/index/man-standing.jpg">
                </div>

                <div class="image-slide accessories">
                    <div class="image-number">3 / 6</div>
                    <img src="/473Project/assets/images/index/unisex.jpg">
                </div>

                <div class="image-slide accessories">
                    <div class="image-number">4 / 6</div>
                    <img src="/473Project/assets/images/index/woman-front.jpg">
                </div>

                <div class="image-slide accessories">
                    <div class="image-number">5 / 6</div>
                    <img src="/473Project/assets/images/index/clothing-shelf.jpg">
                </div>

                <div class="image-slide accessories">
                    <div class="image-number">6 / 6</div>
                    <img src="/473Project/assets/images/man-laying.jpg">
                </div>

                <a class="prev" onclick="plusSlidesAC(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesAC(1)">&#10095;</a>
            </div>
            
            <br>
            <button class="shopBTN" onclick="window.location.href='/473Project/website-files/mens-pages/Mens-Accessories.php';">Shop Mens Accessories</button>
            <br><br>

            <h2>Mens Shoes</h2>
            <!-- HTML for the Tops Slideshow -->
            <div class="slideshow-container">
                <div class="image-slide shoes">
                    <div class="image-number">1 / 6</div>
                    <img src="/473Project/assets/images/index/dancer2.jpg">
                </div>

                <div class="image-slide shoes">
                    <div class="image-number">2 / 6</div>
                    <img src="/473Project/assets/images/index/man-standing.jpg">
                </div>

                <div class="image-slide shoes">
                    <div class="image-number">3 / 6</div>
                    <img src="/473Project/assets/images/index/unisex.jpg">
                </div>

                <div class="image-slide shoes">
                    <div class="image-number">4 / 6</div>
                    <img src="/473Project/assets/images/index/woman-front.jpg">
                </div>

                <div class="image-slide shoes">
                    <div class="image-number">5 / 6</div>
                    <img src="/473Project/assets/images/index/clothing-shelf.jpg">
                </div>

                <div class="image-slide shoes">
                    <div class="image-number">6 / 6</div>
                    <img src="/473Project/assets/images/man-laying.jpg">
                </div>

                <a class="prev" onclick="plusSlidesSH(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesSH(1)">&#10095;</a>
            </div>
            
            <br>
            <button class="shopBTN" onclick="window.location.href='/473Project/website-files/mens-pages/Mens-Shoes.php';">Shop Mens Shoes</button>
            <br><br>

            <h2>Mens Swimwear</h2>
            <!-- HTML for the Tops Slideshow -->
            <div class="slideshow-container">
                <div class="image-slide swimwear">
                    <div class="image-number">1 / 6</div>
                    <img src="/473Project/assets/images/index/dancer2.jpg">
                </div>

                <div class="image-slide swimwear">
                    <div class="image-number">2 / 6</div>
                    <img src="/473Project/assets/images/index/man-standing.jpg">
                </div>

                <div class="image-slide swimwear">
                    <div class="image-number">3 / 6</div>
                    <img src="/473Project/assets/images/index/unisex.jpg">
                </div>

                <div class="image-slide swimwear">
                    <div class="image-number">4 / 6</div>
                    <img src="/473Project/assets/images/index/woman-front.jpg">
                </div>

                <div class="image-slide swimwear">
                    <div class="image-number">5 / 6</div>
                    <img src="/473Project/assets/images/index/clothing-shelf.jpg">
                </div>

                <div class="image-slide swimwear">
                    <div class="image-number">6 / 6</div>
                    <img src="/473Project/assets/images/man-laying.jpg">
                </div>

                <a class="prev" onclick="plusSlidesSW(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesSW(1)">&#10095;</a>
            </div>
            
            <br>
            <button class="shopBTN" onclick="window.location.href='/473Project/website-files/mens-pages/Mens-Swimwear.php';">Shop Mens Swimwear</button>
            <br><br>

        </div>

         <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
            <a href="/473Project/support-pages/About.php">About Us</a>
            <a href="/473Project/support-pages/Careers.php">Careers</a>
            <a href="/473Project/support-pages/FAQ.php">FAQ</a>
            <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
        </div>
        
        <script src="Mens.js"></script>
    </body>
</html>