<?php
	session_start();
	require('connection.php');


	$code=$_POST['code'];

	$code = mysql_real_escape_string($code);

	$sql="SELECT * FROM tbmembers WHERE password='$code' " or die(mysqli_error());
	$result=mysqli_query($link,$sql) ;
	

	if($result)
	{
		echo "sajal";
		//$user = mysqli_fetch_assoc($result);
		//$_SESSION['member_id'] = $user['member_id'];
		header("location:voteform.php");
	}
			
	else
	{
		echo "Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a>";
	}

?>