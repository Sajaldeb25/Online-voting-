<?php
	session_start();
	require('connection.php');

	
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
		$image= addslashes(file_get_contents($_FILES['image1']['tmp_name']));
		$image_name= addslashes($_FILES['image1']['name']);
		move_uploaded_file($_FILES["image1"]["tmp_name"],"images/" . $_FILES["image1"]["name"]);
		$location1="images/" . $_FILES["image1"]["name"];
		
		
		// for image2;
		$file=$_FILES['image2']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['image2']['tmp_name']));
		$image_name= addslashes($_FILES['image2']['name']);
		move_uploaded_file($_FILES["image2"]["tmp_name"],"images/" . $_FILES["image2"]["name"]);	
		$location2="images/" . $_FILES["image2"]["name"];
		
		
		// inserting sql
		$sql = "INSERT INTO tbcandidates(candidate_name, candidate_position,pic,logo,email,phn,qualification) 
			VALUES ('$name','$position','$location1','$location2','$email','$phn','$qualification')";
		
		
		$save=mysqli_query($link,$sql);
		
		if($save)
			echo"saved";
		else 
			echo"not saved, problem occurred";


?>