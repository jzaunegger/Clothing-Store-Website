<?php
    // Include Product Class and Start session
    session_start();

    // Pull data from HTTP Request
    $productID = $_GET["productID"];
    $name = $_GET["name"];
    $quantity = $_GET["quantity"];
    $size = $_GET["size"];
    $price = $_GET["price"];

    // Check if user is logged in, echo 1 if user is logged in, echo 0 if user is not signed in.
<<<<<<< HEAD
   if (isset($_SESSION['loggedIn'])) {
       if($_SESSION['loggedIn'] == 1){

            // Pull data from HTTP Request
            $productID = $_GET["productID"];
            $name = $_GET["name"];
            $quantity = $_GET["quantity"];
            $size = $_GET["size"];
            $price = $_GET["price"];

            $cartItem = [$productID, $name, $quantity, $size, $price];

           if(!isset($_SESSION['cart'])){
               $_SESSION['cart'] = [];
               array_push($_SESSION['cart'], $cartItem);
               echo(1);
           }
           else{
               array_push($_SESSION['cart'], $cartItem);
               echo(1);
           }
        }
    }

    else{
        echo(0);
    }
=======
   //if (isset($_SESSION['loggedIn'])) {
       //if($_SESSION['loggedIn'] == 1){
        if(isset($productID) & !empty($productID)){
            if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
                for($i = 0; $i < $quantity; $i++){
                    $items = $_SESSION['cart'];
                    $cartitems = explode(",", $items);
                
                    $items .= "," . $productID;
                    $_SESSION['cart'] = $items;
                }
                echo(1);
                    
            }else{
                $items = $productID;
                $_SESSION['cart'] = $items;
                echo(1);
            }
            
        }else{
            echo(0);
        }
>>>>>>> 2e0464bad04b88d462d156098ca568cf95ce927b
?>