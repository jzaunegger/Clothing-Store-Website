<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Your Password</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
        <script src="updatePassword.js"> </script>
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
                          </p>");
                        
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


            <h1 class="Page-Title">Change Your Password</h1>
            <hr> <br>

            <?php 
                // Get Variables from updatePassword.php
                $currentPass = $_POST["currentPass"];
                $newPass1 = $_POST["newPass1"];
                $newPass2 = $_POST["newPass1"];

                // Check inputs are not empty
                if($currentPass == ""){
                    echo("<p> Sorry but your password could not be changed at this time. Please try again later.</p>");
                    return;
                }

                if($newPass1 == ""){
                    echo("<p> Sorry but your password could not be changed at this time. Please try again later.</p>");
                    return;
                }

                if($newPass2 == ""){
                    echo("<p> Sorry but your password could not be changed at this time. Please try again later.</p>");
                    return;
                }

                // Get current password, and userID from session
                $sessionPass = $_SESSION['userPass'];
                $userID = $_SESSION['userID'];

                // Verify the current password matches
                if(password_verify($currentPass, $sessionPass)){
                    // Check if the new passwords match
                    if($newPass1 != $newPass2){
                        echo("<p> Sorry but your password could not be changed at this time. Please try again later.</p>");
                        echo("Error: Password Mismatch");
                        return;
                    }

                    // Submit change to the database
                    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                    include $connectionFile;
                    $connection = OpenConnection();

                    // If connection fails throw error.
                    if(!$connection){
                        echo("<p> Sorry but your password could not be changed at this time. Please try again later.</p>");
                        CloseConnection($connection);
                        return;
                    }

                    // Hash the password
                    $hashedPassword = password_hash($newPass1, PASSWORD_BCRYPT);

                    // Get date and time
                    $date = date("Y/m/d");
                    $time = date("h:i:s");

                    // Create SQL Query
                    $sql = "UPDATE users SET pass='$hashedPassword', dateLastEdited='$date', timeLastEdited='$time' WHERE userID='$userID'";

                    // Submit query, throw error if one occurs
                    if($connection -> query($sql) === TRUE){
                        echo("<p> Your password has been sucessfully updated.</p>");
                        echo("Password was set to: " . $newPass1);
                    } 
                    if($connection -> query($sql) === FALSE){
                        echo("<p> Sorry but your password could not be changed at this time. Please try again later.</p>");
                        CloseConnection($connection);
                        return;
                    }

                    //Close the connection.
                    CloseConnection($connection);
                }
            
            ?>
      
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