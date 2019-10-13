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
        <h1>Upload Summary</h1>
    <?php 
        // Pull data from Add Product.html
        $productName = $_POST["ProductName"];
        $productDesc = $_POST["ProductDesc"];
        $productPrice = $_POST["ProductPrice"];
        $sex = $_POST["Sex"];
        $category = $_POST["Category"];
        $subCategory = $_POST["SubCategory"];

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
        $sql = " INSERT INTO Products (productName, productDescription, sex, category, subcategory, price, dateAdded, timeAdded, dateLastEdited, timeLastEdited)
                 VALUES(' $productName', '$productDesc', '$sex', '$category', '$subCategory', '$productPrice', '$date', '$time', '$date', '$time')";

        // Submit query, throw error if one occurs
        if($connection -> query($sql) === TRUE){
            echo "Product successfully added to the database.";
        } 
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        //Close the connection.
        CloseConnection($connection);
    ?>

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

    
    <button onclick="returnToAdmin();">Done</button>
    <button onclick="addAnotherProduct();">Add Another Product</button>
    
    <script src="/473Project/admin-files/products/productLinks.js"></script>
    </body>
</html>