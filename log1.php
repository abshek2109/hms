<?php

	$server="localhost";
	$username="root";
	$password="";
	$db="hms";


	$conn = mysqli_connect($server,$username,$password,$db) or die ("connection failed");


	session_start();


	$username = $_POST['email'];
	$password = $_POST['pass'];


	$result = mysqli_query($conn,"SELECT * FROM patreg WHERE email LIKE '{$username}' AND pass LIKE '{$password}' LIMIT 1");
	
$check = mysqli_fetch_array($result);
if(isset($check)){

	$_SESSION["user"] = $username;

header("Location:http://localhost/hospital/doctors.php");

}else{

header("Location:http://localhost/hospital/patlog.html");
}


	
?>