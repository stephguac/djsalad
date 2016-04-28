<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DJ Salad Product Page</title>

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
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="http://placekitten.com/800/400" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?= '$' . $indivDetails['price'] ?>
                        <a href="Main/productAddToCart/<?= $prod_id; ?>"><span class="btn btn-success">Add to Cart</span>
                        </h4>
                        <h4><a href="#"><?= $indivDetails['title'] . ' by ' . $indivDetails['artist'] . ' (' . $indivDetails['genre'] . ') ' ; ?></a></h4>
                        <p class="description">
                            <?= $indivDetails['description'] . ' (' . $indivDetails['quantity_remaining'] . ' in stock) '; ?>
                        </p>
                    </div>
                </div>

                <h1>Other Items You May Like</h1>

                    <div class="row">

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$24.99</h4>
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

