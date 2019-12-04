<?php 
    // This script is passed a username to determine if it is available for user or not.
    $username = $_GET['username'];
    $usernames = [];

    $isValid = 1; // 1 for is available username, 0 for taken username

    // Add connection file and check if connection exists
    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
    include $connectionFile;
    $connection = OpenConnection();

    // Check if DB connection works
    if($connection){
        $SQL = "SELECT userID, username FROM users";
        $SQL_Data = $connection->query($SQL);

        // Iterate through sql results
        if($SQL_Data->num_rows > 0){
            while($data = $SQL_Data->fetch_assoc()){
                $userID = $data['userID'];
                $currentUsername = $data['username'];
                array_push($usernames, $currentUsername);
            }
        }

        // Compare username to the taken ones
        for($i=0; $i<count($usernames); $i++){
            if($username == $usernames[$i]){
                $isValid = 0;
            }
        }

        // Print response
        print($isValid);
    }
    // Throw error if connection to DB cannot be made
    else{
        echo("Connection error.");
    }
?>