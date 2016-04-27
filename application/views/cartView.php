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
	<div>
		<table class="table">
			<tr>
				<td>Item</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Total</td>
			</tr>
			<!-- for loop in php below to add items -->
			<tr>
				<td>Shirt</td>
				<td>$10.00</td>
				<td>1</td>
				<td>$10.00</td>
			</tr>
		</table>
	</div>
	<div>
		<a href="???URL FOR HOME???"><button>Continue Shopping</button></a>
	</div>
	<div>
		<form action="address" method="post">
		<h2>Shipping Information</h2>
			First Name: <input type="text" name="firstNameS"><br>
			Last Name: <input type="text" name="lastNameS"><br>
			Address: <input type="text" name="addressS"><br>
			Address 2: <input type="text" name="address2S"><br>
			City: <input type="text" name="cityS"><br>
			State: <input type="text" name="stateS"><br>
			Zipcode: <input type="text" name="zipcodeS"><br>
		<h2>Billing Information</h2>
			<input type="checkbox" name="sameAsShipping"> Same as Shipping
			First Name: <input type="text" name="firstNameB"><br>
			Last Name: <input type="text" name="lastNameB"><br>
			Address: <input type="text" name="addressB"><br>
			Address 2: <input type="text" name="address2B"><br>
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