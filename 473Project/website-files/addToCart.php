<?php
    // Start session
    session_start();

    // Pull data from HTTP Request
    $productID = $_GET["productID"];
    $quantity = $_GET["quantity"];
    $size = $_GET["size"];

    // Check if user is logged in, echo 1 if user is logged in, echo 0 if user is not signed in.
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
?>