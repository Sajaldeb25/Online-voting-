<?php


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page </title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <link href="assets/css/news.css" rel="stylesheet">

  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
    
    <div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Online Voting System</h1> </br>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-black sticky-top">
    <a class="navbar-brand"><img src="logo.jpg" style="height: 43px; width: 70px;" ></a>
   <ul class="navbar-nav " style="padding-left: 750px">
    
    <li class="nav-item">
      <a class="nav-link" href="admin_home.php">Home</a>
    </li>   
       
    <li class="nav-item" style="padding-left: 14px">
        <a href="manage-candidate.php" class="nav-link" > Manage Candidates</a>
    </li>
	
	<li class="nav-item" style="padding-left: 14px">
        <a href="manage-voters.php" class="nav-link" >Manage Voters</a>
    </li>
	
    <li class="nav-item" style="padding-left: 14px">
        <a href="admin-logout.php" class="nav-link" >Log Out</a>
    </li>
  </ul>
</nav>


<div style="padding-left:960px; padding-top:20px;">Welcome, Admin.</div>


  </body>
</html>