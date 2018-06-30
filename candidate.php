<?php 
	require'connection.php';
	$query = "SELECT * FROM tbcandidates "; 
    $result = mysqli_query($link,$query);
?>

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
    <link href="assets/css/news.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
	
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

		
		<div style="padding-left:210px; padding-top:20px; font-size:30px; height:60px; width:900px; ">All candidates for the Election </div>

		
		<?php while($row = mysqli_fetch_array($result) ){ ?>
		
		<div class="news shadow">
			<!-- DIV-1 -->
			<div style=" float: left; width: 50%; padding: 25px;  height: 270px;">
				<div class="card testimonial-card">

					<div class="avatar mx-auto white">
						<?php echo'<img src="'.$row['pic'].'" class="rounded-circle" style="height:100px !important">' ?>
					</div>

					<div class="card-body">
						<h4 style="text-align:center; color:green;"><?php echo' '.$row['candidate_name'].' ' ?></h4>
						<hr>
						 <p style="text-align:center;" > <?php echo' '.$row['email'].' ' ?>  </br> <?php echo' '.$row['phn'].' ' ?>  </p>
					</div>
				</div>
			
			
			</div>
			<!-- DIV-2 -->
			<div style=" float: left; width: 50%; padding: 25px;  height: 300px">
				<div class="card testimonial-card">

					<div class="avatar mx-auto white">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" style="height:100px; width:100px">
					</div>

					<div class="card-body">
						<h5 style="text-align:center;">Logo</h5>
						<hr>
						 <p style="text-align:center;" >Candidates of:</br> <?php echo' '.$row['candidate_position'].' ' ?> </p>
					</div>
				</div>
			</div>
			
		</div>
		
		<?php } ?>
		
           
      
    
  </body>
</html>