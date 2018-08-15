<?php
	session_start();
	require('connection.php');

	if(empty($_SESSION['admin_id'])){
		header("location:index.php");
	}

	$email=$_POST['email'];
	$pass=$_POST['pass'];

	
	$email = stripslashes($email);
	$pass = stripslashes($pass);
	$email = mysqli_real_escape_string($link,$email);
	$pass = mysqli_real_escape_string($link,$pass);
	
	echo"$email";
	echo"$pass";

	$sql="SELECT * FROM admin WHERE email='$email' and pass='$pass'" or die(mysqli_error());
	$result=mysqli_query($link,$sql) ;

			
	$count=mysqli_num_rows($result);
	

	if($count==1)
	{
		echo "sajal   ff";
		
		$user = mysqli_fetch_assoc($result);
		$_SESSION['admin_id'] = $user['id'];
		echo' '.$_SESSION['admin_id'].' ';
		
		header("location:admin_home.php");
	}
			
	else
	{
		header("location:index.php");
	}

?>
