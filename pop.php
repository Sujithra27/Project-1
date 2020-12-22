<?php

$connect = mysqli_connect("localhost","root","","demodb") or die ("could not connect");

if($_POST)
{
	$email = $_POST['email'];
	$sqlcom ="select * from regform where email='$email'";
	$query = mysqli_query($connect,$sqlcom)or die(mysqli_error("error to connect"));
	$count = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	
	if($count>0){
		 echo $row['password']; 
		 }
		 else{
			 echo "<script>alert('Email not found')</script>";
		 }
		 
	}


?>