<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Voting Home page before login</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">

  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
    
    <div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Online Voting System</h1> <br>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-black sticky-top">
    <a class="navbar-brand"><img src="logo.jpg" style="height: 43px; width: 70px;" ></a>
   <ul class="navbar-nav " style="padding-left: 930px">
    
       <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>   
       
    <li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a>
    </li>
    <li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Log In</a>
    </li>
  </ul>
</nav>

<div class="container-fluid"><br>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>  
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p> 
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p> 
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p> 
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p> 
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p> 
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p> 
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
  <p>Some example text. Some example text. Some example text. Some example text. Some example text.</p>
</div>



<!-- Start of Login form  -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default">Login</button>
            </div>
        </div>
    </div>
</div>
<!--End of Login form  -->

<!-- start of signup form-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Sign up</button>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="nav-link" data-toggle="modal" data-target="#modalRegisterForm">Launch Modal Register Form</a>
</div>

<!-- End of signup form-->
    
  
    
  </body>
</html>