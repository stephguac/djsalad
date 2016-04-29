<!DOCTYPE html>
<html>
<head>
	<title>(Carts Page) Shopping Cart | Dojo eCommerce</title>
<?php
    $this->load->view("partials/head.php");
    $this->load->view("partials/header.php");
?>
	<style type="text/css">
	</style>
</head>
<body>
<?php

?>
	<div class="container">
		<table class="table">
			<tr>
				<td>Picture</td>
				<td>Title</td>
				<td>Artist</td>
				<td>Genre</td>
				<td>Price</td>
			</tr>
<?php
			// var_dump($cartData);
			foreach($cartData as $cd) {
				$url = $cd['image_1'];
				$title = $cd['title'];
				$artist = $cd['artist'];
				$genre = $cd['genre'];
				$price = $cd['price'];
				$prod_id = $cd['product_id'];
?>
			<tr>
				<td><img src="<?= $url ?>" width='50' height='50'></td>
				<td><?= $title ?></td>
				<td><?= $artist ?></td>
				<td><?= $genre ?></td>
				<td>$<?= $price ?></td>
				<td><form action="/Carts/r/<?= $prod_id; ?>" method="POST"><input type="submit" name="" value="Remove"/></form></td>
			</tr>
<?php 
			}
?>
		</table>
	<h4>Total: 
<?php
			$sum = 0;
			foreach($cartData as $cd) {
				$sum += $cd['price'];
			}
			echo "$".$sum;
?>
	</h4>
	</div>
	<div>
		<a href="/"><button>Continue Shopping</button></a>
	</div>
		<form action="/Orders/placeOrder" method="post">
			<h2>Shipping Information</h2>
				First Name: <input type="text" name="firstNameS"><br>
				Last Name: <input type="text" name="lastNameS"><br>
				Address: <input type="text" name="addressS"><br>
				City: <input type="text" name="cityS"><br>
				State: <input type="text" name="stateS"><br>
				Zipcode: <input type="text" name="zipcodeS"><br>
			<h2>Billing Information</h2>
				<input type="checkbox" name="sameAsShipping"> Same as Shipping
				First Name: <input type="text" name="firstNameB"><br>
				Last Name: <input type="text" name="lastNameB"><br>
				Address: <input type="text" name="addressB"><br>
				City: <input type="text" name="cityB"><br>
				State: <input type="text" name="stateB"><br>
				Zipcode: <input type="text" name="zipcodeB"><br>
			<br>
				Card: <input type="text" name="card"><br>
				Security Code: <input type="text" name="security"><br>
				Expiration: <input type="month" name="expiration"><br>
			<input type="submit" value="Pay"></input>
		</form>
	</div>
</body>
</html>
