
<?php
    
	session_start();
	require('connection.php');

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pic Upload</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
	
  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/login.js"></script>
	<div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Picture Upload</h1> </br>
	</div>

<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="picupdate_action.php">
                <div class="form-group">
          
          <div class="col-sm-10">    
              <div class="clear"></div>
			  <input type="text" name="id"  >Input Id </input ></br>
              <a href="#" style="text-decoration: underline"><label class="control-label" for="img">Choose Profile Picture</label></a>
              <input type="file" style="display: none" class="form-control" id="img" name="image" required/>
              <input type="submit" value="upload">
          </div>
        </div> 
                 </form>