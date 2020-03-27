<?php 
	session_start();
	include("../php/sqldb.php");

	if(isset($_GET['action'])){
		if($_GET['action'] == "delete"){
			$sql = "DELETE FROM " . $_SESSION['username'] . "_cart where id =" . $_GET['id'];

			$result = mysqli_query($conn,$sql);
			header("Location: cart.php");						
		}
	}

	$sql = "SELECT * FROM " . $_SESSION['username'] . "_cart";

	$result = mysqli_query($conn,$sql);

	$list = mysqli_fetch_all($result,MYSQLI_ASSOC);

	$total = 0;

?>

<!DOCTYPE html>
<html>
	<?php include("../includes/header.php"); ?>

	<div class="container cart-container">
		<h3>Order Details</h3>		
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Product</th>
		      <th scope="col">Price</th>
		      <th scope="col">Quantity</th>
		      <th scope="col">Total Price</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; ?>
		    <?php foreach($list as $item): ?>
		    <tr>
		    	<th scope="row"><?php echo $i; $i+=1; ?></th>
		      	<td><?php echo $item['name'] ?></td>
			  	<td><?php echo $item['cost'] ?></td>
				<td><?php echo $item['quantity'] ?></td>
				<td><?php echo number_format($item['quantity']*$item['cost'])."Rs" ?></td>
				<td><a href="cart.php?action=delete&id=<?php echo $item['id']?>"><span>Remove</span></a></td>
		    </tr>
		    <?php 
		    	$total = $total + ($item['quantity']*$item['cost']);
		    ?>
		    <?php endforeach; ?>
		    <tr>
		    	<td colspan="5" align="right">Total</td>
		    	<td><?php echo number_format($total,2)."Rs"; ?></td>
		    </tr>
		  </tbody>
	</table>

	<button style="float: right" type="submit" class="btn btn-primary">Place Order</button>
	</div>

</body>
</html>