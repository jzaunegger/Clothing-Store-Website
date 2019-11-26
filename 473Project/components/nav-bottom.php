<?php
    // Echo out the Navigation Bar at the top of the screen.
    // Made into a seperate file in order to minimize page sizes.

    // Retrieve and process current location
    $current_url = $_SERVER['REQUEST_URI'];
    $url_data = explode("/", $current_url);
    // $url_data[0] -- blank
    // $url_data[1] -- 473Project
    // $url_data[2] -- website-files, registration, or support-pages
    // $url_data[3] -- mens-pages, womens-pages, unisex-pages, or name of support page
    // $url_data[4] -- name of page

    echo("<div class='bottom-panel'>");
        echo("<a href='/473Project/support-pages/About.php'");
            if($url_data[3] == "About.php"){
                echo("class='bottomActive'");
            }
        echo(">About Us</a>");

        echo("<a href='/473Project/support-pages/Careers.php'");
            if($url_data[3] == "Careers.php"){
                echo("class='bottomActive'");
            }
        echo(">Careers</a>");

        echo("<a href='/473Project/support-pages/FAQ.php'");
            if($url_data[3] == "FAQ.php"){
                echo("class='bottomActive'");
            }
        echo(">FAQ</a>");

        echo("<a href='/473Project/support-pages/CustomerSupport.php'");
            if($url_data[3] == "CustomerSupport.php"){
                echo("class='bottomActive'");
            }
        echo(">About Us</a>");
    echo("</div>");
?>