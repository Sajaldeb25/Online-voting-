<?php 

	session_start();
	require'connection.php';
	
	$query = "SELECT * FROM tbmembers ";
    $result = mysqli_query($link,$query);
?>


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
		
		
		
		<div style="padding-top:25px; padding-left:200px; font-size:30px; height:70px; width:100%; ">All voters for the Election </div>
		
		<div style="width:80%; align:center; height:100%;padding-top:25px; padding-left:200px; !important ">
		<!--Table-->
			<table class="table table-hover table-fixed">

				<!--Table head-->
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th style="text-align:center;!important">Send code</th>
						<th style="text-align:center;!important">Delete</th>
					</tr>
				</thead>
				<!--Table head-->

				<!--Table body-->
				<tbody>
				
				<?php while($row = mysqli_fetch_array($result) ){ ?>
					<tr>
						<th scope="row"><?php echo'  '.$row['member_id'].' ' ?> </th>
						<td><?php echo'  '.$row['first_name'].' ' ?> </td>
						<td><?php echo'  '.$row['email'].' ' ?> </td>
						<td style="text-align:center;!important">   <a href="codesend.php?id=<?php echo' '.$row['member_id'].' '?>" class="teal-text"><i class="fa fa-pencil"></i></a>  </td>
						<td style="text-align:center;!important">  <a href="voterdelete.php?id=<?php echo' '.$row['member_id'].' '?>" class="red-text"><i class="fa fa-times"></i></a>    </td>
					</tr>
				<?php } ?>
					
				</tbody>
				<!--Table body-->

			</table>
			
				<button class="btn btn-deep-purple" style="background-color:#17865e  !important "><i class="fa fa-pencil mr-1"></i>Send code to everyone</button>
			<!--Table-->
			</div>
    
  </body>
</html>