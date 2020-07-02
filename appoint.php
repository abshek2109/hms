<?php
    
	$server="localhost";
	$username="root";
	$password="";
	$db="hms";


	$conn = mysqli_connect($server,$username,$password,$db) or die ("connection failed");


	session_start();


	$username = $_POST['Email'];
	$name = $_POST['Name'];
	$doc = $_POST['doc'];
	$mobile = $_POST['mobile'];
	$timing = $_POST['timing'];
	$day =  $_POST['day'];
	$symptoms =  $_POST['symptoms'];
	$gender =  $_POST['Gender'];
	$date =  $_POST['date'];

	$sql="INSERT INTO appointments (`doc`, `timing`, `day`, `symptoms`, `name`, `email`, `phone`, `gender`, `date`) VALUES ('$doc', '$timing', '$day', '$symptoms', '$name', '$username', '$mobile', '$gender', '$date')";

	
if(mysqli_query($conn,$sql)){

	$_SESSION["user"] = $name;
	header("Location:http://localhost/hospital/doctors.php");
;
	}else{

header("Location:http://localhost/hospital/appoint1.php");
;
}




?>