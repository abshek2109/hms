<?php
    
	include("connection.php");
	error_reporting(0);


if(isset($_POST['submit']))
{
	$username = $_POST['email'];
	$password = $_POST['pass'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$mobile = $_POST['mobile'];


	$sql = $mysqli->query("INSERT INTO `patreg`(`name`, `email`, `mobile`, `age`, `pass`) VALUES ('$name','$username','$mobile','$age','$password')");
	
	//echo "<script>alert('Registered Successfully')</script>";

	header("Location:http://localhost/hospital/patlog.html");

}
?>