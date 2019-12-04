<?php

    // Include Connection File and Open a Connection
    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
    include $connectionFile;
    $connection = OpenConnection();

    // If connection fails throw error.
    if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }

    // Create SQL Query
    $sql = "SELECT productID, productName, sex, category, subcategory, price FROM products";

    // Retrieve data from DB
    $data = $connection->query($sql);

    // Intialize Variables
    $counter = 0;
    $ids = [];
    $names = [];
    $sexs = [];
    $categories = [];
    $subcategories = [];
    $prices = [];

    // Parse data from query response
    if($data->num_rows > 0){
        while($data2 = $data->fetch_assoc()){
            $ids[$counter] = $data2['productID'];
            $names[$counter] = $data2['productName'];
            $sexs[$counter] = $data2['sex'];
            $categories[$counter] = $data2['category'];
            $subcategories[$counter] = $data2['subcategory'];
            $prices[$counter] = $data2['price'];

            $counter = $counter + 1;
        }
    }

    // Check if query failed, if so throw error
    if($data == null){
        echo "Error: " . $sql  . "<br>" . $connection->error;
    }

    //Close the connection.
    CloseConnection($connection);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Product</title>

        <link rel="stylesheet" href="/473Project/admin/adminPages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>
    
    <body>
        <div class="formBlock">

                <form action="submitDeleteProduct.php" method="POST">

                <table class="searchProductTable">
                    <tr>
                        <th>Delete</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Sex</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Price</th>
                    </tr>

                    <?php 
                        for($i = 0; $i<$counter; $i=$i+1){
                           
                            ?>
                            <tr>
                                <td> <input type="radio" name="product" value="<?php echo($ids[$i]); ?>"> </td>
                                <td> <?php echo($ids[$i]); ?> </td>
                                <td> <?php echo($names[$i]); ?></td>
                                <td> <?php echo($sexs[$i]); ?></td>
                                <td> <?php echo($categories[$i]); ?></td>
                                <td> <?php echo($subcategories[$i]); ?></td>
                                <td> <?php echo($prices[$i]); ?></td>
                            </tr>

                            <?php
                        }
                    ?>
                <br>
                <input type="submit" class="submitButton" value="Remove Product">
                <input type="button" class="submitButton" value="Cancel" style="float: right;">
                <br>
                <br>
                </table>

                </form>
        </div>

        <!-- Link JS -->
        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>