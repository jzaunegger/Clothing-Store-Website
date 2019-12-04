<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shopping Cart</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/checkout.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Shopping Cart</h1>
            <hr> <br>

            <?php
                // Set Locale
                setlocale(LC_MONETARY, 'en_US');

                 // Pull cart items from Session
                if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0 ){
                    print("Your cart is empty!");
                    print("</div> </div>");
                    include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php";
                    return;

                }
            ?>
                    
            <table class="cartTable">
                <tr>
                    <th>Item Number</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Item Price</th>
                    <th>Line Subtotal</th>
                    <th>Remove Product</th>
                </tr>

                <?php
                    $items = $_SESSION['cart'];
                    $itemCount = count($items);
                    $baseTotal = 0;

                    for($i=0; $i<$itemCount; $i++){
                        print("<tr>");
                            print("<td>" . $items[$i][0] . "</td>");
                            print("<td>" . $items[$i][1] . "</td>");
                            print("<td>" . $items[$i][2] . "</td>");
                            print("<td>" . $items[$i][3] . "</td>");
                            print("<td>" . $items[$i][4] . "</td>");
                            
                            $linePrice = $items[$i][2] * $items[$i][4];
                            $baseTotal = $baseTotal + $linePrice;
                            print("<td>" . number_format($linePrice, 2)  . "</td>");

                            print("
                                    <td>
                                        <button class='removeButton' onclick='removeFromCart(".$items[$i][0].")'>Remove</button> 
                                    </td>
                                ");

                        print("</tr>");
                    }

                    $tax_rate = 0.06;
                    $tax_amount = $baseTotal * $tax_rate;
                    $taxed_total = $baseTotal + $tax_amount;
                ?>
            </table>

            <br><br><br><br>


            <div class='cartTotal'>
                <div class='leftCol'>
                    <span class="card-header">We Accept: </span>
                    <br>

                    <span class="cards">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-discover"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-amex"></i>
                        <i class="fab fa-cc-amazon-pay"></i>
                        <i class="fab fa-cc-apple-pay"></i>
                        <i class="fab fa-cc-paypal"></i>
                    </span> 
                </div>

                <div class='rightCol'>
                    <span class="tax-amount"><?php print("Tax: $" . number_format($tax_amount, 2)); ?></span>
                    <br>

                    <span class='grand-total'><?php print("Grand Total: $" . number_format($taxed_total, 2)); ?></span>
                    <br><br>

                    <button class="checkout-button" onclick="linkToHome();">Continue Shopping</button>
                    <button class="checkout-button" onclick="linkToCheckout();">Checkout</button>
                </div>
            </div>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/shopping-cart/cart.js"></script>
    </body>
</html>
=======
<?php 
session_start();
require_once('inc/connect.php'); 
include('templates/header.php'); 
include('templates/nav.php');
?>

<div class="container">
<?php 
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
?>
	<div class="row">
	  <table class="table">
	  	<tr>
	  		<th>S.NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
	  	</tr>
		<?php
		$total = 0;
		$i= '';
		foreach ($cartitems as $key=>$id) {
			$sql = "SELECT productName, productDescription, price FROM products WHERE productID='$id'";;
			$res=mysqli_query($connection, $sql);
			$r = mysqli_fetch_assoc($res);
		?>	  	
	  	<tr>
	  		<td><?php echo $id; ?></td>
	  		<td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a> <?php echo $r['productName']; ?></td>
	  		<td>$<?php echo $r['price']; ?></td>
	  	</tr>
		<?php 
			$total = $total + $r['price'];
			$i++; 
			} 
		?>
		<tr>
			<td><strong>Total Price</strong></td>
			<td><strong>$<?php echo $total; ?></strong></td>
			<td><a href="/473Project/checkout-panel/checkout.html" class="btn btn-info">Checkout</a></td>
		</tr>
	  </table>
	  
	</div>

</div>

<?php include('templates/footer.php'); ?>
>>>>>>> 2e0464bad04b88d462d156098ca568cf95ce927b
