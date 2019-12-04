<?php
$connection = mysqli_connect('localhost', 'admin', 'admin');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'clothingcompany');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}