<?php
	session_start();
	require('connection.php');


	$email=$_POST['email'];
	$pass=$_POST['pass'];

	
	$email = stripslashes($email);
	$pass = stripslashes($pass);
	$email = mysql_real_escape_string($email);
	$pass = mysql_real_escape_string($pass);
	
	echo"$email";
	echo"$pass";

	$sql="SELECT * FROM tbadministrators WHERE email='$email' and password='$pass'" or die(mysqli_error());
	$result=mysqli_query($link,$sql) ;

			
	$count=mysqli_num_rows($result);
	

	if($count==1)
	{
		echo "sajal   ff";
		
		$user = mysqli_fetch_assoc($result);
		$_SESSION['admin_id'] = $user['admin_id'];
		echo' '.$_SESSION['admin_id'].' ';
		
		header("location:admin_home.php");
	}
			
	else
	{
		header("location:index.php");
	}

?>