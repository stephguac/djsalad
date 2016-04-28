<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
<?php
	$this->load->view("partials/head.php");
	$this->load->view("partials/header.php");
	// $orders->load->
?>
</head>
<body>
	<div>
		<input class="search-order" type='text' name="search-order" value='' placeholder="search">
		<select class="order-type-dropdown" name="order-status">
		  <option>Show All</option>
		  <option>Order In</option>
		  <option>Shipped</option>
		  <option>Cancelled</option>
		</select>
	</div>
      <!-- this is the table head  -->
<table class="table">
	<tr>
	    <td>Order ID</td>
        <td>Name</td>
        <td>Date</td>
        <td>Billing Address</td>
        <td>Total</td>
        <td>Status</td>
        <td>Edit Status</td>
    </tr>
<?php
	// var_dump($orderArray);
    foreach ($orderArray as $orderData) {
    	echo '<tr>';
    	echo '<td>' . $orderData['id'] . '</td>';
    	echo '<td>' . $orderData['user_id'] . '</td>';
    	echo '<td>' . $orderData['created_at'] . '</td>';
		echo '<td>' . $orderData['billing_address_id'] . '</td>';
		echo '<td>' . $orderData['total'] . '</td>';
		echo '<td>' . $orderData['status'] . '</td>';?>
		<td>
		<form action="/Orders/changeOrderStatus/<?= $orderData['id'] ?>" method="POST">
			<select class="order-type-dropdown" name="status">
	            <option value="1">Order In</option>
	            <option value="2">Shipped</option>
	            <option value="3">Cancelled</option>
          	</select>
          	<input class="btn btn-primary btn-sm"type="submit"></input>
	    </form>
        </td>
<?php 	echo '</tr>';
	}
?>
	</table>
</body>
</html>