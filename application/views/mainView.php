<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DJ SALAD TOSSING HITZ</title>

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
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <input class="btn btn-default" type="button" value="Go!"></input>
                                </span>
                        </div>
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
                            foreach ($results as $val) {
                                if(strlen($val['description']) > 80) $val['description'] = substr($val['description'], 0, 80).'...';
                                if(strlen($val['title']) > 22) $val['title'] = substr($val['title'], 0, 22).'...';
                                echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
                                echo "<div class='thumbnail'>";
                                echo '<img src="/uploads/' . $val['image_1'] . '"height="320" width="320">';
                                echo "<div class='caption'>";
                                echo "<h4 class='pull-right'>$" . $val['price'] ."</h4>";
                                echo "<h4><a href='/Product/" . $val['id'] ."'>" . $val['title'] . "<br/> by " . $val['artist'] ."</a></h4>";
                                echo "<p>" . $val['description'] ."</p>";
                                echo "</div></div></div>";
                            }
?>
                    </div>

                </div> <!-- col-md-9 -->

            </div>

        </div>
        <!-- /.container -->

        <a href="http://www.blockleytyre.com/"><img id="banner" src="http://www.f1autocentres.co.uk/images/banner-all-season-tyres.jpg"></a>

        <div class="container">

            <hr>

<?php
    $this->load->view("partials/footer.php");
?>

