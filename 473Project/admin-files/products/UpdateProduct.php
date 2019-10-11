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

                // Include Connection File and Open a Connection
                include 'MySQL_ConnectionFile.php';
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                // Create SQL Query
                $sql = "SELECT productName, productDescription, sex, category, subcategory, price FROM products WHERE productID = $productID";

                // Retrieve data from DB
                $data = $connection->query($sql);

                // Initalize Variables
                $productName;
                $productSex;
                $productCategory;
                $productSubcategory;
                $productPrice;

                // Parse data from query response
                if($data->num_rows > 0){
                    while($data2 = $data->fetch_assoc()){
                        $productName =  $data2['productName'];
                        $productDescription = $data2['productDescription'];
                        $productSex = $data2['sex'];
                        $productCategory = $data2['category'];
                        $productSubcategory =  $data2['subcategory'];
                        $productPrice = $data2['price'];
                    }
                }

                // Check if query failed, if so throw error
                if($data == null){
                    echo "Error: " . $sql  . "<br>" . $connection->error;
                 }

                //Close the connection.
                CloseConnection($connection);

            ?>

                <span> <?php echo("The product selected for update is: " . $productName); ?> </span> <i class="fas fa-times closeButton" onclick="returnToAdmin();"></i>
                <hr><br>

                <!-- Sets up the two-column layout -->
                <div class="base">
                    <!-- Left Column of Form-->
                    <div class="col left">
                            Product Name <br>
                            <input type="text" class="formBlockElement" id="productName" name="ProductName" size="50" placeholder="Product Name..." onchange="validateForm();" value=" <?php echo($productName); ?>">
                            <br><br>

                            Description <br>
                            <textarea rows="15" cols="40" class="formBlockElement" id="productDescription" name="ProductDesc" placeholder="Item Description..." onchange="validateForm();"> <?php echo($productDescription); ?> </textarea>
                            <br><br>

                            Price <br>
                            <input type="number" class="formBlockElement" id="price" name="ProductPrice" min="0" step=".01" placeholder="$10.00" onchange="validateForm();" value="<?php echo($productDescription); ?>">
                            <br><br>
    
                            Sex<br>
                            <input type="radio" <?php if($productCategory == "Male")   echo 'checked'; ?> name="Sex" value="Male"   id="sexMen"    onchange="validateForm();"> Male<br>
                            <input type="radio" <?php if($productCategory == "Female") echo 'checked'; ?> name="Sex" value="Female" id="sexWomen"  onchange="validateForm();"> Female<br>
                            <input type="radio" <?php if($productCategory == "Unisex") echo 'checked'; ?> name="Sex" value="Unisex" id="sexUnisex" onchange="validateForm();"> Unisex
                            <br><br>
    
                            Category <br>
                            <select name="Category" id="category" class="formBlockElement" onchange="loadJSON();" value=" <?php echo($productCategory); ?>">
                                <option <?php if($productCategory == "Tops")        echo 'selected'; ?> value="Tops">Tops</option>
                                <option <?php if($productCategory == "Bottoms")     echo 'selected'; ?> value="Bottoms">Bottoms</option>
                                <option <?php if($productCategory == "Shoes")       echo 'selected'; ?> value="Shoes">Shoes</option>
                                <option <?php if($productCategory == "Swimwear")    echo 'selected'; ?> value="Swimwear">Swimwear</option>
                                <option <?php if($productCategory == "Accessories") echo 'selected'; ?> value="Accessories">Accessories</option>
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

                        Image Paths 
                        <hr><br>

                        1: <input type="text" name="imgLink1" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..."> <br><br>
                        2: <input type="text" name="imgLink2" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..."> <br><br>
                        3: <input type="text" name="imgLink3" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..."> <br><br>
                        4: <input type="text" name="imgLink4" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..."> <br><br>
                        5: <input type="text" name="imgLink5" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..."> <br><br>
                        6: <input type="text" name="imgLink6" class="formBlockElement" size="30" placeholder="/473Project/assets/images/..."> <br><br>
                        
                    </div>
                </div>
        </div>

        <!-- Link JS -->
        <script src="test.js"></script>
    </body>
</html>