<?php
    // Echo out the Navigation Bar at the top of the screen.
    // Made into a seperate file in order to minimize page sizes.
    
    // Start Seession and check if user is logged in
    session_start();
    if(isset($_SESSION['loggedIn'])){
        $loginStatus = $_SESSION["loggedIn"];
    }
    else{
        $loginStatus = "none";
    }

    // Retrieve and process current location
    $current_url = $_SERVER['REQUEST_URI'];
    $url_data = explode("/", $current_url);
    // $url_data[0] -- blank
    // $url_data[1] -- 473Project
    // $url_data[2] -- website-files, registration, or support-pages
    // $url_data[3] -- mens-pages, womens-pages, unisex-pages, or name of support page
    // $url_data[4] -- name of page

    echo("<ul>");
        // Mens Nav Tab
        echo("<li class='dropdown'>");
            echo("<a href='/473Project/website-files/mens-pages/Mens.php'");

            // If Mens page is selected, set to active
            if($url_data[3] == "mens-pages"){
                echo("class='active'");
            }

            echo(">Men's</a> ");

                echo("<div class='dropdown-content'>");
                    echo("<a href='/473Project/website-files/mens-pages/Mens-Tops.php'>Tops</a>");
                    echo("<a href='/473Project/website-files/mens-pages/Mens-Bottoms.php'>Bottoms</a>");
                    echo("<a href='/473Project/website-files/mens-pages/Mens-Accessories.php'>Accessories</a>");
                    echo("<a href='/473Project/website-files/mens-pages/Mens-Shoes.php'>Shoes</a>");
                    echo("<a href='/473Project/website-files/mens-pages/Mens-Swimwear.php'>Swimwear</a>");
                echo("</div>");
        echo("</li>");


        // Womens Nav Tab
        echo("<li class='dropdown'>");
            echo("<a href='/473Project/website-files/womens-pages/Womens.php'");

            // If womens page is selected, set to active
            if($url_data[3] == "womens-pages"){
                echo("class='active'");
            }

            echo(">Women's</a> ");
                echo("<div class='dropdown-content'>");
                    echo("<a href='/473Project/website-files/womens-pages/Womens-Tops.php'>Tops</a>");
                    echo("<a href='/473Project/website-files/womens-pages/Womens-Bottoms.php'>Bottoms</a>");
                    echo("<a href='/473Project/website-files/womens-pages/Womens-Accessories.php'>Accessories</a>");
                    echo("<a href='/473Project/website-files/womens-pages/Womens-Shoes.php'>Shoes</a>");
                    echo("<a href='/473Project/website-files/womens-pages/Womens-Swimwear.php'>Swimwear</a>");
                echo("</div>");
        echo("</li>");

        // Cart Button
        echo("<li id='cartButton'> <a href='#'> <i class='fas fa-shopping-cart'></i> </a> </li>");

        // Login-Signup-Account Button
        if($loginStatus == 1){
            echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php' ");
            if($url_data[2] == 'registration'){
                echo("class='active'");
            }
            echo("> <i class='fas fa-user'></i> </a> </li>");
        }
        else{
            echo("<li id='loginButton'> <a href='/473Project/registration/login/login.php'");
            if($url_data[2] == 'registration'){
                echo("class='active'");
            }
            echo(">Login / Sign Up</a> </li>");
        }

        // Website Search
        echo("<form action='/473Project/website-files/search.php' method='POST'>");
            echo("<li id='searchIconBlock'>");
            echo("<button type='submit' id='searchIcon'><i class='fas fa-search'></i></button>");
            echo("</li>");

            echo("<li id='searchBarBlock'>");
            echo("<input type='text' id='searchBar' name='searchbar' placeholder='Search...' size='30'>");
            echo("</li>");
      
        echo("</form>");

    echo("</ul>");
?>