<html>
<head>
	<title>(Dashboard Orders)</title>
<?php
	$this->load->view("partials/header.php");
?>
	<style type="text/css">
	</style>
</head>
<body>
	<div>
		<form>
			<input type="search" name="search" value="Search"></input>
		</form>
	</div>
	<div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Show All
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="#">Order in</a></li>
	    <li><a href="#">Shipped</a></li>
	    <li><a href="#">Cancelled</a></li>
	  </ul>
	</div>
	<div>
		<table class="table">
			<tr>
				<td>Order ID</td>
				<td>Name</td>
				<td>Date</td>
				<td>Billing Address</td>
				<td>Total</td>
				<td>Status</td>				
			</tr>
			<!-- for loop in php below to add items -->
			<tr>
				<td>Shirt</td>
				<td>$10.00</td>
				<td>1</td>
				<td>$10.00</td>
				<td>$10.00</td>
				<td>$10.00</td>
			</tr>
		</table>
	</div>
</body>
</html>