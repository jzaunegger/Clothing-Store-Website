<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Logged In</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/login-signup.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
        <script src="login.js"></script>
    </head>

    <body>
        <!-------------------------------- Start Session -------------------------------->
        <?php 
            session_start();

            // Retrieve username and password
            $user = $_POST["username"];
            $user = substr_replace($user, " ", 0,  0);
            $pass = $_POST["password"];

            // Intialize Variables
            $responseID = null;
            $responseUsername= null;
            $responsePass  = null;
            $responseAdmin = null;
            $loggedIn = 0;


            // Include Connection File and Open a connection.
            $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
            include $connectionFile;
            $connection = OpenConnection();

            // If connection fails throw error.
            if(!$connection){
                echo ("<h1> Account Not Verified </h1>");
                echo ("<p>
                        Sorry your account could not be verified. Perhaps you have the wrong login, or need to reset your password.
                        If you need to reset your password please click here. If you need to create an account click here.
                      </p>");
            }

            // Create and send query
       
            $sql = "SELECT userID, username, pass, isAdmin FROM users where username='$user'";
            $result = $connection->query($sql);

            // Parse Response
            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    $responseID = $row['userID'];
                    $responseUsername = $row['username'];
                    $responsePass = $row['pass'];
                    $responseAdmin = $row['isAdmin'];
                }
            }

            //Close the connection.
            CloseConnection($connection);

            if(password_verify($pass, $responsePass)){
                $loggedIn = 1;
            }

            $_SESSION["userID"] = $responseID;
            $_SESSION["username"] = $responseUsername;
            $_SESSION["userPass"] = $responsePass;
            $_SESSION["isAdmin"] = $responseAdmin;
            $_SESSION["loggedIn"] = $loggedIn;
        ?>

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
                    $loginStatus = $_SESSION["loggedIn"];
     
                    if($loginStatus == 1){
                        echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php' class='active'> <i class='fas fa-user'></i> </a> </li>");
                    }
                    else{
                        echo("<li id='loginButton'> <a href='/473Project/registration/login/login.html'>Login / Sign Up</a> </li>");
                    }
                ?>
         <li id="searchContainer"> 
             <form action="search.php" method="POST">
                 <input type="text" placeholder="Search.." size="30" id="searchBar">
                 <button type="submit" id="searchIcon"> <i class="fa fa-search"></i> </button>
             </form>
          </li>
     </ul>
        <!------------------------------------------------- Login Post --------------------------------------------------->

        <div class="Page-Content">
            <div class="login-post">
                <div class="login-post-left">
                <?php
                    // Validate password
                    if($loggedIn == 1){
                        echo ("<h1> " . $user .  " you are now logged in.</h1>");
                        echo("<p>
                              Thank you for signing in! Now that you have logged in you can now add items to your cart, leave product reviews,
                              check the status of your order(s), update your billing or shipping information, change your password, or setup further 
                              security for your account. 
                              </p>");
                    }
                    else{
                        echo ("<h1>Account Not Verified</h1>");
                        echo ("<p>
                                Sorry your account could not be verified. Perhaps you have the wrong login, or need to reset your password.
                                If you need to reset your password please click here. If you need to create an account click here.
                              </p>");
                    }
                ?>
                </div>

                <div class="login-post-right">
                    <img src="/473Project/assets/images/mountain.jpg">
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
    </body>
</html>