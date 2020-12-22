
<html>
    <head>
        <title>MANAGEMENT SYSTEM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
		<style>
		body{
  margin: 0;
  padding: 10px;
  background: url(http://www.hdnicewallpapers.com/Walls/Big/Creative/Blue_and_White_Creative_Wall_Paint_HD_Wallpaper_Background.jpg) no-repeat;
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
	color: red;
	
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
		<script>
		document.cookie = "background=url(http://www.hdnicewallpapers.com/Walls/Big/Creative/Blue_and_White_Creative_Wall_Paint_HD_Wallpaper_Background.jpg) no-repeat";
		</script>
            <div class="form">
                
                <form class="regform" action="create.php" method="POST">
                    
                    <h2>REGISTER</h2>
                    <input type="text" name="username" placeholder="Name" required/>
				    <input type="text" name="email" placeholder="Email ID" required/>
                    <input type="password" name="password" value="" id="myInput"placeholder="Password" required/>
				<input type="checkbox" onclick="myFunction()"><p style="position:absolute; color:orange; font-size:15px;top: 300px;">Show Password</p>
				 <button type="submit">create</button>
                    <p class="message">Already registered ? <a href="#">Login</a> </p>
					<script>
       	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}	</script>  
                     </form>
					 
                <form class="loginform" action="validation.php" method="POST">
                    <h2>LOGIN</h2>
                    <input type="text"  name="username"  placeholder="Username" required/><br><br>
                    <input type="password" name="password" value="" id="myInput" placeholder="Password" required/><br><br>
					
                    <button type="submit">login</button>
                      <a href="mail.php">Forgot password </a><br><br>
					  
					  
                     <p class="message">Not Registered? <a href="#"> Register</a> </p>
              </form>
    
            </div>
        </div>
        
        <script>
            $('.message a').click(function(){
            $('form').animate({height:"toggle", opacity:"toggle"},"slow"); });
           
          </script> 
		  
    </body>
</html>

