<?php 
    function OpenConnection(){
        $host = "localhost";
        $user = "root";

        // Enter your password here
        $password="";
        $database = "clothingcompany";

        $connection = new mysqli($host, $user, $password, $database) or die ("Connection failed: %s\n". $connection -> error);

        return $connection;
    }

    function CloseConnection($connection){
        $connection -> close();
    }
?>
