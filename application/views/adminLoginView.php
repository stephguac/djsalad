<!DOCTYPE html>
<html>
<head>
<?php
    $this->load->view("partials/head.php");
    $this->load->view("partials/header.php");
?>
    <title>Admin Login</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style type="text/css">
        #container {
            height: 200px;
            width: 300px;
            position: relative;
            top: 120px;
            left: 43%;
        }
    </style>

</head>
    <body>
        <div class='container'>
            <form action="/Orders" method="POST">
                <h3>Admin Login</h3>
                <input type="text" name="email" placeholder="E-Mail"><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" value="Submit"><br>
            </form>
        </div>
    </body>

    <div class='container'>

    <hr>

<?php
    $this->load->view("partials/footer.php");
?>
</html>


