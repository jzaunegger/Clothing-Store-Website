<?php 
<<<<<<< HEAD
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
=======
session_start();
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
if(isset($_GET['remove'])){
	$delitem = $_GET['remove'];
	unset($cartitems[$delitem]);
	$itemids = implode(",", $cartitems);
	$_SESSION['cart'] = $itemids;
}
header('location:cart.php');
>>>>>>> 2e0464bad04b88d462d156098ca568cf95ce927b
