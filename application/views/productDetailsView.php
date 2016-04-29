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
              <h4>Genres</h4><br>
                    <div>
                       <a href="#" class="list-group-item">Pop/Top-40</a>
                       <a href="#" class="list-group-item">Alternative</a>
                       <a href="#" class="list-group-item">Rap/Hip-Hop/RnB</a>
                       <a href="#" class="list-group-item">Oldies</a>
                       <a href="#" class="list-group-item">Rock</a>
                    </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <?= "<img src='" . $indivDetails['image_1'] . "'height='800' width='800'>" ?>
                    <div class="caption-full">
                        <h4 class="pull-right"><?= '$' . $indivDetails['price']; ?>
                        <a href="/Carts/a/<?= $prod_id; ?>"><span class="btn btn-success">Add to Cart</span>
                        </h4>
                        <h4><a href="#"><?= $indivDetails['title'] . ' by ' . $indivDetails['artist'] . ' (' . $indivDetails['genre'] . ') ' ; ?></a></h4>
                        <p class="description">
                            <?= $indivDetails['description'] . ' (' . $indivDetails['quantity_remaining'] . ' in stock) '; ?>
                        </p>
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

