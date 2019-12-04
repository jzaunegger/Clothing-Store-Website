<?php 
	// Start a session and pull the items from the cart
	session_start();
	$items = $_SESSION['cart'];

	// Get the productID from cart.js
	$productID = $_GET['productID'];

	// Iterate through the items
	for($i=0; $i<count($items); $i++){
		if($items[$i][0] == $productID){
			unset($items[$i]);
			$_SESSION['cart'] = array_values($items);
			print("1");
			return;
		}
	}
	print("0");
?>