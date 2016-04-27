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
                    <br><h4>Genres</h4><br>
                    <div>
                       <a href="#" class="list-group-item">Pop/Top-40</a>
                       <a href="#" class="list-group-item">Alternative</a>
                       <a href="#" class="list-group-item">Rap/Hip-Hop/RnB</a>
                       <a href="#" class="list-group-item">Oldies</a>
                       <a href="#" class="list-group-item">Rock</a>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="row">
<?php
                        // var_dump($results);
                        foreach ($results as $val) {
                            echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
                            echo "<div class='thumbnail'>";
                            echo "<img src='http://placekitten.com/320/320' alt=''>"; // $val['IMAGEURLHERE']
                            echo "<div class='caption'>";
                            echo "<h4 class='pull-right'>$" . $val['price'] ."</h4>";
                            echo "<h4><a href='/Main/showProduct/" . $val['id'] ."'>" . $val['title'] . " by " . $val['artist'] ."</a><h4>";
                            echo "<p>" . $val['description'] ."</p>";
                            echo "</div></div></div>";
                        }
?>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$swag</h4>
                                    <h4><a href="/Main/showProduct/">Take Care</a>
                                    </h4>
                                    <p>YOLO that's the motto.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$dank</h4>
                                    <h4><a href="#">Another One</a>
                                    </h4>
                                    <p>They don't want you to buy records.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="http://placekitten.com/320/320" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$69.69</h4>
                                    <h4><a href="#">Salad Tossing</a>
                                    </h4>
                                    <p>Julian's staff pick.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- col-md-9 -->

            </div>

        </div>
        <!-- /.container -->

        <div class="container">

            <hr>

<?php
    $this->load->view("partials/footer.php");
?>

