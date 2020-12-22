

<?php

session_start();



$conn = mysqli_connect('localhost' , 'root' , '');
mysqli_select_db($conn , 'demodb');

$x = $_POST['username'];
$y = $_POST['password'];


$s = "select * from regform where name = '$x' && password = '$y' ";
$result = mysqli_query($conn , $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $x ;
	header('location: messagephp.php');
	}else {
		header('location: logreg.php');
		echo "Password is incorrect";
		
	}


?>