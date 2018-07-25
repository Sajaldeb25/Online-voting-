
<?php
	session_start();
	require('connection.php');
	
	$id = $_GET['id'];
		 
		 
	$result = mysqli_query( $link," DELETE FROM tbmembers WHERE member_id='$id' " )
	 or die("The position does not exist ... \n"); 

	header("Location: manage-voters.php");
	
	exit();
    
?>