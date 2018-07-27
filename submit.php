<?php

	session_start();
	require'connection.php';

	$President = $_POST['vote1'];
	$Secretary = $_POST['vote2'];
	$V_president = $_POST['vote3'];
	$Treasurer = $_POST['vote4'];
	$J_Secretary = $_POST['vote5'];

	$Executive_members =implode(',', $_POST['check_list_sub']);  ////$sub = implode(',', $_POST['check_list_sub']);
	$EM = explode(',', $Executive_members); 

	//echo"$President</br>";
	//echo"$Secretary</br>";
	//echo"$V_president</br>";
	//echo"$Treasurer</br>";
	//echo"$J_Secretary</br>";

	$query = "UPDATE candidate SET vote_count = vote_count+1 where name = '$President' ";
    $result = mysqli_query($link,$query);
	
	//if($result)
		//echo"1////-->";
	
	$query2 = "UPDATE candidate SET vote_count = vote_count+1 where name = '$Secretary' ";
    $result = mysqli_query($link,$query2);
	
	$query3 = "UPDATE candidate SET vote_count = vote_count+1 where name = '$V_president' ";
    $result = mysqli_query($link,$query3);
	
	$query4 = "UPDATE candidate SET vote_count = vote_count+1 where name = '$Treasurer' ";
    $result = mysqli_query($link,$query4);
	
	$query5 = "UPDATE candidate SET vote_count = vote_count+1 where name = '$J_Secretary' ";
    $result = mysqli_query($link,$query5);

	foreach($EM as $val)
	{
		//echo"$val</br>";
			$query_ex = "UPDATE candidate SET vote_count = vote_count+1 where name = '$val' ";
			$result_ex = mysqli_query($link,$query_ex);
			
			//echo"inserted";
	}
	
	$set  = "UPDATE voter set complete_vote = '1' where v_id =' ".$_SESSION['member_id']."  '";
	$resultset = mysqli_query($link,$set);
	
	//header("location:no_vote.php");

?>
