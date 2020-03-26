<?php
	// make two tables one will be named as cakes and another one is cart
	// inside cakes there are 7 input-fields
	// 1 id(int) 2 title(varchar) 3 cost(int) 4 rating(float) 5 summary(varchar) 6 reviews(int) 7 img(varchar)

	// in cart table there are four fields
	// 1 id 2 name 3 cost 4 quantity

	 	
	include("../php/sqldb.php");	
	
	if(isset($_POST['cart'])){
		// access the values of name and cost and add it to the cart
		$name = mysqli_real_escape_string($conn,$_POST['hidden_name']);
		$cost = mysqli_real_escape_string($conn,$_POST['hidden_cost']);
		$quantity = mysqli_real_escape_string($conn,$_POST['quantity']);

		$sql = "INSERT INTO cart (name,cost,quantity) VALUES('$name','$cost','$quantity')";

		$result = mysqli_query($conn,$sql);

		if($result){
			// success
			echo '<script>alert("Item added to Cart")</script>';
		}else{
			// error
			echo "Connection Error!! " . mysqli_error($conn);
		}
	}


	$product = $_GET['product'];

	$prod = mysqli_real_escape_string($conn, $product);

	$sql = "SELECT * FROM ".$prod;

	$result = mysqli_query($conn,$sql);

	$list = mysqli_fetch_all($result, MYSQLI_ASSOC);


	mysqli_free_result($result);

	mysqli_close($conn);

?>	

<!DOCTYPE html>
<html>
	
	<?php include("../includes/header.php") ?>

	<h3><?php  echo strtoupper($product); ?></h3>
	<div class="product-container container-fluid">
		<div class="row">
		<?php foreach($list as $item): ?>
			<div class="col-sm-12 col-md-6 card-holder">
				<div class="card mb-3" style="width: 600px;height: auto;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img style="width: 100%; height: 100%" src="<?php echo $item['img'] ?>" class="card-img" alt="...">
    					</div>
    					<div class="col-md-8">
      						<div class="card-body item-card">
        						<h4 class="card-title"><?php echo $item['title'] ?></h4>
        						<p class="card-text"><strong><?php echo $item['cost']."Rs" ?></strong><span style="float: right"><?php echo "Reviews: ".$item['reviews']?></span></p>
        						<p class="card-text"><?php echo $item['summary'] ?></p>
        						<p class="card-text input-fields">
        							<form class="form-container" action="details.php?product=<?php echo $_GET['product']?>" method = "POST">
        								<input class="form-control" type="number" name="quantity" placeholder = "Number of items">
        								<input type="hidden" name="hidden_name" value="<?php echo $item['title']?>">
        								<input type="hidden" name="hidden_cost" value="<?php echo $item['cost']?>">
        								<button class="btn btn-primary" name="cart">Add to Cart</button>
        							</form>
        						</p>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</html>