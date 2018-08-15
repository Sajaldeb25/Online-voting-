
<?php

	session_start();
	require'connection.php';
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM voter where v_id = '$id'";
    $result = mysqli_query($link,$query);
	
	while($row = mysqli_fetch_array($result) ){
		$to  = $row['email'];
	}
	

    //$to = 'sajal.debnath@yahoo.com';


    $message = 'Your code is: '; 
	
	$value = rand(1,5000);
	$value  .= chr(rand(67,90));
	$value  .= chr(rand(67,90));
	$value  .= rand(1,5000);
	$value  .= chr(rand(67,90));
	
    $message .= $value; 
	$message .= '. Use it for vote confirmation.';


    if(mail($to,'VOTE CODE', $message,'From: t.cse.bu.1997.19.09@gmail.com'))
	{
		$sql = "UPDATE voter set rand_code='$value' where v_id = '$id' ";
		$save=mysqli_query($link,$sql);
		if($save)
			header("Location: manage-voters.php");
		else 
			echo"not inserted";
		
        //echo 'Your mail has been sent successfully.';

    } else{

        echo 'Unable to send email. Please try again.';

    }
?>

