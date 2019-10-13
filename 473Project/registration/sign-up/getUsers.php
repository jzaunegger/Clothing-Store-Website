<?php
    $username = $_REQUEST["q"];
    $takenUsernames = [];
    $counter = 0;

    // Include Connection File and Open a connection.
    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
    include $connectionFile;
    $connection = OpenConnection();
    
    if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }
    
    // Form query and send it.
    $getUsernames = " SELECT username FROM users ";
    $usernames = $connection->query($getUsernames);

    // Parse the names retrieved. 
    if($usernames->num_rows > 0){
        while($name = $usernames->fetch_assoc()){
            $takenUsernames[$counter] = $name['username'];
            $counter = $counter + 1;
        }
    }
    else{
        echo "Error: " . $getUsernames  . "<br>" . $connection->error;
    }
    
    // Close the connection.
    CloseConnection($connection);
    
    $JSON = json_encode($takenUsernames);
    echo $JSON;
?>