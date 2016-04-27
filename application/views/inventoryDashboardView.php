<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>
<?php
    $this->load->view("partials/head.php");
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
	<div>
		<table class="table">
			<tr>
				<td>Picture</td>
				<td>ID</td>
				<td>Name</td>
				<td>Inventory Count</td>
				<td>Quantity Sold</td>
				<td>Action</td>				
			</tr>
			<!-- for loop in php below to add items -->
			<tr>
				<td>Shirt</td>
				<td>$10.00</td>
				<td>1</td>
				<td>$10.00</td>
				<td>$10.00</td>
				<td>
					<a href="#">edit</a>
					<a href="#">delete</a>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>