<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
<?php
    $this->load->view("partials/header.php");
?>
    <style type="text/css">
    </style>
</head>
<body>
    <div>
        <form>
            <input type="search" name="search" value="Search"></input>
        </form>
    </div>
    <div>
        <table class="table">
            <tr>
                <td>Picture</td>
                <td>ID</td>
                <td>Name</td>
                <td>Inventory Count</td>
                <td>Quantity Sold</td>
                <td>Action</td>             
            </tr>
            <!-- for loop in php below to add items -->
            <tr>
                <td>Shirt</td>
                <td>$10.00</td>
                <td>1</td>
                <td>$10.00</td>
                <td>$10.00</td>
                <td>
                    <a href="#">edit</a>
                    <a href="#">delete</a>
                </td>
            </tr>
        </table>
    </div>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalNorm">
    Add Product
</button>

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
                
                <form role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="10" class="form-control" id="description" placeholder="Enter a description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select>
                            <option value="indie">Indie</option>
                            <option value="hiphop">Hip Hop</option>
                            <option value="electronic">Electronic</option>
                            <option value="country">Country</option>
                        </select>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-success" value="Add Item"/>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->

            </div>
        </div>
    </div>
</div>
    
</body>
</html>