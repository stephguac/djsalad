<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact DJ SALAD</title>

<?php
    $this->load->view("partials/head.php");
?>

</head>

<body>

<?php
    $this->load->view("partials/header.php");
?>

    <!-- Page Content -->
    <div class="container">
        <div>
                <h3>Register</h3>
                <form action="/Users/register" method="post">
                    First Name: <input type="text" name="firstName"><br>
                    Last Name: <input type="text" name="lastName"><br>
                    Email: <input type="text" name="email"><br>
                    Password: <input type="password" name="password"><br>
                    * Password should be at least 8 characters<br>
                    Confirm Password <input type="password" name="cPassword"><br>
                    <input type="submit" value="Register">
                </form><br>
<?= 
                $this->session->flashdata('vals'); 
?>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">


        <hr>

<?php
    $this->load->view("partials/footer.php");
?>

