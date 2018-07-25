<?php
	session_start();
	require('connection.php');
	echo' '.$_SESSION['member_id'].' ';
	
	if(empty($_SESSION['member_id'])){
		header("location:home.php");
	} 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Developer</title>

    <!-- Bootstrap -->
	<link href="assets/css/mdb.min.css" rel="stylesheet">
	
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="assets/js/popper.min.js"></script>
   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    
    <div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Online Voting System</h1> </br>
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



<div style="padding-left:200px; padding-top:20px; font-size:20px; height:30px; width:600px; ">All Developer of the Website</div>






  
    
  </body>
</html>