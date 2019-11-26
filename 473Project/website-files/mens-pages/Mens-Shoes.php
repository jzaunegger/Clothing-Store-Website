<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mens Shoes</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------ Page Contents ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Men's Shoes</h1>

            <?php
                // Initalize Variables
                $search_sex = "Male";
                $search_category = "Shoes";
                $counter = 0;


                // Include ProductClass.php file to build product objects
                include $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/ProductClass.php";
                $products = [];

                // Check subcategory filter 
                if(isset($_POST['subcatFilter'])){
                    $search_subcat = $_POST['subcatFilter'];
                }
                else{
                    $search_subcat = "All";
                }

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
                    WHERE sex='$search_sex' AND category='$search_category'";

                if($search_subcat != "All"){
                    $filter_string = "AND subcategory='". $search_subcat ."'";
                    $sql = $sql . $filter_string;
                }

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
            
            ?>

            <div class="product-grid-header">
                <?php 
                    // No Sort
                    if($sortFlag == 0){
                        if($search_subcat != "None"){
                            echo("Filtering by " . $search_subcat. " </br>");
                        }
                        echo("Showing " .$counter . " results...");
                    }

                    // Sort By: New Arrivals
                    if($sortFlag == 1){
                        if($search_subcat != "None"){
                            echo("Filtering by " . $search_subcat. " and ");
                        }
                        echo("Sorting by New Arrivals. </br>");
                        usort($products, 'sortNewArrivals');
                        echo("Showing " .$counter . " results...");
                    }

                    // Sort By: A to Z
                    if($sortFlag == 2){
                        if($search_subcat != "None"){
                            echo("Filtering by " . $search_subcat. " and ");
                        }
                        echo("Sorting products by name, A to Z. </br>");
                        usort($products, 'sortATOZ');
                        echo("Showing " .$counter . " results...");
                    }

                    // Sort By: Z to A
                    if($sortFlag == 3){
                        if($search_subcat != "None"){
                            echo("Filtering by " . $search_subcat. " and ");
                        }
                        echo("Sorting products by name, Z to A. </br>");
                        usort($products, 'sortZTOA');
                        echo("Showing " .$counter . " results...");
                    }

                    // Sort By: Lowest Price
                    if($sortFlag == 4){
                        if($search_subcat != "None"){
                            echo("Filtering by " . $search_subcat. " and ");
                        }
                        echo("Sorting by Lowest Price. </br>");
                        usort($products, 'sortLowestPrice');
                        echo("Showing " .$counter . " results...");
                    }

                    // Sort By: Highest Price
                    if($sortFlag == 5){
                        if($search_subcat != "None"){
                            echo("Filtering by " . $search_subcat. " and ");
                        }
                        echo("Sorting by Highest Price.  ");
                        usort($products, 'sortHighestPrice');
                        echo("Showing " .$counter . " results...");
                    }
                ?>

                <form action="/473Project/website-files/mens-pages/Mens-Tops.php" method="POST" id="sort-box">
                    Filter Subcategory:
                    <select class="sort-select-box" name="subcatFilter" id="subcategoryFilter">
                        <?php
                            // Retrieve products.json and determine the subcategory data
                            $json_file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/products.json");
                            $json_data = json_decode($json_file, true);
                            
                            $subcat_len = count($json_data["categories"][strtolower($search_category)]["subcategoryNames"]);
                            for($x = 0; $x<$subcat_len; $x++){
                                $current_subcat = $json_data["categories"][strtolower($search_category)]["subcategoryNames"][$x];

                                if($search_subcat == $current_subcat){
                                    echo("<option value='" . $current_subcat . "' selected='selected'>");
                                    echo($current_subcat . "</option>");
                                }
                                else{
                                    echo("<option value='" . $current_subcat) . "'>";
                                    echo($current_subcat . "</option>");
                                }
                            }
                        ?>
                    </select>

                    Sort By:
                    <select class="sort-select-box" name="mainSort" id="mainSortSelect">
                        <option value="New Arrivals" <?php if($sortFlag == 1){ echo("selected='selected'"); }?> >New Arrivals</option>    
                        <option value="A to Z" <?php if($sortFlag == 2){ echo("selected='selected'"); }?>>A to Z</option>   
                        <option value="Z to A" <?php if($sortFlag == 3){ echo("selected='selected'"); }?>>Z to A</option>   
                        <option value="Lowest Price" <?php if($sortFlag == 4){ echo("selected='selected'"); }?>>Lowest Price</option>   
                        <option value="Highest Price" <?php if($sortFlag == 5){ echo("selected='selected'"); }?>>Highest Price</option>   
                    </select>

                    <input type="submit" value="Sort" class="sort-button" id="sortButton">
               </form>

            </div>

            <div class="gender-homepage-product-grid">
                <?php 
                    if($counter == 0){
                        echo("
                                <p>
                                    We're sorry but there are currently no products that match your search criteria. Please try sorting or filtering
                                    for something else.
                                </p>
                            ");
                    }


                    // Iterate through the products
                    for($i=0; $i<$counter; $i++){
                        echo("<div class='product-container' onclick='showPopup(" . $products[$i]->id . ")'>");
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
                            
                            // Display the product details
                            echo("<span class='product-name'>");
                            $products[$i]->showProductName();
                            echo("</span> <br>");

                            echo("<span class='product-price'>$");
                            $products[$i]->showProductPrice();
                            echo("</span> </div>");
                    }
                ?>

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
                        <label class="detail">Product Description:</label><br>
                         <label id="productDescription"></label> <br><br>

                        <label class="detail">Sex:</label><br>                  
                        <label id="productSex"></label> <br><br>

                        <label class="detail">Category:</label><br>             
                        <label id="productCategory"></label> <br><br>
                    </div>

                    <div class="popup-details-right">
                        <label class="detail">Price</label><br>                 
                        <label id="productPrice"></label> <br><br>

                        <label class="detail">Quantity </label><br>         
                        <label id="quantity"></label>

                        <input type="number" id="quantityInput" min="0" step="1" max="100" placeholder="0" class="popup-input"><br><br>

                        <label class="detail">Size </label><br>
                        <select class="detail-sizebox" id="detailSizebox">
                            
                        </select> 
                    </div>
                </div>

                <div class="popup-buttons">
                    <span class="item-number" id="itemNumber">Item Number: #</span>
                    <span id="errorBox"></span>
                    <button class="popup-button" id="addToCart">Add To Cart</button>
                </div>
            </div>
        </div>


        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script type="text/javascript" src="/473Project/website-files/product-grid.js"></script>
        <script type="text/javascript" src="/473Project/website-files/popup.js"></script>
    </body>
</html>