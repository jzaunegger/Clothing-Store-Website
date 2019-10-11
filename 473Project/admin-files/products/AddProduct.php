<html>
    <head>
        <title>Add Product </title>
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
        include 'MySQL_ConnectionFile.php';
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
    
    <script src="test.js"></script>
    </body>
</html>