<?php
     // Include Connection File and Open a Connection
     $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
     include $connectionFile;
     $connection = OpenConnection();

     $productID = $_GET["productID"];
     $productName ='';
     $productDescription ='';
     $productSex ='';
     $productCategory ='';
     $productSubcategory ='';
     $productPrice ='';

     // If connection fails throw error.
     if(!$connection){
         echo "Connection failed: " . mysqli_connect_error();
     }

     // Construct sql statement and send query
     $sql = "SELECT productName, productDescription, sex, category, subcategory, price FROM products WHERE productID='$productID'";
     $data = $connection->query($sql);

     // Check if query failed, if so throw error
     if($data == null){
         echo "Error: " . $sql  . "<br>" . $connection->error;
     }

     // Parse data from query response
     if($data->num_rows > 0){
         while($data2 = $data->fetch_assoc()){
            $productName = $data2['productName'];
            $productDescription = $data2['productDescription'];
            $productSex = $data2['sex'];
            $productCategory = $data2['category'];
            $productSubcategory = $data2['subcategory'];
            $productPrice = $data2['price'];
         }
     }

    //Close the connection.
    CloseConnection($connection);

     // Encode and Send the JSON Response
    $productData = array('productName' => $productName, 'productDescription' => $productDescription, 'productSex' => $productSex, 'productCategory' => $productCategory, 'productSubcategory' => $productSubcategory, 'productPrice' => $productPrice);
    $JSON = json_encode($productData);
    echo $JSON;
?>