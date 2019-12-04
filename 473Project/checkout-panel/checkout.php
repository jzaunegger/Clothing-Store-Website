<?php 
session_start();
require_once('inc/connect.php'); 
?>

<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="checkout.css">
    <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    <meta name="robots" content="noindex,follow" />
</head>
<?php 
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
?>
<body>
    <?php
        //Get Shipping Information
        $name = $_POST["name"] ?? '';

        $address1 = $_POST["address1"] ?? '';
        $city = $_POST["city"] ?? '';
        $state = $_POST["state"] ?? '';
        $zipCode = $_POST["zip-code"] ?? '';

        $phone = $_POST["phone"] ?? '';
            
        //Get Card Information
        $cardholder = $_POST["cardholder"] ?? '';
        $cardNumber = $_POST["card-number"] ?? '';
        //only show last four digits
        $masked =  str_pad(substr($cardNumber, -4), strlen($cardNumber), '*', STR_PAD_LEFT);

        //Get Billing Information
        $billingName = $_POST["billing-name"] ?? '';

        $billingAddress1 = $_POST["billing-address1"] ?? '';
        $billingAddress2 = $_POST["billing-address2"] ?? '';
        $billingCity = $_POST["billing-city"] ?? '';
        $billingState = $_POST["billing-state"] ?? '';
        $billingZipCode = $_POST["billing-zip-code"] ?? '';

        $billingPhone = $_POST["phone"] ?? '';
    ?>
    <div class="checkout-body">
    <div class="panel-body">
    <div class="input-fields">
        <div class="column-1">
	  <table class="table">
	  	<tr>
	  		<th>S.NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
	  	</tr>
		<?php
		$total = 0;
		foreach ($cartitems as $key=>$id) {
			$sql =  $sql = "SELECT productName, productDescription, price FROM products WHERE productID='$id'";;
			$res=mysqli_query($connection, $sql);
			$r = mysqli_fetch_assoc($res);
		?>	  	
	  	<tr>
	  		<td><?php echo $id; ?></td>
	  		<td><?php echo $r['productName']; ?></td>
	  		<td>$<?php echo $r['price']; ?></td>
	  	</tr>
		<?php 
			$total = $total + $r['price'];
			} 
		?>
		<tr>
			<td><strong>Total Price</strong></td>
            <td><strong>$<?php echo $total; ?></strong></td>
        </table>
            <h2>Shipping Information</h2>
            <span>Name: <?=$name;?></span>
            <br><br>

            <span>Address: <?=$address1;?></span>
            <br><br>

            <span>City: <?=$city;?></span>
            <br><br>

            <span>Zip Code: <?=$zipCode;?></span>
            <br><br>

            <span>Phone Number: <?=$phone;?></span>
            <br><br>

        </div>

        <div class="column-2">
            <h2>Card Information</h2>
            <span>Card Holder: <?=$cardholder;?></span>
            <br><br>
            <span>Card Number: <?=$masked;?></span>
            <br><br>
            <h2>Billing Information</h2>
            <span>Name: <?=$billingName;?></span>
            <br><br>

            <span>Address: <?=$billingAddress1;?></span>
            <br><br>

            <span>City: <?=$billingCity;?></span>
            <br><br>

            <span>Zip Code: <?=$billingZipCode;?></span>
            <br><br>

            <span>Phone Number: <?=$billingPhone;?></span>
            <br><br>
            
        </div>
    </div>
</div>
</div>
</body>
<?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
?>