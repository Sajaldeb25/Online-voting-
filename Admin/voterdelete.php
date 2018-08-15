
<?php
	session_start();
	require('connection.php');
	
	if(empty($_SESSION['admin_id'])){
		header("location:index.php");
	}
	
	$id = $_GET['id'];
		 
		 
	$result = mysqli_query( $link," DELETE FROM voter WHERE id='$id' " )
	 or die("The position does not exist ... \n"); 

	header("Location: manage-voters.php");
	
	exit();
    
?>
