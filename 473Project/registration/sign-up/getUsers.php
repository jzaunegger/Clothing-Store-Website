<?php
    $username = $_REQUEST["q"];
    $takenUsernames = [];
    $counter = 0;

    // Include Connection File and Open a connection.
    include 'MySQL_ConnectionFile.php';
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

    // Check if the username in question is taken. 
    for($i=0; $i<=$counter-1; $i++){
        //echo $takenUsernames[$i];

    }

    $JSON = json_encode($takenUsernames);
    echo $JSON;

    //print_r($takenUsernames);
?>