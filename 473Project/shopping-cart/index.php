<?php 
session_start();
require_once('inc/connect.php');
include('templates/header.php');
include('templates/nav.php');

$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
?>

<div class="container">
<?php if(isset($_GET['status']) & !empty($_GET['status'])){ 
			if($_GET['status'] == 'success'){
				echo "<div class=\"alert alert-success\" role=\"alert\">Item Successfully Added to Cart</div>";
			}elseif ($_GET['status'] == 'incart') {
				echo "<div class=\"alert alert-info\" role=\"alert\">Item is Already Exists in Cart</div>";
			}elseif ($_GET['status'] == 'failed') {
				echo "<div class=\"alert alert-danger\" role=\"alert\">Failed to Add item, try to Add Again</div>";
			}
	}
?>
	<div class="row">
<?php while($r = mysqli_fetch_assoc($res)){ ?>
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">

	      <div class="caption">
	        <h3><?php echo $r['productName'] ?></h3>
	        <p><?php echo $r['productDescription'] ?></p>
	        <p><a href="addtocart.php?id=<?php echo $r['productID']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>
<?php } ?>
	</div>

</div>

<?php include('templates/footer.php'); ?>