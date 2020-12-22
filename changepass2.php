<?php
session_start ();
header ('location: changepass.php');
$user = @$_SESSION['username'];
if ($user)
{
//user is logged in
if (@$_POST['submit'])
{
//check fields
$oldpassword = (@$_POST['oldpassword']);
$newpassword = (@$_POST['newpassword']);
$repeatnewpassword = (@$_POST['repeatnewpassword']);
//check password against db
//connect to db
$connect = mysql_connect ("localhost","root","") or die();
mysql_select_db("demodb")or die();
$queryget = mysql_query ("SELECT password FROM regform WHERE name='$user'")or die ("Query didnt work");
$row = mysql_fetch_assoc($queryget);
$oldpassworddb = $row ['password'];
//check passwords
if($oldpassword==$oldpassworddb)
{
//check the new password
if ($newpassword==$repeatnewpassword)
{
//succes
//change password in db
$querychange = mysql_query ("
UPDATE regform SET password='$newpassword' WHERE name='$user'
");
session_destroy();
header ('location: changepass.php');
die ("Your password has been changed.<a href='logreg.php'>Return </a>to the main page");
}
else 
 die ("New password dont match!");
}
else 
 die("Old password doesnt match!");
}
}

else
   die ("You must be logged in to change your password");
?>
