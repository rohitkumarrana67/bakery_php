<?php
	
	include("../php/sqldb.php");	
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
        						<p class="card-text input-fields"><input class="form-control" type="number" name="quantity" placeholder = "Number of items"><button class="btn btn-primary">Add to Cart</button></p>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</html>