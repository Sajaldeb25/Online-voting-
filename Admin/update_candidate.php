<?php
	session_start();
	require('connection.php');
	
	if(empty($_SESSION['admin_id'])){
		header("location:index.php");
	}
	
	$id = $_GET['id'];
		 
		 
	$query = " SELECT * FROM candidate WHERE c_id='$id' " ;
	$result=mysqli_query($link,$query);
    
    while($row = mysqli_fetch_array($result))
    {
        $ID = $row['c_id'];
        $NAME = $row['name'];    
        $EMAIL = $row['email'];
        $PHONE = $row['phone'];
        $QUALIFICATION = $row['qualification'];
        $POSITION = $row['c_position'];
    }
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update candidate</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="assets/css/mdb.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/news.css" rel="stylesheet">
	
	<style>
	.pic{
		border-radius: 50%;
		height:100px;
		width:100px;
		align:middle;
		
	}
	img:hover {
		box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
	}
	</style>

  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="assets/js/popper.min.js"></script>
   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
	
	<script>
     $(document).ready(function() {
       $('.mdb-select').material_select();
     });
    </script>
    
    <div class="container-fluid">
        <h1 style="text-align: center; font-weight: 700; font-size: 60px; ">Online Voting System</h1> <br>
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


	<div style="padding-top:25px; padding-left:300px; font-size:30px; height:70px; width:100%; ">Update candidates information</div>
		<div style="padding-left:300px; width:1000px; height:100%; padding-top:10px;">
		
			<!-- Card -->
				<div class="card">

					<!-- Card body -->
					<div class="card-body">

						
						<form style="padding-top: 20px; !important" action="add_candidate_action.php?id=<?php echo $ID ?>" method="POST" enctype="multipart/form-data">
							

							<!-- Material input text -->
							<div class="md-form" style="padding-top: 20px; !important">
								<i class="fa fa-user prefix grey-text"></i>
								<input type="text" id="materialFormCardNameEx" class="form-control" name="name" value="<?php echo $NAME ; ?>" required>
								<label for="materialFormCardNameEx" class="font-weight-light">candidates name</label>
							</div>

							<!-- Material input email -->
							<div class="md-form" style="padding-top: 20px; !important">
								<i class="fa fa-envelope prefix grey-text"></i>
								<input type="email" id="materialFormCardEmailEx" class="form-control" name="email" value="<?php echo $EMAIL ; ?>" required>
								<label for="materialFormCardEmailEx" class="font-weight-light">candidates email</label>
							</div>

							<!-- Material input phone -->
							<div class="md-form" style="padding-top: 20px; !important">
								<i class="fa fa-user prefix grey-text"></i>
								<input type="text" id="materialFormCardNameEx" class="form-control" name="phone"  value="<?php echo $PHONE ; ?>" required>
								<label for="materialFormCardNameEx" class="font-weight-light">candidates phone</label>
							</div>
							
							<div  style="padding-left: 39px; padding-top:25px; !important">
								<label for="materialFormCardNameEx" class="font-weight-light">position</label>
								<select class="form-control" style="padding-left: 10px; !important" name="position" value="<?php echo $POSITION ; ?>" required>
									<option value="" disabled selected>Choose candidates position</option>
									<option value="President">         President</option>
									<option value="Secretary">         Secretary</option>
									<option value="Vice-president">    Vice-president</option>
									<option value="Treasurer">         Treasurer</option>
									<option value="Join-Secretary">    Join-Secretary</option>
									<option value="Executive-member">  Executive-member</option>
								</select>
							</div>
							
							
							<!-- Material input photo -->
							
							<div class="md-form" style="padding-left:39px; padding-top: 30px; !important">
							<label style="padding-left:39px;">candidates photo</label>
								<div class="file-field">
									<input type="file" name="image1">
								</div>
							</div>
							
							<!-- Material input photo -->
							<div class="md-form" style="padding-left:39px; padding-top: 30px; !important">
							<label style="padding-left:39px;">candidates logo</label>
								<div class="file-field">
									<input type="file" name="image2">
								</div>
							</div>
							<!-- Material input massage -->
							
							<div class="md-form">
								<i class="fa fa-pencil prefix"></i>
								<textarea type="text" id="materialFormMessageModalEx1" class="md-textarea form-control" name="qualification"  value="<?php echo $QUALIFICATION ; ?>" required ></textarea>
								<label for="materialFormMessageModalEx1" style="padding-left:3px; font-size:17px;">candidates qualification</label>
							</div>


							<div class="text-center py-4 mt-3">
								<button class="btn btn-cyan" type="submit">UPDATE</button>
							</div>
						</form>
						<!-- Material form ADD -->

					</div>
					<!-- Card body -->

				</div>
				<!-- Card -->
		</div>
		<br>
		
		    <!-- Footer -->
		<footer class="page-footer font-small black" style="background-color:#0b0c0c; !important">

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="">Teamtwenty5</a>
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- Footer -->
      
    
  </body>
</html>