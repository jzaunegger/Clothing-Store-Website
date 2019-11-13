<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Account</title>

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
                        echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php' class='active'> <i class='fas fa-user'></i> </a> </li>");
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
            <?php
                //Verify that account is logged in.
                if(empty($_SESSION["loggedIn"])){
                    echo ("<br><br>
                          <p> 
                            Good attempt, but you should not be able to see anything on this page because you are not signed in. If you would like to access 
                            your account, you should try logging in first. 
                          </p>
                          
                          <img src='/473Project/assets/images/not-today.jpg' class='meme'>
                          
                          ");
                        
                          echo("</div>");

                        echo('<div class="bottom-panel">
                                <a href="/473Project/support-pages/About.php" >About Us</a>
                                <a href="/473Project/support-pages/Careers.php">Careers</a>
                                <a href="/473Project/support-pages/FAQ.php">FAQ</a>
                                <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
                            </div>
                            ');
                    return;
                }
            ?>

            <h1 class="Page-Title">Welcome <?php echo($_SESSION["username"]);?></h1>
            <hr> <br>

            <div class="two-columns">
                <div class="left-col">
                    <h2>Account Information</h2>
                    <?php 
                    // Make SQL Query to pull user information
                     $userID =  $_SESSION["userID"];
                     $username = $_SESSION["username"];

                    // Include Connection File and Open a connection.
                    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                    include $connectionFile;
                    $connection = OpenConnection();

                    // If connection fails throw error.
                    if(!$connection){
                        echo ("<p>
                                Sorry your account information could not be loaded at the moment. Sorry for the incovience, please check back later
                                to see if things are working properly again.
                              </p>");
                    }

                    // Create and send query
                    $sql = "SELECT firstName, lastName, email, phoneNumber, dateAdded FROM users where userID='$userID'";
                    $result = $connection->query($sql);

                    // Parse Response
                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
                            echo("<span> Username: " . $username . "</span> <br><br>");
                            echo("<span> First Name: " . $row['firstName'] . "</span> <br><br>");
                            echo("<span> Last Name: " . $row['lastName'] . "</span> <br><br>");
                            echo("<span> Email: " . $row['email'] . "</span> <br><br>");
                            echo("<span> Phone Number: " . $row['phoneNumber'] . "</span> <br><br>");
                            echo("<span> Date Joined: " . $row['dateAdded'] . "</span> <br><br>");
                        }
                    }

                    //Close the connection.
                    CloseConnection($connection);
                ?>
                </div>

                <div class="right-col">
                    <h2>Account Security</h2>
                        <!-- Signout of the Website -->
                        <form action="signout.php" method="POST">
                            <input type="submit" class="secBTN" name="signoutBtn" value="Sign Out">
                        </form>
                        <br>

                        <!-- Set Security Questions -->
                        <form action="updateSecurity.php" method="POST">
                            <input type="submit" class="secBTN" name="signoutBtn" value="Update Security Questions">
                        </form>
                        <br>

                        <!-- Change your password -->
                        <form action="updatePassword.php" method="POST">
                            <input type="submit" class="secBTN" name="signoutBtn" value="Change Your Password">
                        </form>
                        <br>

                        <!-- Check if user is admin -->
                        <?php
                            $isAdmin = $_SESSION['isAdmin'];

                            if($isAdmin == 0){
                                echo("<button class='secBTN' onclick='window.location.href=`/473Project/admin-files/admin-page/admin.php`'>View Admin Tools</button>");
                            }
                        
                        ?>

                        
                </div>
            </div>                

            <h2>Order History</h2>
                <p>
                    Sorry but there is currently nothing here. When the cart system is up and running we will make this work.
                </p>
                <br><br>
            
            <h2>Products You Like</h2>
                <p>
                    Sorry but there is currently nothing here. When the like system is up and running we will make this work.
                </p>
                <br><br>

    
            <h2>Your Wishlist</h2>
                <p>
                    Sorry but there is currently nothing here. When the wish list is up and running we will make this work.
                </p>
                <br><br>
                
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
            <a href="/473Project/support-pages/About.php" >About Us</a>
            <a href="/473Project/support-pages/Careers.php">Careers</a>
            <a href="/473Project/support-pages/FAQ.php">FAQ</a>
            <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
        </div>
    </body>
</html>