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
        

        <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            
            <fieldset>

            <legend>Contact Form</legend><br>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="name" class="control-label">Name</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="name" placeholder="Name" type="text" value="" />

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="email" class="control-label">Email</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="email" placeholder="Email" type="text" value="" />

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="subject" class="control-label">Subject</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="subject" placeholder="Subject" type="text" value="" />

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="message" class="control-label">Message</label>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="4" placeholder="Your Message"></textarea>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                    </div>
                </div>

            </fieldset>


        </div>
    </div>




    </div>
    <!-- /.container -->

    <div class="container">


        <hr>

<?php
    $this->load->view("partials/footer.php");
?>

