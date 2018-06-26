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
	
	<script type="text/javascript" src="jquery.validate.js"></script>
	<script type="text/javascript">
	jQuery().ready(function() {
	 
	  var v = jQuery("#basicform").validate({
		  rules: {
			uname: {
			  required: true,
			  minlength: 2,
			  maxlength: 16
			},
			uemail: {
			  required: true,
			  minlength: 2,
			  email: true,
			  maxlength: 100,
			},
			upass1: {
			  required: true,
			  minlength: 6,
			  maxlength: 15,
			},
			upass2: {
			  required: true,
			  minlength: 6,
			  equalTo: "#upass1",
			}
	 
		  },
		  errorElement: "span",
		  errorClass: "help-inline",
		});
	 
	});
	</script>
	
	<script type="text/javascript">
	jQuery().ready(function() {
	 
	  // Binding next button on first step
	  $(".open1").click(function() {
		  if (v.form()) {
			$(".frm").hide("fast");
			$("#sf2").show("slow");
		  }
	   });
	 
	   // Binding next button on second step
	   $(".open2").click(function() {
		  if (v.form()) {
			$(".frm").hide("fast");
			$("#sf3").show("slow");
		  }
		});
	 
		 // Binding back button on second step
		$(".back2").click(function() {
		  $(".frm").hide("fast");
		  $("#sf1").show("slow");
		});
	 
		 // Binding back button on third step
		 $(".back3").click(function() {
		  $(".frm").hide("fast");
		  $("#sf2").show("slow");
		});
	 
		$(".open3").click(function() {
		  if (v.form()) {
			// optional
			// used delay form submission for a seccond and show a loader image
			$("#loader").show();
			 setTimeout(function(){
			   $("#basicform").html('<h2>Thanks for your time.</h2>');
			 }, 1000);
			// Remove this if you are not using ajax method for submitting values
			return false;
		  }
		});
	});
	</script>

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
   <ul class="navbar-nav " style="padding-left: 700px">
    
    <li class="nav-item">
      <a class="nav-link" href="homenext.php">Home</a>
    </li>   
       
    <li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >Candidates</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="vote.php" class="nav-link" >Vote</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >Vote Result</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >About Us</a>
    </li>
	
    <li class="nav-item" style="padding-left: 14px">
        <a href="" class="nav-link" >Log Out</a>
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

    
  </body>
</html>