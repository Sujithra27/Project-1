
<html>
<head>
<style>
body{
  margin: 0;
  padding: 10px;
  background: url(https://rainbow-int-franchise.co.uk/wp-content/uploads/read-3048651_1920-1000x591.jpg) no-repeat;
  background-size: cover;
  font-family: sans-serif;
}

 form h2{
     color: Navy;
 } 
  
form{
    position: absolute;
    z-index: 1;
    background: transparent;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 60px;
    text-align: center;
    
}
form input{
    font-family: "Roboto",sans-serif;
    outline: 1;
    background: whitesmoke;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 16px;
	color: Red;
}


</style>
</head>
<body>
<form action ='changepass2.php' method='POST'>
<h2>CHANGE PASSWORD</h2><br>
 Old password: <input type ='text' name ='oldpassword'></br>
 
 New password: <input type='password' name='newpassword'></br>
 
 Repeat new password <input type='password' name='repeatnewpassword'></br>
 
 <input type='submit' name='submit' value='Change password'></br>
 
 <a href="messagephp.php"> BACK </a>
</form>




</body>
</html>