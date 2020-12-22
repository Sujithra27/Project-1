


<?php


$a = $_POST['regno'];
$b = $_POST['name'];
$c = $_POST['dob'];
$d = $_POST['gender'];
$e = $_POST['email'];
$f = $_POST['mob'];
$g = $_POST['aadhar'];
$h = $_POST['address'];
$i = $_POST['city'];
$j = $_POST['state'];
$k = $_POST['country'];
$l = $_POST['pin'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dude";
//create connection

$conn = new mysqli($servername, $username, $password, $dbname);
//check connection

if (!$conn){
	   die("Connection failed: " . mysqli_error());
}
echo "connected successfully";

$sql = "INSERT INTO  formview ('reg' , 'name' , 'dob', 'gender' , 'email' , 'mob', 'aadhar' , 'address' , 'city', 'state' , 'country' , 'pin' ) VALUES ('$a' , '$b' , '$c', '$d' , '$e' , '$f', '$g' , '$h' , '$i', '$j' , '$k' , '$l')";

if (mysqli_query($conn, $sql)) {
	echo "new record created successfully";
}else {
	echo "error: " . $sql . "<br>" . $conn-> mysqli_error();
}
$conn-> close();
?>





