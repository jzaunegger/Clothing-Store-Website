<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Product</title>

        <link rel="stylesheet" href="/473Project/admin-files/adminPages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>
    
    <body>
        <div class="formBlock">
            <?php
                // Pull productID from EditProduct.php
                $productID = $_POST["product"];
            ?>
                <span>The product selected for update is: </span>
                <span id="productNameHeader"> </span>
                (<span id="productID"><?php echo $productID; ?></span>)
                <i class="fas fa-times closeButton" onclick="returnToAdmin();"></i>
                <hr><br>

                <form action="SubmitProductUpdate.php" method="POST">
                <!-- Sets up the two-column layout -->
                <div class="base">
                    <!-- Left Column of Form-->
                    <div class="col left">
                            Product ID<br>
                            <input type="text" class="formBlockElement" name="ProductIndex" id="productIndex" placeholder="Product Index Here" readonly="readonly">
                            <br><br>

                            Product Name <br>
                            <input type="text" class="formBlockElement" id="productName" name="ProductName" size="50" placeholder="Product Name..." onchange="validateForm();">
                            <br><br>

                            Description <br>
                            <textarea rows="15" cols="40" class="formBlockElement" id="productDescription" name="ProductDesc" placeholder="Item Description..." onchange="validateForm();">
                            </textarea>
                            <br><br>

                            Price <br>
                            <input type="number" class="formBlockElement" id="price" name="ProductPrice" min="0" step=".01" placeholder="$10.00" onchange="validateForm();">
                            <br><br>
    
                            Sex<br>
                            <input type="radio" name="Sex" value="Male"   id="sexMen"    onchange="validateForm();"> Male<br>
                            <input type="radio" name="Sex" value="Female" id="sexWomen"  onchange="validateForm();"> Female<br>
                            <input type="radio" name="Sex" value="Unisex" id="sexUnisex" onchange="validateForm();"> Unisex
                            <br><br>
    
                            Category <br>
                            <select name="Category" id="category" class="formBlockElement" onchange="loadJSON();">
                                <option value="Tops">Tops</option>
                                <option value="Bottoms">Bottoms</option>
                                <option value="Shoes">Shoes</option>
                                <option value="Swimwear">Swimwear</option>
                                <option value="Accessories">Accessories</option>
                             </select> 
                            <br><br>
    
                            Sub-Category<br>
                            <select name="SubCategory" id="subCategory" class="formBlockElement">
                                <option></option>
                            </select>
                            <br><br><br><br>

                            <input type="submit" class="submitButton" value="Update Product">
                            
                    </div>

                    <!-- Right Column of Form-->
                    <div class="col right">
                        Sizes<br>
                        <hr>

                        <!-- Populated by JS-->
                        <ul id="sizeList" class="sizeList"> </ul>

                        <?php
                            // Select the image paths from the database
                            $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                            include $connectionFile;
                            $connection = OpenConnection();

                            // If connection fails throw error.
                            if(!$connection){
                                echo "Connection failed: " . mysqli_connect_error();
                            }

                            // Submit the Sizes to the DB

                            $sql = "SELECT imageLink1, imageLink2, imageLink3, imageLink4, imageLink5, imageLink6 FROM images WHERE productID='$productID'";
        
        
                            // Submit query, throw error if one occurs
                            if($connection -> query($sql) === FALSE){
                                echo "Error: " . $sql . "<br>" . $connection->error;
                            } 

                            $data = $connection->query($sql);

                            $imgLink1 = "";
                            $imgLink2 = "";
                            $imgLink3 = "";
                            $imgLink4 = "";
                            $imgLink5 = "";
                            $imgLink6 = "";
                            

                            if($data->num_rows >0){
                                while($row = $data->fetch_assoc()){
                                   $imgLink1 = $row['imageLink1'];
                                   $imgLink2 = $row['imageLink2'];
                                   $imgLink3 = $row['imageLink3'];
                                   $imgLink4 = $row['imageLink4'];
                                   $imgLink5 = $row['imageLink5'];
                                   $imgLink6 = $row['imageLink6'];
                                }
                            }


                            //Close the connection.
                            CloseConnection($connection);
                        ?>

                        Image Paths 
                        <hr><br>
                        1: <input type="text" name="imgLink1" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..." value="<?php echo($imgLink1); ?>"> <br><br>
                        2: <input type="text" name="imgLink2" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..." value="<?php echo($imgLink2); ?>"> <br><br>
                        3: <input type="text" name="imgLink3" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..." value="<?php echo($imgLink3); ?>"> <br><br>
                        4: <input type="text" name="imgLink4" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..." value="<?php echo($imgLink4); ?>"> <br><br>
                        5: <input type="text" name="imgLink5" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..." value="<?php echo($imgLink5); ?>"> <br><br>
                        6: <input type="text" name="imgLink6" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..." value="<?php echo($imgLink6); ?>"> <br><br>
                        
                    </div>
                </div>
        </div>

</form>

        <!-- Link JS -->
        <script src="/473Project/admin-files/products/updateProduct.js"></script>
        <script src="/473Project/admin-files/products/productLinks.js"></script>
    </body>
</html>