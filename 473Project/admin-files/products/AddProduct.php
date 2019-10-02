<html>
    <head>
        <title>Add Product </title>
    </head>

    <body>
        <h1>Upload Sumamry</h1>
    <?php 
        $productName = $_POST["ProductName"];
        $productDesc = $_POST["ProductDesc"];
        $productPrice = $_POST["ProductPrice"];

        // Include Connection File and Open a connection.
        include 'MySQL_ConnectionFile.php';
        $connection = OpenConnection();

        // If connection fails throw error.
        if(!$connection){
            echo "Connection failed: " . mysqli_connect_error();
        }

        $sql = " INSERT INTO Products (productName)
                     VALUES(' $productName' )";

        if($connection -> query($sql) === TRUE){
            echo "Product successfully added to the database.";
        } 
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the connection.
        CloseConnection($connection);
    ?>

    <span> The product's name is <?=$productName;?> </span>
    <br><br>

    <span> The product's description is <?=$productDesc;?> </span>
    <br><br>

    <span> The product's description is <?=$productPrice;?> </span> 
    <br><br>

    </body>
</html>