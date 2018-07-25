<?php
	session_start();
	require('connection.php');
	echo' '.$_SESSION['member_id'].' ';
	
	if(empty($_SESSION['member_id'])){
		header("location:home.php");
	} 
	
	$query = "SELECT * FROM candidate where c_position = 'President' ORDER BY vote_count DESC "; 
    $result = mysqli_query($link,$query);
	
	$query1 = "SELECT * FROM candidate where c_position = 'vice-president' ORDER BY vote_count DESC "; 
    $result1 = mysqli_query($link,$query1);
	
	$query2 = "SELECT * FROM candidate where c_position = 'Treasurer' ORDER BY vote_count DESC "; 
    $result2 = mysqli_query($link,$query2);
	
	$query3 = "SELECT * FROM candidate where c_position = 'Secratery' ORDER BY vote_count DESC "; 
    $result3 = mysqli_query($link,$query3);
	
	$query4 = "SELECT * FROM candidate where c_position = 'Joint-secretary' ORDER BY vote_count DESC "; 
    $result4 = mysqli_query($link,$query4);
	
	$query5 = "SELECT * FROM candidate where c_position = 'Executive-member' ORDER BY vote_count DESC "; 
    $result5 = mysqli_query($link,$query5);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Result page</title>

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


	<div style="padding-left:200px; padding-top:20px; font-size:25px; height:30px; width:400px; ">Result of the vote</div>
	
	<!--showing president result -->
	<div class="news shadow" style="height:50%; !important">
		<div style=" margin: 30px; width: 80% ; text-align:left ; padding-top: 18px; font-size:1.2em;">
			Vote result of <span style="color:green;">president</span> Candidates:
		</div>
		
		<div style="width:80%; padding-left: 160px;!important ">
			<table class="table table-hover table-fixed">
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>Candidates name</th>
						<th>Number of Votes</th>
					</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result) ){ ?>
					<tr>
						<td><?php echo'  '.$row['name'].' ' ?> </td>
						<td><?php echo'  '.$row['vote_count'].' ' ?> </td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
	
	
	<!--showing Vice-president result -->
	<div class="news shadow" style="height:50% ; !important">
		<div style=" margin: 30px; width: 80% ; text-align:left ; padding-top: 18px; font-size:1.2em;">
			Vote result of <span style="color:green;">vice-president</span> Candidates:
		</div>
		
		<div style="width:80%;padding-left: 160px;!important ">
			<table class="table table-hover table-fixed">
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>Candidates name</th>
						<th>Number of Votes</th>
					</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result1) ){ ?>
					<tr>
						<td><?php echo'  '.$row['name'].' ' ?> </td>
						<td><?php echo'  '.$row['vote_count'].' ' ?> </td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
	
	<!--showing Treasurer result -->
	<div class="news shadow" style="height:60% ; !important">
		<div style=" margin: 30px; width: 80% ; text-align:left ; padding-top: 18px; font-size:1.2em;">
			Vote result of <span style="color:green;">Treasurer</span> Candidates:
		</div>
		
		<div style="width:80%; height:100%; padding-left: 160px;!important ">
			<table class="table table-hover table-fixed">
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>Candidates name</th>
						<th>Number of Votes</th>
					</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result2) ){ ?>
					<tr>
						<td><?php echo'  '.$row['name'].' ' ?> </td>
						<td><?php echo'  '.$row['vote_count'].' ' ?> </td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
	
	<!--showing Secretary result -->
	<div class="news shadow" style="height:50%;  !important">
		<div style=" margin: 30px; width: 80% ; text-align:left ; padding-top: 18px; font-size:1.2em;">
			Vote result of <span style="color:green;">Secretary</span> Candidates:
		</div>
		
		<div style="width:80%; height:100%; padding-left: 160px;!important ">
			<table class="table table-hover table-fixed">
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>Candidates name</th>
						<th>Number of Votes</th>
					</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result3) ){ ?>
					<tr>
						<td><?php echo'  '.$row['name'].' ' ?> </td>
						<td><?php echo'  '.$row['vote_count'].' ' ?> </td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
	
	
	<!--showing Join-Secretary result -->
	<div class="news shadow" style="height:65% ; !important">
		<div style=" margin: 30px; width: 80% ; text-align:left ; padding-top: 18px; font-size:1.2em;">
			Vote result of <span style="color:green;">Join-Secretary</span> Candidates:
		</div>
		
		<div style="width:80%; height:100%; padding-left: 160px;!important ">
			<table class="table table-hover table-fixed">
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>Candidates name</th>
						<th>Number of Votes</th>
					</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result4) ){ ?>
					<tr>
						<td><?php echo'  '.$row['name'].' ' ?> </td>
						<td><?php echo'  '.$row['vote_count'].' ' ?> </td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
	
	
	<!--showing Vice-president result -->
	<div class="news shadow" style="height:90%;  !important">
		<div style=" margin: 30px; width: 80% ; text-align:left ; padding-top: 18px; font-size:1.2em;">
			Vote result of <span style="color:green;">executive-members</span> Candidates:
		</div>
		
		<div style="width:80%; padding-left: 160px;!important ">
			<table class="table table-hover table-fixed">
				<thead>
					<tr style="font-weight:900; background-color:#e9ecef;">
						<th>Candidates name</th>
						<th>Number of Votes</th>
					</tr>
				</thead>
				<tbody>
				<?php while($row = mysqli_fetch_array($result5) ){ ?>
					<tr>
						<td><?php echo'  '.$row['name'].' ' ?> </td>
						<td><?php echo'  '.$row['vote_count'].' ' ?> </td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
		
	

<!--Result part-->



<!--End of result part-->

    
  
    
  </body>
</html>