<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$connect = mysqli_connect("localhost","root","","demodb") or die ("could not connect");

if($_POST)
{
	$email = $_POST['email'];
	$sqlcom ="select * from regform where email='$email'";
	$query = mysqli_query($connect,$sqlcom)or die(mysqli_error("error to connect"));
	$count = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	
	if($count>0){
		 
		 //echo $row['password'];
		  
		  require 'C:\PHPMailer-master\src\Exception.php';
		 require 'C:\PHPMailer-master\src\PHPMailer.php';
		 require 'C:\PHPMailer-master\src\SMTP.php';
		 
		 $mail = new PHPMailer(TRUE);
		 try{
		 
			 $mail->IsSMTP();
			 $mail->SMTPDebug = 0;
			 $mail->SMTPAuth= true;
			 $mail->SMTPsecure= 'ssl';
			 $mail->Host ='smtp.gmail.com';
			 $mail->Port = 587;
			 
			 $mail->Username= 'managestem1997@gmail.com';
			 $mail->Password='agestem#97';
			 $mail->CharSet = "UTF-8";
			 $mail->SetFrom('managestem1997@gmail.com','Secrity-mail');
			 $mail->AddAddress($email);
			 
			 $mail->IsHTML(true);
			 $mail->Subject= 'Forgot Password';
			 $mail->Body= "Hi $email your password is : {$row['password']}";
			 $mail->AltBody= "Hi $email your password is : {$row['password']}";
			 if (!$mail->Send()) {
            $mail->ErrorInfo;
          } else {
               echo 'Your Password has been sent on your Email ID';;
             }
			  
		 }catch(Exception $e)
		 {
			 echo 'Email could not be send';
			 echo 'Mailer Error: ' . $mail->ErrorInfo;
		 } 
	}else{
			 echo "<script>alert('Email not found')</script>";
		 }
		 
	}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
        <style>
		body{
  margin: 0;
  padding: 10px;
  background: url(https://kbstechnology.com/sites/default/files/TechnologyConsulting.png) no-repeat;
  background-size: cover;
  font-family: sans-serif;
}
.loginpage{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 10px;
    height: 500px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 25px 25px rgba(0,0,0,.5);
    border-radius: 10px;
 }
 .form h2{
     color: gold;
 } 
  
.form{
    position: relative;
    z-index: 1;
    background: transparent;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 60px;
    text-align: center;
    
}
.form input{
    font-family: "Roboto",sans-serif;
    outline: 1;
    background: whitesmoke;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 16px;
}
.form button{
    font-family: serif;
    text-transform: uppercase;
    outline: 0;
    background: blue;
    width: 100%;
    border: 0;
    padding: 15px;
    color: black;
    font-size: 16px;
    
}
.form button:hover,.form button:active{
    background: white;
}
.form .message{
    margin: 15px 0 0;
    color: red;
    font-size: 14px
   
}
.form .message a{
    color: white;
    text-decoration: none;
    font-size: 14px;
}

.form a{
    margin: 15px 0 0;
    color: palegreen;
    font-size: 14px
}

 .form .regform {
    display:none;
 }

 .pass h2{
     color: gold;
 }
 .pass{
      position: relative;
    z-index: 1;
    background: transparent;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 60px;
    text-align: center;
 }
 .pass button{
     font-family: serif;
    text-transform: uppercase;
    outline: 0;
    background: blue;
    width: 100%;
    border: 0;
    padding: 5px;
    color: black;
    font-size: 16px;
 }
 .pass button:hover,.form button:active{
    background: gold;
}
 .pass input{
    font-family: "Roboto",sans-serif;
    outline: 1;
    background: whitesmoke;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

.pass a{
    margin: 15px 0 0;
    color: palegreen;
    font-size: 14px
}
		</style>
		
</head>
<body>

<div class="loginpage">
<form class="pass" action="" method="POST">
<h2>Forgot Password</h2><br/><br/>

<input type="email" name="email" placeholder="EMAIL ID"/><br/><br/>

<input type="submit" onclick="forgot()"><br/><br/>

<a href="index.html">BACK TO LOGIN </a>

</div>
</body>
</html>









