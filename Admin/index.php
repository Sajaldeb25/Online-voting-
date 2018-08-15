<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home page</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="assets/css/mdb.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/news.css" rel="stylesheet">

  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="assets/js/popper.min.js"></script>
   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
	
	
    
    <div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Online Voting System</h1> <br>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-black sticky-top">
    <a class="navbar-brand"><img src="logo.jpg" style="height: 43px; width: 70px;" ></a>
   <ul class="navbar-nav " style="padding-left: 1040px"> 
		
       
  </ul>
</nav>



<!-- Start of Login form  -->
<!-- Material form login -->
<div style="height:600px; width:1000px; align:center; padding-left:400px;">
	<form style="padding:50px;"  method="post" action="admin_login_action.php" >
		<p class="h4 text-center mb-4" style=" font-size:30px; color:green; ">Log in As Admin</p>

		<!-- Material input email -->
		<div class="md-form" style="padding-top: 20px !important">
			<i class="fa fa-envelope prefix grey-text"></i>
			<input type="email" id="defaultForm-email" class="form-control validate" name="email" required>
			<label for="materialFormLoginEmailEx">Your email</label>
		</div>

		<!-- Material input password -->
		<div class="md-form" style="padding-top: 20px !important">
			<i class="fa fa-lock prefix grey-text"></i>
			<input type="password" id="defaultForm-pass" class="form-control validate" name="pass" required>
			<label for="materialFormLoginPasswordEx">Your password</label>
		</div>

		<div class="text-center mt-4" style="padding-top: 20px !important">
			<button class="btn btn-default" type="submit">Login</button>
		</div>
	</form>
</div>
<!-- Material form login -->
<!--End of Login form  -->
    
  </body>
</html>