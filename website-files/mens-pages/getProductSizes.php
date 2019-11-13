<?php
    // Include Connection File and Open a Connection
    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
    include $connectionFile;
    $connection = OpenConnection();

    $productID = $_GET["productID"];

     // If connection fails throw error.
     if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }

    // Construct sql statement and send query
    $sql = "SELECT imageLink1, imageLink2, imageLink3, imageLink4, imageLink5, imageLink6 FROM images WHERE productID='$productID'";
    $data = $connection->query($sql);

    // Check if query failed, if so throw error
    if($data == null){
        echo "Error: " . $sql  . "<br>" . $connection->error;
    }

    // Parse data from query response
    if($data->num_rows > 0){
        while($data2 = $data->fetch_assoc()){
  
       }
    }

   //Close the connection.
   CloseConnection($connection);

    // Encode and Send the JSON Response
   //$productData = array('imageLink1' => $imageLink1, 'imageLink2' => $imageLink2, 'imageLink3' => $imageLink3, 'imageLink4' => $imageLink4, 'imageLink5' => $imageLink5, 'imageLink6' => $imageLink6);
   //$JSON = json_encode($productData);
   echo $JSON;


?>