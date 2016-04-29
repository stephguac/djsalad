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
				<td><img src="/uploads/<?= $url ?>" width='50' height='50'></td>
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
	<div>
		<br><br><a href="/"><button>Continue Shopping</button></a><br><hr><br>
	</div>
	<form action="/Orders/placeOrder/<?= $sum?>"method="post" style='margin-left: 10px'>
		<h2>Shipping Information</h2><br>
		<div class='form-group row'>
			<label for='inputName1' class='col-sm-1 form-control-label'>First Name</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputName1' name="firstNameS" placeholder='First Name'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputName2' class='col-sm-1 form-control-label'>Last Name</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputName2' name="lastNameS" placeholder='Last Name'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputAddy1' class='col-sm-1 form-control-label'>Address</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputAddy1' name="addressS" placeholder='Address'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputCity1' class='col-sm-1 form-control-label'>City</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputCity1' name="cityS" placeholder='City'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputState1' class='col-sm-1 form-control-label'>State</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputState1' name="stateS" placeholder='State'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputZip1' class='col-sm-1 form-control-label'>Zipcode</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputZip1' name="zipcodeS" placeholder='Zipcode'/></div>
		</div><br>
		<input type="checkbox" name="sameAsShipping"> Same as Shipping<br><hr><br>


		<h2>Billing Information</h2><br>
		<div class='form-group row'>
			<label for='inputName1b' class='col-sm-1 form-control-label'>First Name</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputName1b' name="firstNameB" placeholder='First Name'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputName2b' class='col-sm-1 form-control-label'>Last Name</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputName2b' name="lastNameB" placeholder='Last Name'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputAddy1b' class='col-sm-1 form-control-label'>Address</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputAddy1b' name="addressB" placeholder='Address'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputCity1b' class='col-sm-1 form-control-label'>City</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputCity1b' name="cityB" placeholder='City'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputState1b' class='col-sm-1 form-control-label'>State</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputState1b' name="stateB" placeholder='State'/></div>
		</div>
		<div class='form-group row'>
			<label for='inputZip1b' class='col-sm-1 form-control-label'>Zipcode</label>
			<div class="col-sm-4"><input type="text" class="form-control" id='inputZip1b' name="zipcodeB" placeholder='Zipcode'/></div>
		</div><br><hr><br>
		<input type="submit" value="Continue to Payment"></input>
	</form>
</div>

</body>

<div class='container'>

    <hr>

<?php
    $this->load->view("partials/footer.php");
?>

</html>
