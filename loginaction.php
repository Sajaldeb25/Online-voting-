<?php
	session_start();
	require('connection.php');

	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	$email = stripslashes($email);
	$pass = stripslashes($pass);
	$email = mysqli_real_escape_string($link,$email);
	$pass = mysqli_real_escape_string($link,$pass);

	$sql="SELECT * FROM voter WHERE email='$email' and password='$pass'" or die(mysqli_error());
	$result=mysqli_query($link,$sql) ;

	$count=mysqli_num_rows($result);

	//echo"$count";
	//echo"$email";
	//echo"$pass";
	if($count==1)
	{
		echo "sajal";
		$user = mysqli_fetch_assoc($result);
		$_SESSION['member_id'] = $user['v_id'];
		//echo' '.$user['member_id'].' ';
		echo' '.$_SESSION['member_id'].' ';
		
		header("location:homenext.php");
	}			

	else
	{
		header("location:home.php");
		echo"Email or password is in valid";
	}

?>