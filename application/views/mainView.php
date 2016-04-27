<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DJ Salad Home Page</title>

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
                <div class="col-md-3">
                    <form method="POST" action="Main/productSearchByName">
                        <input id="search-input" type='text' name="search" placeholder="Product Name">
                        <button type="submit" value="Search">&#128269;</button>
                    </form>    
                    <h4>Genres</h4>
                    <ul class="col-3-search">
                        <li><a href="#">Rap</a></li>    <!-- also need to add the # of albums in each genere -->
                        <li><a href="#">Country</a></li>
                        <li><a href="#">Electronic</a></li>
                    </ul>
                </div>

                <div class="col-md-9">

                    <div class="row">

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$19.99</h4>
                                    <h4><a href="/Main/showProduct/">An Album</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$19.99</h4>
                                    <h4><a href="#">Another Album</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$19.99</h4>
                                    <h4><a href="#">Some Album</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$19.99</h4>
                                    <h4><a href="#">More Album</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$19.99</h4>
                                    <h4><a href="#">More Album</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$19.99</h4>
                                    <h4><a href="#">More Album</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->

        <div class="container">

            <hr>

<?php
    $this->load->view("partials/footer.php");
?>

