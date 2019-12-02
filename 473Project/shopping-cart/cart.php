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