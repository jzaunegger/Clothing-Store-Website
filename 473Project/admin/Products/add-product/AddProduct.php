<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product </title>

        <link rel="stylesheet" href="/473Project/admin-files/adminPages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
    <?php 
        // Pull data from Add Product.html
        $productName = $_POST["ProductName"];
        $productDesc = $_POST["ProductDesc"];
        $productPrice = $_POST["ProductPrice"];
        $sex = $_POST["Sex"];
        $category = $_POST["Category"];
        $subCategory = $_POST["SubCategory"];

        // Initalize Variables
        $serverRoot = $_SERVER['DOCUMENT_ROOT'];

        // Pull the Sizes from AddProduct.html
        $sizeXS = $_POST["sizeXS"];
        if($sizeXS == ""){
            $sizeXS = null;
        }

        $sizeS = $_POST["sizeS"];
        if($sizeS == ""){
            $sizeS = null;
        }

        $sizeM = $_POST["sizeM"];
        if($sizeM == ""){
            $sizeM = null;
        }

        $sizeL = $_POST["sizeL"];
        if($sizeL == ""){
            $sizeL = null;
        }

        $sizeXL = $_POST["sizeXL"];
        if($sizeXL == ""){
            $sizeXL = null;
        }

        $sizeXXL = $_POST["sizeXXL"];
        if($sizeXXL == ""){
            $sizeXXL = null;
        }

        $size3XL = $_POST["sizeXL"];
        if($size3XL == ""){
            $size3XL = null;
        }

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


        // Create product in DB
        /////////////////////////////

        // Create SQL Query
        $sql = " INSERT INTO Products (productName, productDescription, sex, category, subcategory, price, dateAdded, timeAdded, dateLastEdited, timeLastEdited)
                 VALUES(' $productName', '$productDesc', '$sex', '$category', '$subCategory', '$productPrice', '$date', '$time', '$date', '$time')";

        // Submit query, throw error if one occurs
        if($connection -> query($sql) === FALSE){
            echo "Error: " . $sql . "<br>" . $connection->error;
        } 

        // Get productID from DB
        /////////////////////////////
        $sql2 = "SELECT productID, productName, productDescription, sex, category FROM products";
        $data = $connection->query($sql2);

        $counter = 0;
        $responseIDs = [];
        $responseNames = [];
        $responseDescriptions = [];
        $responseSexes = [];
        $responseCategories = [];

        if($data->num_rows >0){
            while($row = $data->fetch_assoc()){
                $responseIDs[$counter] = $row['productID'];
                $responseNames[$counter] = $row['productName'];
                $responseDescriptions[$counter] = $row['productDescription'];
                $responseSexes[$counter] = $row['sex'];
                $responseCategories[$counter] = $row['category'];

                $counter = $counter + 1;
            }
        }

        $productID = NULL;

        // Parse the results to find the productID of the product just submitted
        for($i=0; $i<$counter; $i++){
            // Check if sexes match
            if($responseSexes[$i] == $sex){
                // Check if categories match
                if($responseCategories[$i] == $category){

                    // Check if name matches
                    if($responseDescriptions[$i] == $productDesc){
                        $productID = $responseIDs[$i];
                    }
                }
            }
        }

        // Submit Image Links to the DB
        $sql3 = "INSERT INTO images(productID, imageLink1, imageLink2, imageLink3, imageLink4, imageLink5, imageLink6)
                 VALUES('$productID', '$imgLink1', '$imgLink2', '$imgLink3', '$imgLink4', '$imgLink5', '$imgLink6')";

        // Submit query, throw error if one occurs
        if($connection -> query($sql3) === FALSE){
            echo "Error: " . $sql . "<br>" . $connection->error;
        } 

        // Submit the Sizes to the DB
        if($category == "Tops"){
            $sql4 = "INSERT INTO shirtSizes(productID, xsmallQty, smallQty, mediumQty, largeQty, xlargeQty, xxlargeQty, 3xlQty)
                     VALUES('$productID', '$sizeXS', '$sizeS', '$sizeM', '$sizeL', '$sizeXL', '$sizeXXL', '$size3XL')";
        }
        
        // Submit query, throw error if one occurs
         if($connection -> query($sql4) === FALSE){
            echo "Error: " . $sql . "<br>" . $connection->error;
        } 



        //Close the connection.
        CloseConnection($connection);
    ?>

    <div class="formBlock">
        <!--------------- General Summary --------------->
        <span>Upload Summary</span>
        <hr><br>

        <span> Product ID: <?=$productID;?> 
        <br><br>

        <span> Product Name: <?=$productName;?> 
        <br><br>

        <span> Product Description: <?=$productDesc;?> 
        <br><br>

        <span> Product Sex: <?=$sex;?> 
        <br><br>

        <span> Product Price: <?=$productPrice;?> 
        <br><br>

        <span> Product Category: <?=$category;?> </span> 
        <br><br>

        <span> Product Sub-Category: <?=$subCategory;?> </span> 
        <br><br><br><br>

        <!--------------- Product Quantities --------------->
        <span> Product Quantities: </span>
        <hr>

        <span> XS:
            <?php 
                if($sizeXS == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($sizeXS);
                }
            ?>
        </span> 
        <br><br>

        <span> S: 
            <?php 
                if($sizeS == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($sizeS);
                }
            ?>
        </span> 
        <br><br>

        <span> M: 
            <?php 
                if($sizeM == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($sizeM);
                }
            ?>
        </span> 
        <br><br>

        <span> L:
            <?php 
                if($sizeL == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($sizeL);
                }
            ?>
        </span> 
        <br><br>

        <span> XL: 
            <?php 
                if($sizeXL == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($sizeXL);
                }
            ?>
        </span> 
        <br><br>

        <span> XXL: 
            <?php 
                if($sizeXXL == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($sizeXXL);
                }
            ?>
        </span> 
        <br><br>

        <span> 3XL: 
            <?php 
                if($size3XL == null){
                    echo("The field was left empty so a value of 0 was assumed.");
                } 
                else{
                    echo($size3XL);
                }
            ?>
        </span> 
        <br><br>


        <br><br><br><br>
        <!--------------- Image Links --------------->
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
        <button onclick="addAnotherProduct();" class="submitButton">Add Another Product</button>

    </div>
    
    <script src="/473Project/admin/admin.js"></script>
    </body>
</html>