<?php


$name = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];


echo"$name</br>";
echo"$pass</br>";
echo"$email</br>";

header("location:home.php");


?>