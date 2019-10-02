<?php 
    // Include Connection File and Open a connection.
    include 'MySQL_ConnectionFile.php';
    $connection = OpenConnection();

    // If connection fails throw error.
    if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }

    echo "Connected Sucessfully";

    // Close the connection.
    CloseConnection($connection);
?>