<?php 
    function OpenConnection(){
        $host = "localhost";
        $user = "root";
        $password="Winnie4497!";
        $database = "473-database";

        $connection = new mysqli($host, $user, $password, $database) or die ("Connection failed: %s\n". $connection -> error);

        return $connection;
    }

    function CloseConnection($connection){
        $connection -> close();
    }
?>