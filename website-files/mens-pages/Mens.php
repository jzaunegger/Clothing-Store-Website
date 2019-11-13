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
            
            <h2>Featured Items</h2>

            <?php
                // Initalize Variables
                $search_sex = "Male";
                $counter = 0;  

                // Include ProductClass.php file to build product objects
                include $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/ProductClass.php";
                $products = [];

                // Check if the sort button was used.
                if(isset($_POST['mainSort'])){

                    // If sort option is set to New Arrivals, set flag to 1
                    if($_POST['mainSort'] == "New Arrivals"){
                        $sortFlag = 1;
                    }

                    // If sort option is set to A to Z, set flag to 2
                    if($_POST['mainSort'] == "A to Z"){
                        $sortFlag = 2;
                    }

                    // If sort option is set to Z to A, set flag to 3
                    if($_POST['mainSort'] == "Z to A"){
                        $sortFlag = 3;
                    }

                    // If sort option is set to Lowest Price, set flag to 4
                    if($_POST['mainSort'] == "Lowest Price"){
                        $sortFlag = 4;
                    }

                    // If sort option is set to Highest Price, set flag to 5
                    if($_POST['mainSort'] == "Highest Price"){
                        $sortFlag = 5;
                    }
                }
                else{
                    $sortFlag = 0;
                }

                // Include Connection File and Open a Connection
                include $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                // Construct sql statement and send query
                $sql = "SELECT productID, productName, price, dateAdded FROM products 
                    WHERE sex='$search_sex'";

                $data = $connection->query($sql);

                // Check if query failed, if so throw error
                if($data == null){
                     echo "Error: " . $sql  . "<br>" . $connection->error;
                }

                // Parse data from query response
                if($data->num_rows > 0){
                    while($data2 = $data->fetch_assoc()){

                        $productObject = new Product($data2['productID'], $data2['productName'], $data2['price'], $data2['dateAdded']);
                        $products[$counter] = $productObject;
                        
                        $counter = $counter + 1;
                    }
                }

                // Create functions for filtering options
                    // New Arrivals 
                    function sortNewArrivals($object1, $object2){
                        return $object1->dateAdded < $object2->dateAdded;
                    }

                    // A to Z
                    function sortATOZ($object1, $object2){
                        return $object1->name > $object2->name;
                    }

                    // Z to A
                    function sortZTOA($object1, $object2){
                        return $object1->name < $object2->name;
                    }

                    // Lowest Price
                    function sortLowestPrice($object1, $object2){
                        return $object1->price > $object2->price;
                    }

                    // Highest Price
                    function sortHighestPrice($object1, $object2){
                        return $object1->price < $object2->price;
                    }
                
            ?>

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

            <br>
            <h2>All Mens Clothes</h2>

            <div class="product-grid-header">
                <?php 
                    // No Sort
                    if($sortFlag == 0){
                        echo("Showing " .$counter . " results...");
                    }

                    // Sort By: New Arrivals
                    if($sortFlag == 1){
                        echo("Sorting by New Arrivals");
                        usort($products, 'sortNewArrivals');
                    }

                    // Sort By: A to Z
                    if($sortFlag == 2){
                        echo("Sorting products by name, A to Z");
                        usort($products, 'sortATOZ');
                    }

                    // Sort By: Z to A
                    if($sortFlag == 3){
                        echo("Sorting products by name, Z to A");
                        usort($products, 'sortZTOA');
                    }

                    // Sort By: Lowest Price
                    if($sortFlag == 4){
                        echo("Sorting by Lowest Price");
                        usort($products, 'sortLowestPrice');
                    }

                    // Sort By: Highest Price
                    if($sortFlag == 5){
                        echo("Sorting by Highest Price");
                        usort($products, 'sortHighestPrice');
                    }
                ?>

                <form action="/473Project/website-files/mens-pages/Mens.php" method="POST" id="sort-box">
                    Sort By:
                    <select class="sort-select-box" name="mainSort">
                        <option value="New Arrivals" <?php if($sortFlag == 1){ echo("selected='selected'"); }?> >New Arrivals</option>    
                        <option value="A to Z" <?php if($sortFlag == 2){ echo("selected='selected'"); }?>>A to Z</option>   
                        <option value="Z to A" <?php if($sortFlag == 3){ echo("selected='selected'"); }?>>Z to A</option>   
                        <option value="Lowest Price" <?php if($sortFlag == 4){ echo("selected='selected'"); }?>>Lowest Price</option>   
                        <option value="Highest Price" <?php if($sortFlag == 5){ echo("selected='selected'"); }?>>Highest Price</option>   
                    </select>

                    <input type="submit" value="Sort" class="sort-button">
               </form>

            </div>

            <div class="gender-homepage-product-grid">
                <?php 
                    // Iterate through the products
                    for($i=0; $i<$counter; $i++){
                        echo("<div class='product-container'>");
                        $currentID = $products[$i]->id;

                        // Load the Images
                            $sql2 = "SELECT imageLink1, imageLink2, imageLink3, imageLink4, imageLink5, imageLink6 FROM images WHERE productID='$currentID'";
                            $data3 = $connection->query($sql2);

                            // Check if query failed, if so throw error
                            if($data3 == null){
                                echo "Error: " . $sql  . "<br>" . $connection->error;
                            }

                            // Parse data from query response
                            if($data3->num_rows > 0){
                                while($data4 = $data3->fetch_assoc()){
                                    $imagePath1 = $data4['imageLink1'];
                                    $imagePath2 = $data4['imageLink2'];
                                    $imagePath3 = $data4['imageLink3'];
                                    $imagePath4 = $data4['imageLink4'];
                                    $imagePath5 = $data4['imageLink5'];
                                    $imagePath6 = $data4['imageLink6'];
                                }
                            }       

                             // Check if the paths are null
                            if($imagePath1 != null){
                                echo("<img src='" . $imagePath1 . "'>");
                            }
                            elseif($imagePath2 != null){
                                echo("<img src='" . $imagePath2 . "'>");
                            }
                            elseif($imagePath3 != null){
                                echo("<img src='" . $imagePath3 . "'>");
                            }
                            elseif($imagePath4 != null){
                                echo("<img src='" . $imagePath4 . "'>");
                            }
                            elseif($imagePath5 != null){
                                echo("<img src='" . $imagePath5 . "'>");
                            }
                            elseif($imagePath6 != null){
                                echo("<img src='" . $imagePath6 . "'>");
                            }
                            else{
                                // Echo Image not found if the image could not be loaded.
                                echo("img src='/473Project/assets/images/ImageNotFound.jpg'>");
                            }
                            // Display the product details
                            echo("<span class='product-name'>");
                            $products[$i]->showProductName();
                            echo("</span> <br>");

                            echo("<span class='product-price'>$");
                            $products[$i]->showProductPrice();
                            echo("</span> </div>");
                    }

                    //Close the connection.
                    CloseConnection($connection);  
                ?>

            </div>
            <br>

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