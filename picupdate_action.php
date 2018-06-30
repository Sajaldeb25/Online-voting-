<?php
    require 'connection.php';
    
	$id = $_POST['id'];
	
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}
    else{
		$file=$_FILES['image']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name= addslashes($_FILES['image']['name']);
				
		move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
				
		$location="images/" . $_FILES["image"]["name"];
		
		$sql = "UPDATE tbcandidates set  pic='$location' WHERE candidate_id=$id";
		$save=mysqli_query($link,$sql);
				
				
		header("location: pic_update.php");
		exit();					
    }
        
?>