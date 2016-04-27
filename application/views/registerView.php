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
                <h1>Register</h1><br>
                <form action="/Users/register" method="post" class="form-inline" role="form">
                    <fieldset class="form-group row">
                        <label class="col-sm-6 form-control-label">First Name:</label> <div class="col-sm-6"><input type="text" class="form-control" name="firstName" placeholder="Jane"></div> <br>
                        <label class="col-sm-6 form-control-label">Last Name:</label> <div class="col-sm-6"><input type="text" class="form-control" name="lastName" placeholder="Doe"></div> <br>
                        <label class="col-sm-6 form-control-label">Email:</label> <div class="col-sm-6"><input type="text" class="form-control" name="email" placeholder="Jane@Doe.com"></div> <br>
                        <label for="password" class="col-sm-6 form-control-label">Password:</label> <div class="col-sm-6"><input type="password" class="form-control" name="password" placeholder="at least 8 characters"></div> <br>
                        <label class="col-sm-6 form-control-label">Confirm Password:</label> <div class="col-sm-6"><input type="password" class="form-control" name="cPassword"></div> <br>
                        <!-- <span class="label label-info">Password should be at least 8 characters.</span><br> -->
                        <input id="reg-btn" type="submit" value="Register" class="btn btn-primary">
                    </fieldset>
                </form><br>
<?= 
                $this->session->flashdata('vals');
?>
    </div>
    <!-- /.container -->

    <div class="container">


        <hr>

<?php
    $this->load->view("partials/footer.php");
?>

<style type="text/css">
    input {
        margin-bottom: 5px;
    }
    #reg-btn {
        margin-left: 75%;
    }
</style>