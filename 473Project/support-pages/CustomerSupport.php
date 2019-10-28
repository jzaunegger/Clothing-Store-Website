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
            <h1 class="Page-Title">Customer Support</h1>
            <hr> <br>

            <h2>Contact Information</h2>
            <p>
                You can give our customer support line a call at (800)-111-1234. They can assist you with problems with your account, orders, or returns. 
                If you would perfer to give us an email instead you can reach us at customersupport@zasclothing.com, or fill out the form below.
            </p>
            <br>

            <div class="emailForm">
                <form>
                    <input type="email" name="returnEmail" class="emailInputItem" size="60" placeholder="Return Email Address">
                    <br><br>
                    <input type="text" name="subject" class="emailInputItem" size="60" placeholder="Subject">
                    <br><br>
                    <textarea class="emailTextArea" placeholder="Your message here...."></textarea>
                    <br><br>
                    <input type="submit" class="emailSendBTN" value="Send Email">
                    <br>
                </form>
            </div>
            <br>

            <h2>Returns</h2>
            <p>
                We get it sometimes you get something that doesn't fit right, or you just don't like the way you look in it. That's why our return policy lets you return
                something up to 90 days after recieving your stuff. As long as the clothes are not stained or torn in any way, you'll be good to go. You can start a return
                by filling out the form below, and we will send you a shipping label to attach to a package to send it back.  
            </p>

            <div class="returnForm">
                <form>
                    <input type="text" name="originalOrderNumber" class="returnInputItem" placeholder="Original Order Number">
                    <br><br>
                    <textarea class="returnTextArea" name="returnReason" placeholder="Reason for return..."></textarea>
                    <br><br>
                    <input type="submit" class="emailSendBTN" value="Submit Return">
                    <br>
                </form>
            </div>
            <br><br>
        
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
            <a href="/473Project/support-pages/About.php">About Us</a>
            <a href="/473Project/support-pages/Careers.php">Careers</a>
            <a href="/473Project/support-pages/FAQ.php">FAQ</a>
            <a href="/473Project/support-pages/CustomerSupport.php" class="bottomActive">Customer Support</a>
        </div>

    </body>
</html>