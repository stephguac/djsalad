<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
<?php
    $this->load->view("partials/head.php");
    $this->load->view("partials/header.php");
?>
</head>
<body>
	<div class="container">
		<form action="" method="POST">
	      <script
	        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	        data-key="pk_test_RmNQaoh72J9k4zy2rKJDLrZf"
	        data-amount="<?php echo "$".$sum;?>"
	        data-name="DJ SALAD"
	        data-description="ITS THE KEY"
	        data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9asvKOwkFkD54LMdgFLGm9M-yvvB4zHWjag1FcrbiFARJ1aC9gHBAd0r9Zg"
	        data-locale="auto">
	      </script>
		</form>
	</div>
</body>
</html>