        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; DJ Salad 2016<span class="pull-right"><a href="/Admin">Admin</a> |
<?php
                    if ($this->session->userdata("currentUser")) {
                        echo $this->session->userdata("currentUser")['email'];
                    } else {
                        echo "Guest";
                    }
?>
 | <a href="/Users/logout/">Log Out</a></span></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Latest compiled and minified JavaScript -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>