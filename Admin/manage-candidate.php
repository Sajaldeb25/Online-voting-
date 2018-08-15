<?php 

	session_start();
	require'connection.php';
	
	if(empty($_SESSION['admin_id'])){
		header("location:index.php");
	}
	
	$query = "SELECT * FROM candidate WHERE name != 'NULL' ORDER BY c_position"; 
    $result = mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>candidate Management</title>

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


	<div style="padding:25px; font-size:30px; height:70px; width:100%; ">All candidates for the Election </div>
	
	<div>
		
		<div style=" float:left; padding-left:0px;  height:100%;width:950px;">

		<?php while($row = mysqli_fetch_array($result) ){ ?>

			<div class="news shadow">
				<!-- DIV-1 -->
				<div style=" float: left; width: 50%; padding: 25px;  height: 270px;">
						<div class="avatar mx-auto white"  style="text-align:center;!important">
							<img src="<?php echo' '.$row['photo'].' ' ?> " class="rounded-circle" style="height:100px; !important" >' 
						</div>

						<div class="card-body">
							<h4 style="text-align:center; color:green;"><?php echo' '.$row['name'].' ' ?></h4>
							<hr>
							 <p style="text-align:center;" > <?php echo' '.$row['email'].' ' ?>  </br> <?php echo' '.$row['phone'].' ' ?> </br>Qualification: <?php echo' '.$row['qualification'].' ' ?>  </p>
						</div>
						<a href="delete_candidate.php?id=<?php echo' '.$row['c_id'].' '?>  ">Delete</a>
						<a href="update_candidate.php?id=<?php echo' '.$row['c_id'].' '?> " style="padding-left:170px">Update</a>
				</div>
				<!-- DIV-2 -->
				<div style=" float: left; width: 50%; padding: 25px;  height: 300px">
						<div class="avatar mx-auto white" style="text-align:center; !important">
							<img src=""  style="height:100px; width:100px">
						</div>

						<div class="card-body">
							<h5 style="text-align:center;">Logo</h5>
							<hr>
							 <p style="text-align:center;" >Candidates of:</br> <p style="text-align:center; color:#85C1E9;"> <?php echo' '.$row['c_position'].' ' ?></p> </p>
						</div>
						
				</div>
			</div>
		
		
		<?php } ?>
		
        </div>
		
		<div style="float:right; width:396px; height:100%; padding:10px; ">
		
			<!-- Card -->
				<div class="card">

					<!-- Card body -->
					<div class="card-body">

						
						<form style="padding-top: 20px; !important" action="add_candidate_action.php" method="POST" enctype="multipart/form-data">
							<p class="h4 text-center py-4">Add a candidate</p>

							<!-- Material input text -->
							<div class="md-form" style="padding-top: 20px; !important">
								<i class="fa fa-user prefix grey-text"></i>
								<input type="text" id="materialFormCardNameEx" class="form-control" name="name" required>
								<label for="materialFormCardNameEx" class="font-weight-light">candidates name</label>
							</div>

							<!-- Material input email -->
							<div class="md-form" style="padding-top: 20px; !important">
								<i class="fa fa-envelope prefix grey-text"></i>
								<input type="email" id="materialFormCardEmailEx" class="form-control" name="email" required>
								<label for="materialFormCardEmailEx" class="font-weight-light">candidates email</label>
							</div>

							<!-- Material input phone -->
							<div class="md-form" style="padding-top: 20px; !important">
								<i class="fa fa-user prefix grey-text"></i>
								<input type="text" id="materialFormCardNameEx" class="form-control" name="phone" required>
								<label for="materialFormCardNameEx" class="font-weight-light">candidates phone</label>
							</div>
							
							<div  style="padding-left: 39px; padding-top:25px; !important">
								<label for="materialFormCardNameEx" class="font-weight-light">position</label>
								<select class="form-control" style="padding-left: 10px; !important" name="position" required>
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
								<textarea type="text" id="materialFormMessageModalEx1" class="md-textarea form-control" name="qualification" required ></textarea>
								<label for="materialFormMessageModalEx1" style="padding-left:3px; font-size:17px;">candidates qualification</label>
							</div>


							<div class="text-center py-4 mt-3">
								<button class="btn btn-cyan" type="submit">ADD</button>
							</div>
						</form>
						<!-- Material form ADD -->

					</div>
					<!-- Card body -->

				</div>
				<!-- Card -->
		</div>
	</div>
         <!-- Footer -->
		<div style="padding-top:9700px">
			<footer class="page-footer font-small black" style="background-color:#0b0c0c; !important">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">© 2018 Copyright:
				<a href="">Teamtwenty5</a>
			  </div>
			  <!-- Copyright -->

			</footer>
		</div>
		<!-- Footer -->
    
  </body>
</html>
