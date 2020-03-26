<?php 

	include("../php/sqldb.php");

	$sql = "SELECT * FROM cart";

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
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach($list as $item): ?>
		    <tr>
		    	<th scope="row"><?php echo $item['id'] ?></th>
		      	<td><?php echo $item['name'] ?></td>
			  	<td><?php echo $item['cost'] ?></td>
				<td><?php echo $item['quantity'] ?></td>
				<td><?php echo number_format($item['quantity']*$item['cost'])."Rs" ?></td>
		    </tr>
		    <?php 
		    	$total = $total + ($item['quantity']*$item['cost']);
		    ?>
		    <?php endforeach; ?>
		    <tr>
		    	<td colspan="4" align="right">Total</td>
		    	<td><?php echo number_format($total,2)."Rs"; ?></td>
		    </tr>
		  </tbody>
	</table>

	<button style="float: right" type="submit" class="btn btn-primary">Place Order</button>
	</div>

</body>
</html>