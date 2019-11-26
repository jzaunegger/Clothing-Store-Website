<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Update Summary </title>

        <link rel="stylesheet" href="/473Project/admin-files/adminPages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <?php 
            // Pull data from Add Product.html
            $productIndex = $_POST["ProductIndex"];
            $productName = $_POST["ProductName"];
            $productDesc = $_POST["ProductDesc"];
            $productPrice = $_POST["ProductPrice"];
            $sex = $_POST["Sex"];
            $category = $_POST["Category"];
            $subCategory = $_POST["SubCategory"];

            $serverRoot = $_SERVER['DOCUMENT_ROOT'];

            // Check if links are empty, if one is empty or not a valid path set it to null 

            // Link 1 /////////////////////////////////////////////
            $imgLink1 = $_POST["imgLink1"];

            if($imgLink1 == ""){
                $imgLink1 == null;
            }

            if(file_exists($serverRoot.$imgLink1) == false){
                $imgLink1 = null;
            }

            // Link 2 /////////////////////////////////////////////
            $imgLink2 = $_POST["imgLink2"];

            if($imgLink2 == ""){
                $imgLink2 == null;
            }

            if(file_exists($serverRoot.$imgLink2) == false){
                $imgLink2 = null;
            }
        
            // Link 3 /////////////////////////////////////////////
            $imgLink3 = $_POST["imgLink3"];

            if($imgLink3 == ""){
                $imgLink3 == null;
            }

            if(file_exists($serverRoot.$imgLink3) == false){
                $imgLink3 = null;
            }
        
            // Link 4 /////////////////////////////////////////////
            $imgLink4 = $_POST["imgLink4"];

            if($imgLink4 == ""){
                $imgLink4 == null;
            }

            if(file_exists($serverRoot.$imgLink4) == false){
                $imgLink4 = null;
            }
        
            // Link 5 /////////////////////////////////////////////
            $imgLink5 = $_POST["imgLink5"];

            if($imgLink5 == ""){
                $imgLink5 == null;
            }

            if(file_exists($serverRoot.$imgLink5) == false){
                $imgLink5 = null;
            }
        
            // Link 6 /////////////////////////////////////////////
            $imgLink6 = $_POST["imgLink6"];

            if($imgLink6 == ""){
                $imgLink6 == null;
            }

            if(file_exists($serverRoot.$imgLink6) == false){
                $imgLink6 = null;
            }

            // Calculate Date and Time
            $date = date("Y/m/d");
            $time = date("h:i:s");

            // Include Connection File and Open a connection.
            $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
            include $connectionFile;
            $connection = OpenConnection();

            // If connection fails throw error.
            if(!$connection){
                echo "Connection failed: " . mysqli_connect_error();
            }

            // Create SQL Query
            $sql = "UPDATE Products SET productName='$productName', productDescription='$productDesc', sex='$sex', category='$category', subcategory='$subCategory', price='$productPrice', dateLastEdited='$date', timeLastEdited='$time' WHERE productID='$productIndex'";

            // Submit query, throw error if one occurs
            if($connection -> query($sql) === FALSE){
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

            // Submit Image Links to the DB
            $sql3 = "UPDATE images SET imageLink1='$imgLink1', imageLink2='$imgLink2', imageLink3='$imgLink3',
                    imageLink4='$imgLink4', imageLink5='$imgLink5', imageLink6='$imgLink6' WHERE productID='$productIndex'";

            // Submit query, throw error if one occurs
            if($connection -> query($sql3) === FALSE){
                echo "Error: " . $sql . "<br>" . $connection->error;
            } 

            //Close the connection.
            CloseConnection($connection);
        ?>

    <div class="formBlock">
        <span>Product Update Summary</span>
        <hr><br>

        <span> Product Index: <?=$productIndex;?> </span>
        <br><br>

        <span> Product Name: <?=$productName;?> </span>
        <br><br>

        <span> Product Description: <?=$productDesc;?> </span>
        <br><br>

        <span> Product Price: <?=$productPrice;?> </span> 
        <br><br>

        <span> Product Sex: <?=$sex;?> </span> 
        <br><br>

        <span> Product Category: <?=$category;?> </span> 
        <br><br>

        <span> Product Sub-Category: <?=$subCategory;?> </span> 
        <br><br>

        <span> Image Links </span>
        <hr>

        <span> Image Link 1: 
            <?php
                if($imgLink1 == NULL){
                    echo("This image link was left empty, so a no image was assigned.");
                }
                else{
                    echo($imgLink1);
                }
            ?>
        </span>
        <br><br>

        <span> Image Link 2:
            <?php
                if($imgLink2 == NULL){
                    echo("This image link was left empty, so a no image was assigned.");
                }
                else{
                    echo($imgLink2);
                }
            ?>
            
        </span>
        <br><br>

        <span> Image Link 3:
            <?php
                if($imgLink3 == NULL){
                    echo("This image link was left empty, so a no image was assigned.");
                }
                else{
                    echo($imgLink3);
                }
            ?>
        </span>
        <br><br>

        <span> Image Link 4: 
            <?php
                if($imgLink4 == NULL){
                    echo("This image link was left empty, so a no image was assigned.");
                }
                else{
                    echo($imgLink4);
                }
            ?>
        </span>
        <br><br>

        <span> Image Link 5: 
            <?php
                if($imgLink5 == NULL){
                    echo("This image link was left empty, so a no image was assigned.");
                }
                else{
                    echo($imgLink5);
                }
            ?>
        </span>
        <br><br>

        <span> Image Link 6:
            <?php
                if($imgLink6 == NULL){
                    echo("This image link was left empty, so a no image was assigned.");
                }
                else{
                    echo($imgLink6);
                }
            ?>
            
        </span>
        <br><br>

        <button onclick="returnToAdmin();" class="submitButton">Done</button>
        <button onclick="editAnotherProduct();" class="submitButton">Edit Another Product</button>
    </div>
    
    <script src="/473Project/admin-files/products/productLinks.js"></script>
    </body>
</html>