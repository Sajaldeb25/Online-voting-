<?php 
	session_start();
	require('connection.php');
	$u_id = $_SESSION['member_id'];
	echo"$u_id</br>";
	
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit vote code page</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
	

  </head>
  <body>
  
  <script>
	function check() {
		
		document.getElementById('dis').disabled = true;
			
	}
	</script>

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
        <a href="candidate.php" class="nav-link" >Candidates</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="vote.php" class="nav-link" >Vote</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="result.php" class="nav-link" >Vote Result</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="aboutus.php" class="nav-link" >About Us</a>
    </li>
	
    <li class="nav-item" style="padding-left: 14px">
        <a href="logout.php" class="nav-link" >Log Out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid" style="padding-top: 39px;"><br>
					<h2 style="padding-left: 40px; color:red">NB:</h2>
					<h3 style="padding-left: 90px; color:red">Click a circle under a respective candidate to cast your vote.</h3>
					<h3 style="padding-left: 90px; color:red">This process can not be undone so think wisely before casting your vote.</h3>
					<h3 style="padding-left: 90px; color:red">You can't vote more than once in a respective position.</h3>
 
</div>

<!-- Start of code form --> 
<form  method="post" action="checkcode.php" >
<div class="modal fade" id="codeForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Submit Your code</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
					<label data-error="wrong" data-success="right" for="orangeForm-name">Your code</label>
                    <input type="text" id="orangeForm-name" class="form-control validate" name="code">
                </div>
				
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" type="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
</form>
<div style="text-align: center ; font-size:30px; color:green" >Already you have completed your vote successfully. </div>
<div class="text-center" style="padding-top: 60px ; padding-left: 500px">
    <a href="" id="dis" onchange='check()' class="nav-link" data-toggle="modal"  style="font-size:50px; height:100px; width:400px ;" disabled >Use your Vote</a>
</div>

<!---End of code form -->
  
    
  </body>
</html>