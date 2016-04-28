    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">DJ Salad</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/About">About</a>
                    </li>
                    <li>
                        <a href="/Search">Albums</a>
                    </li>
                    <li>
                        <a href="Contact">Contact</a>
                    </li>
                    <li class="dropdown">
                    <li>
                        <a href="/Register">Register</a>
                    </li>                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                             <div class="row">
                                    <div class="col-md-12">
                                         <form class="form" role="form" method="post" action="Login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                     <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>
                                         </form>
                                    </div>
                             </div>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>