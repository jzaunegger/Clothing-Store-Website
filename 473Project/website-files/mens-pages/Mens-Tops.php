<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mens Tops</title>

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

        <!------------------------------------------------ Page Contents ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Men's Tops</h1>
            <hr> <br>

            <!----- HTML for the Filter Box off to the left ----->
            <div class="product-page">
                <div class="filter-box">
                <form action="Mens-Tops.php" method="GET">
                    Sort By 
                    <select id="filterSelectBox" name="filter-select-box">
                        <option>New Arrivals</option>
                        <option>A to Z</option>
                        <option>Z to A</option>
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                    </select>
                    <br>
            

                    <!--- product-grid.js pulls data from Products.json to update filter parameter options. -->
                    <hr>
                    Subategory <br>
                    <ul id="subcategories"></ul>

                    <hr>
                    Sizes <br>
                    <ul id="subcategory-sizes"></ul>

                    <hr>
                    <input type="submit" value="Filter Products" class="filter-button">
                </form>
                </div>

                

                <!----- HTML for the product grid to the right ----->
                <div class="products-container">

                    <?php
                        // Load products from the database.
                        ///////////////////////////////////////////////

                        // Initalize Variables
                        $search_sex = "Male";
                        $search_category = "Tops";
                        $counter = 0;

                        $subcatString = "";
                        $sizesString = "";

                        $ids = [];
                        $names = [];
                        $prices = [];

                        // Pull variables from Product Filter Form
                        if (isset($_GET['filter-select-box'])) {
                            $filterBox = $_GET['filter-select-box'];
                        }

                        if(isset($_GET['subcategory-box'])){
                            $subcategories = $_GET['subcategory-box'];
                            $subcats = [];

                            // Iterate through the subcategories
                            $N = count($subcategories);

                            if($N > 0){
                                for($i=0; $i < $N; $i++){
                                    array_push($subcats, $subcategories[$i]);

                                    if($i==0){
                                        $subcatString = $subcatString . $subcategories[$i];
                                    }
                                    else{
                                        $subcatString = $subcatString . ", " . $subcategories[$i];
                                    }
                               }
                            }

                            
                        }

                        if(isset($_GET['size-box'])){
                            $sizes = $_GET['size-box'];

                            // Iterate through the subcategories
                            $R= count($sizes);

                            if($R > 0){
                                for($i=0; $i < $R; $i++){
                                    if($i==0){
                                        $sizesString = $sizesString . $sizes[$i];
                                    }
                                    else{
                                        $sizesString = $sizesString . ", " . $sizes[$i];
                                    }
                               }
                            }
                        }

                        // Include Connection File and Open a Connection
                        $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                        include $connectionFile;
                        $connection = OpenConnection();

                        // If connection fails throw error.
                        if(!$connection){
                            echo "Connection failed: " . mysqli_connect_error();
                        }

                        // Construct sql statement and send query
                        $sql = "SELECT productID, productName, price FROM products 
                            WHERE sex='$search_sex' AND category='$search_category'";

                        // Check if subcategories are set 
                        if(isset($subcats)){
                            $subcatCount = count($subcats);

                            for($X=0; $X < $subcatCount; $X++){
                                if($X==0){
                                    $sql = $sql . " AND subcategory='" . $subcats[$X] . "'";
                                }
                                else{
                                    $sql = $sql . " OR subcategory='" . $subcats[$X] . "'";
                                }
                            }

                        }

                        $data = $connection->query($sql);

                        // Check if query failed, if so throw error
                        if($data == null){
                            echo "Error: " . $sql  . "<br>" . $connection->error;
                        }

                        // Parse data from query response
                        if($data->num_rows > 0){
                            while($data2 = $data->fetch_assoc()){
                                $ids[$counter] = $data2['productID'];
                                $names[$counter] = $data2['productName'];
                                $prices[$counter] = $data2['price'];

                                $counter = $counter + 1;
                            }
                        }

                        // Echo product data onto page
                        if(isset($filterBox)){

                            echo("<span class='filter-name'>Filtering by " . $filterBox);
                            if($subcatString != ""){
                                echo(", " . $subcatString);
                            }

                            if($sizesString != ""){
                                echo(", " . $sizesString);
                            }

                            echo("</span>");
                        }
                        // No filters are set
                        else{
                            echo("<span class='filter-name'>All Mens Tops</span>");
                        }
                        // Display number of results
                        echo("<span class='numProductResults'> Displaying ". $counter. " results...</span>");
                        if($counter == 0){
                            echo("
                                    <div class='no-results-box'>
                                        <h1> Sorry, there were no results found. </h1>
                                    </div>
                            ");
                        }

                        else{

                        }


                        for($i =0; $i<$counter; $i++){
                            echo("
                            <div class='product'>
                                <img src='");

                                $currentID = $ids[$i];

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
                                    echo($imagePath1);
                                }
                                elseif($imagePath2 != null){
                                    echo($imagePath2);
                                }
                                elseif($imagePath3 != null){
                                    echo($imagePath3);
                                }
                                elseif($imagePath4 != null){
                                    echo($imagePath4);
                                }
                                elseif($imagePath5 != null){
                                    echo($imagePath5);
                                }
                                elseif($imagePath6 != null){
                                    echo($imagePath6);
                                }
                                else{
                                    // Echo Image not found if the image could not be loaded.
                                    echo("/473Project/assets/images/ImageNotFound.jpg");
                                }

                            echo("' onclick='showPopup( ". $ids[$i] . " );'>
                                <div class='product-details'>
                                    <label class='product-name'>". $names[$i] ."</label> <br>
                                    <label class='product-price'>$". number_format($prices[$i], 2) ."</label> <br>
                                </div>
                            </div>
                        ");
                        }

                        //Close the connection.
                        CloseConnection($connection);  
                    ?>
                </div>
            </div>

        </div>

        <!-- HTML for the Popup Modal to view products -->
        <div class="popup-container-bg" id="popup-container-bg">
            <div class="popup-container">
                <div class="popup-header">
                    <span class="popup-product-name" id="popup-product-name"></span>
                    <span class="popup-close-button" id="popup-close-button" onclick="closePopup();"> <i class="fas fa-times"></i> </span>
                </div>

                <div class="popup-images">
                    <img class="popup-image" id="image1" src="">
                    <img class="popup-image" id="image2" src="">
                    <img class="popup-image" id="image3" src="">
                    <img class="popup-image" id="image4" src="">
                    <img class="popup-image" id="image5" src="">
                    <img class="popup-image" id="image6" src="">
                </div>

                <div class="popup-details">
                    <div class="popup-details-left">
                        <label class="detail">Product Description:</label>  <label id="productDescription"></label> <br><br>
                        <label class="detail">Sex:</label>                  <label id="productSex"></label> <br><br>
                        <label class="detail">Category:</label>             <label id="productCategory"></label> <br><br>
                        <label class="detail">Subcategory:</label>          <label id="productSubcategory"></label> <br><br>
                    </div>

                    <div class="popup-details-right">
                        <label class="detail">Price</label>                 <label id="productPrice"></label> <br><br>
                        <label class="detail">Quantity </label><br>         <label id="quantity"></label>
                        <input type="number" min="0" step="1" max="100" placeholder="0" class="popup-input"><br><br>

                        <label class="detail">Size </label><br>


                        <select class="detail-sizebox" id="detailSizebox">
                            
                        </select> 
                    </div>
                </div>

                <div class="popup-buttons">
                    <button class="popup-button" id="likeProduct">Like This Item <i class="fas fa-heart"></i></button>
                    <button class="popup-button" id="addToWishlist">Add To Wishlist <i class="fas fa-star"></i></button>
                    <button class="popup-button" id="addToCart">Add To Cart</button>
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

        <script src="/473Project/website-files/product-grid.js"></script>
        <script src="/473Project/website-files/mens-pages/popup.js"></script>
    </body>
</html>