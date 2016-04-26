<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>

<style type="text/css">

#leftbox{
    border-color: black;
    border-style: solid;
    border-width: 5px;
    height: 550px;
    width: 300px;
    margin-left: 40px;
    margin-right: 40px;
}

table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
th, td {
   padding: 15px;
}

#status{
    position: relative;
    left: -60px;
    top: 47px;
    border-color: black;
    border-style: solid;
    border-width: 5px;
}

#total{
    position: relative;
    left: -97px;
    top: 1px;
    border-color: black;
    border-style: solid;
    border-width: 5px;
}

</style>
</head>
<body>

<nav class="navbar navbar-default">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="#">Dashboard</a>
   </div>
    <div class="navbar-header">
     <a class="navbar-brand" href="#">Orders</a>
   </div>
    <div class="navbar-header">
     <a class="navbar-brand" href="#">Products</a>
   </div>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#">log off</a></li>
     </ul>
   </div>
 </div>
</nav>

<div id="container">
    <div class="row">
        <div class="col-md-4" id="leftbox">
            <p>Order blah blah blah blah</p>
        </div>

        <div class="col-md-8" id="rightbox">
            <table style="width:80%">
              <tr>
                <td>ID</td>
                <td>Item</td> 
                <td>Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
              </tr>
              <tr>
                <td>35</td>
                <td>cup</td> 
                <td>$9.99</td>
                <td>1</td>
                <td>$9.99</td>
              </tr>
               <tr>
                <td>215</td>
                <td>shirt</td> 
                <td>$19.99</td>
                <td>2</td>
                <td>$39.98</td>
              </tr>
            </table>

            <div class="col-md-4 col-md-offset-2" id="status">
            <p>Status Shipped</p>
            </div>

            <div class="col-md-4 col-md-offset-7" id="total">
            <p>Sub total: $xxxx</p>
            <p>Shipping: $xxxx</p>
            <p>Total Price: $xxxx</p>
            </div>

        </div>
    </div>



</div>

</body>
</html>