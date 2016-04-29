<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    // if ($this->session->currentUser !==true) {
    //     redirect('/');
    // }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product</title>

<?php
     $this->load->view("partials/head.php");
?>

</head>
<body>

<?php
     $this->load->view("partials/header.php");
?>

    <div class="container">
        <div class="row">

                <div class="col-lg-6">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="button" value="Go!"></input>
                            </span>
                        </div>
                    </form>
                </div>

                <!-- Button trigger modal -->
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalNorm">
                    Add Product
                </button>

                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Picture</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Inventory Count</th>
                                <th>Quantity Sold</th>
                                <th>Action</th>             
                            </tr>
                        </thead>
                        <tbody>
<?php
                            foreach ($results as $val) {
                                $image = '<img src="' . $val['image_1'] . '"height="150" width="150">';
                                $id = $val['id'];
                                $title = $val['title'];
                                $remaining = $val['quantity_remaining'];
                                $sold = $val['quantity_sold'];
?>
                            <tr>
                                <td><?php echo $image; ?></td>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $remaining; ?></td>
                                <td><?php echo $sold; ?></td>
                                <td><a href="#">Edit</a>
                                <?= '<a href="/Inventories/deleteProducts/' . $id . '">Delete</a>' ?></td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add a Product
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
        <!--    <form role="form" action="/inventories/addInventory" method="post"> -->
                <form role"form" action="/Uploads/do_upload" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="name" placeholder="Enter name"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input type="text" name="artist" class="form-control" id="name" placeholder="Enter name"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="10" name="description"class="form-control" id="description" placeholder="Enter a description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select name="genre">
                            <option name="indie" value="indie">Indie</option>
                            <option name="hipHop" value="hiphop">Hip Hop</option>
                            <option name="electronic" value="electronic">Electronic</option>
                            <option name="country" value="country">Country</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price"/>
                    </div>

                    <div class="form-group">
                        <label for="remaining">Quantity Remaining</label>
                        <input type="text" name="remaining" class="form-control" id="remaining" placeholder="Enter Quantity Remaining"/>
                    </div>

                    <div class="form-group">
                        <label for="sold">Quantity Sold</label>
                        <input type="text" name="sold" class="form-control" id="sold" placeholder="Enter Quanity Sold"/>
                    </div>

                    <div class="form-group">
                        <label for="image1">Front Cover</label>
                        <input type="file" name="file_upload" id="image1" class="form-control" />
                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Add Item"/>
                </form>   
            </div>
            
            <!-- Modal Footer -->

        </div>
    </div>
</div>

<?php
     $this->load->view("partials/footer.php");
?>
    
</body>
</html>
<!-- SUH DUDES -->