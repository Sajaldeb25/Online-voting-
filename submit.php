<?php
if(! $_POST['vote1'])
	$President = " ";
else
	$President = $_POST['vote1'];

$Secretary = $_POST['vote2'];
$V_president = $_POST['vote3'];
$Treasurer = $_POST['vote4'];
$J_Secretary = $_POST['vote5'];
$Executive_members = $_POST['vote6'];

echo"$President</br>";
echo"$Secretary</br>";
echo"$V_president</br>";
echo"$Treasurer</br>";
echo"$J_Secretary</br>";
echo"$Executive_members</br>";



?>