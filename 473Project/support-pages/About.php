<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sample TopNav Bar</title>

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
                    else{
                        echo("<li id='loginButton'> <a href='/473Project/registration/login/login.html'>Login / Sign Up</a> </li>");
                    }
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
            <h1 class="Page-Title">About Us</h1>
            <hr> <br>

            <h2>Our Mission</h2>

            <p>
                Our mission is to deliver quality products at great prices while providing excellent customer service. We aim to offer
                fast, no-hassle shipping to get you the clothes you want. We strive to provide fashionable clothing to people of all sizes.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
            </p>

            <br>

            <!----- Founder Boxes ----->
            <h2>Our Founders</h2>
            <div class="founder-container">
                <div class="founder">
                    <h3>Joe Schmoe</h3>
                    <img src="/473Project/assets/images/support/man1.png">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                    </p>
                </div>

                <div class="founder">
                    <h3>Jane Smith</h3>
                    <img src="/473Project/assets/images/support/woman3.png">
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                    </p>
                </div>

                <div class="founder">
                    <h3>John Doe</h3>
                    <img src="/473Project/assets/images/support/man2.png">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                    </p>
                </div>
            </div>
            <br><br>

        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
            <a href="/473Project/support-pages/About.php" class="bottomActive">About Us</a>
            <a href="/473Project/support-pages/Careers.php">Careers</a>
            <a href="/473Project/support-pages/FAQ.php">FAQ</a>
            <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
        </div>
    </body>
</html>