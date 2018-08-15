<?php
	session_start();
	require('connection.php');
	
	if(empty($_SESSION['admin_id'])){
		header("location:index.php");
	} 
	$id = $_GET['id'];
	
	$name          =$_POST['name'];
	$email         =$_POST['email'];
	$phn           =$_POST['phone'];
	$position      =$_POST['position'];
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
		$sql = "UPDATE candidate set name='$name', c_position='$position' ,photo='$location1' 
		,logo='$location2' , email='$email' ,phone='$phn',qualification='$qualification' where c_id = '$id' ";
		
		$save=mysqli_query($link,$sql);
		
		header("Location: manage-candidate.php");
	
		exit();


?>