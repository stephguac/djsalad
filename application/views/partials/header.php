    <!-- Navigation -->
<style type="text/css">
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
#signup-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#signup-dp .help-block{
    font-size:12px    
}
#signup-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#signup-dp .social-buttons{
    margin:12px 0    
}
#signup-dp .social-buttons a{
    width: 49%;
}
#signup-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}

</style>
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
                        <a href="About">About</a>
                    </li>
                    <li>
                        <a href="#">Albums</a>
                    </li>
                    <li>
                        <a href="Contact">Contact</a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Sign Up</b> <span class="caret"></span></a>
                    <ul id="signup-dp" class="dropdown-menu">
                        <li>
                             <div class="row">
                                    <div class="col-md-12">
                                         <form class="form" role="form" method="post" action="signup" accept-charset="UTF-8" id="signup-nav">
                                                <div class="form-group">
                                                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                   <!--  <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                                </div>
        <!--                                         <div class="checkbox">
                                                     <label>
                                                     <input type="checkbox"> keep me logged-in
                                                     </label>
                                                </div> -->
                                         </form>
                                    </div>
<!--                                     <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div> -->
                             </div>
                        </li>
                    </ul>                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                             <div class="row">
                                    <div class="col-md-12">
                                         <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                   <!--  <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>
        <!--                                         <div class="checkbox">
                                                     <label>
                                                     <input type="checkbox"> keep me logged-in
                                                     </label>
                                                </div> -->
                                         </form>
                                    </div>
<!--                                     <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div> -->
                             </div>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>