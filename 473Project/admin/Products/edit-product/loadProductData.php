<?php
    // Initalize Variables
    $productID = $_REQUEST["q"];
    $productObject =  new \stdClass();

    // Include Connection File and Open a connection.
    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
    include $connectionFile;
    $connection = OpenConnection();

    // If connection fails throw error.
    if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }

    // Create SQL Query, and retrieve data
    $sql = "SELECT productName, productDescription, sex, category, subcategory, price FROM products WHERE productID = $productID";
    $productData = $connection->query($sql);

    //Parse Data
    if($productData->num_rows > 0){
        while($data = $productData->fetch_assoc()){
            $productObject->name = $data['productName'];
            $productObject->desc = $data['productDescription'];
            $productObject->sex = $data['sex'];
            $productObject->cat = $data['category'];
            $productObject->subcat = $data['subcategory'];
            $productObject->price = $data['price'];
        }
    }
    else{
        // Else, throw error
        echo "Error: " . $connection->error;
    }

    //Close the connection.
    CloseConnection($connection);

    // Encode JSON Data and echo so it can be accessed by JS
    $JSON = json_encode($productObject);
    echo $JSON;
?>