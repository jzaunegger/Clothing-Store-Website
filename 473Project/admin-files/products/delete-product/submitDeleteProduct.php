<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remove Product </title>

        <link rel="stylesheet" href="/473Project/admin-files/adminPages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
    <div class="formBlock">
        <?php 
            // Pull data from Add Product.html
            $productID = $_POST["product"];
      

            // Include Connection File and Open a connection.
            $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
            include $connectionFile;
            $connection = OpenConnection();

            // If connection fails throw error.
            if(!$connection){
                echo "Connection failed: " . mysqli_connect_error();
            }

            // Create SQL Query
            $sql = " DELETE FROM products WHERE productID = $productID";

            // Submit query, throw error if one occurs
            if($connection -> query($sql) === TRUE){
                echo "Product successfully deleted from the database.";
            } 
            else{
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

            //Close the connection.
            CloseConnection($connection);
        ?>

        <br><br>
        <button onclick="returnToAdmin();" class="submitButton">Done</button>
        <button onclick="deleteAnotherProduct();" class="submitButton">Delete Another Product</button>

    </div>

    
    <script src="/473Project/admin-files/products/productLinks.js"></script>
    </body>
</html>