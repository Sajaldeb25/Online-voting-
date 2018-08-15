<?php
	session_start();
	require('connection.php');
	
	if(empty($_SESSION['admin_id'])){
		header("location:index.php");
	} 

	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phn=$_POST['phone'];
	$position=$_POST['position'];
	$qualification =$_POST['qualification'];
	
	echo"$name </br>";
	echo"$email</br>";
	echo"$phn</br>";
	echo"$position</br>";
	echo"$qualification</br>";
	
	
		// for image1
		$file=$_FILES['image1']['tmp_name'];
		$image12= addslashes(file_get_contents($_FILES['image1']['tmp_name']));
		$image_name12= addslashes($_FILES['image1']['name']);
		move_uploaded_file($_FILES["image1"]["tmp_name"],"images/" . $_FILES["image1"]["name"]);
		$location1="images/" . $_FILES["image1"]["name"];
		
		
		// for image2;
		$file=$_FILES['image2']['tmp_name'];
		$image23= addslashes(file_get_contents($_FILES['image2']['tmp_name']));
		$image_name23= addslashes($_FILES['image2']['name']);
		move_uploaded_file($_FILES["image2"]["tmp_name"],"images/" . $_FILES["image2"]["name"]);	
		$location2="images/" . $_FILES["image2"]["name"];
		
		
		// inserting sql
		$sql = "INSERT INTO candidate(name, c_position,photo,logo,email,phone,qualification) 
			VALUES ('$name','$position','$location1','$location2','$email','$phn','$qualification')";
		
		
		$save=mysqli_query($link,$sql);
		
		header("Location: manage-candidate.php");
	
		exit();


?>
