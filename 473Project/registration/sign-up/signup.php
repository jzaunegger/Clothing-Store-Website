<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/login-signup.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <?php 
            // Pull variables from associated html file.
            $username = $_POST["username"];

            // Set firstname to none if it was left empty
            $firstName = $_POST["firstName"];

            if($firstName == ""){
                $firstName = "none";
            }

            // Set lastname to none if it was left empty
            $lastName = $_POST["lastName"];

            if($lastName == ""){
                $lastName = "none";
            }
            $emailAddress = $_POST["emailAddress"];

            // Format the area code
            $areaCode = $_POST["areaCode"];
            $phone1 = $_POST["phone1"];
            $phone2 = $_POST["phone2"];

            $fullPhoneNum = $areaCode . $phone1 . $phone2;

            // Check if phone number is empty
            if($areaCode == "" or $phone1 == "" or $phone2 == ""){
                $fullPhoneNum = "none";
            }
            
            // Get the time and date
            $date = date("Y/m/d");
            $time = date("h:i:s");

            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];

            if($password1 == $password2){

                // Hash the password
                $hash = password_hash($password1, PASSWORD_BCRYPT);

                // Include Connection File and Open a connection.
                $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                include $connectionFile;
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                // Create Query
                $sql = "INSERT INTO users (username, pass, firstName, lastName, email, phoneNumber, dateAdded, timeAdded, dateLastEdited, timeLastEdited)
                            VALUES(' $username', '$hash', '$firstName', '$lastName', '$emailAddress', '$fullPhoneNum', '$date', '$time', '$date', '$time')";

        ?>

         <!----------------------------------- Nav Bar ----------------------------------->
       <ul>
            <!-- Logo that links to the index page -->
            <li>
                 <img src="/473Project/assets/images/ZAS.png" class="logo" onclick="window.location.href='/473Project/website-files/index-page/index.html'">
             </li>
    
             <!-- Mens Nav Selection -->
             <li class="dropdown">
                  <a href="/473Project/website-files/mens-pages/Mens.html" class="dropbtn">Men's</a> 
                     <div class="dropdown-content">
                         <a href="/473Project/website-files/mens-pages/Mens-Tops.html">Tops</a>
                         <a href="/473Project/website-files/mens-pages/Mens-Bottoms.html">Bottoms</a>
                         <a href="/473Project/website-files/mens-pages/Mens-Accessories.html">Accessories</a>
                         <a href="/473Project/website-files/mens-pages/Mens-Shoes.html">Shoes</a>
                         <a href="/473Project/website-files/mens-pages/Mens-Swimwear.html">Swimwear</a>
                     </div>
             </li>
    
    
             <!-- Womens Nav Selection -->
             <li class="dropdown">
                  <a href="/473Project/website-files/womens-pages/Womens.html" class="dropbtn">Women's</a>
                     <div class="dropdown-content">
                         <a href="/473Project/website-files/womens-pages/Womens-Tops.html">Tops</a>
                         <a href="/473Project/website-files/womens-pages/Womens-Bottoms.html">Bottoms</a>
                         <a href="/473Project/website-files/womens-pages/Womens-Accessories.html">Accessories</a>
                         <a href="/473Project/website-files/womens-pages/Womens-Shoes.html">Shoes</a>
                         <a href="/473Project/website-files/womens-pages/Womens-Swimwear.html">Swimwear</a>
                     </div>
             </li>
    
             <!-- Unisex Nav Selection -->
             <li class="dropdown">
                  <a href="/473Project/website-files/unisex-pages/Unisex.html" class="dropbtn">Unisex</a>
                     <div class="dropdown-content">
                         <a href="/473Project/website-files/unisex-pages/Unisex-Tops.html">Tops</a>
                         <a href="/473Project/website-files/unisex-pages/Unisex-Bottoms.html">Bottoms</a>
                         <a href="/473Project/website-files/unisex-pages/Unisex-Accessories.html">Accessories</a>
                         <a href="/473Project/website-files/unisex-pages/Unisex-Shoes.html">Shoes</a>
                         <a href="/473Project/website-files/unisex-pages/Unisex-Swimwear.html">Swimwear</a>
                     </div>
             </li>
    
    
             <li id="cartButton"> <a href="#"> <i class="fas fa-shopping-cart"></i> </a> </li>
             <li id="loginButton" class="active"> <a href="/473Project/registration/login/login.html">Login / Sign Up</a> </li>
             <li id="searchContainer"> 
                 <form action="search.php" method="POST">
                     <input type="text" placeholder="Search.." size="30" id="searchBar">
                     <button type="submit" id="searchIcon"> <i class="fa fa-search"></i> </button>
                 </form>
              </li>
         </ul>
        <!------------------------------------------------- Signup Box --------------------------------------------------->

        <div class="Page-Content">

            <div class="SignUp-Post">

                <?php 
                        // Check if the account could be created.
                        if($connection -> query($sql) === TRUE){
                            echo("<h1> Thank you, " .  $username . " for signing up! </h1>");
                            echo("<p> We will be sending a confirmation email to " . $emailAddress . " to verify that your account was set up.
                                  You can now login to the website. Please be sure to update your security questions and answers as soon as you login.
                                </p>");
                        }
                        else{
                            echo("<h1> Sorry but your account could not be created at this time. </h1>");
                        }

                        // Close the Connection
                        CloseConnection($connection);
                    }
                ?>

            </div>
        </div>

    </body>
</html>