

<?php

session_start();
header ('location: logreg.php');


$conn = mysqli_connect('localhost' , 'root' , '');
mysqli_select_db($conn , 'demodb');

$x = $_POST['username'];
$y = $_POST['email'];
$z = $_POST['password'];



$s = "select * from regform where name = '$x'";
$result = mysqli_query($conn , $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Username already taken";
	}else {
		$reg = "INSERT INTO regform(name ,email, password) VALUES ('$x' , '$y' , '$z')";
		mysqli_query($conn , $reg);
		echo "User Registered Successfull";
	}


?>




