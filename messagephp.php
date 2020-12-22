<?php

session_start();
if(!isset($_SESSION['username'])){
header ('location: logreg.php');

}

?>



<html>
    <head>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 
		<style>
		
		body{
    margin: 0;
    padding: 0;
    background: url(https://www.roomtoreward.org/wp-content/uploads/office-blur.jpg) no-repeat;
    background-size: cover;
    font-family: sans-serif;
}
h1{
    padding: 10px;
    text-align: center;
    color: Navy;
	font-family: sans-serif;
}
ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
}
ul li{
    float: left;
    width: 224px;
    height: 50px;
    background-color: black;
    opacity: .8;
    line-height: 40px;
    text-align: center;
    font-size: 20PX
}


ul li a{
    text-decoration: none;
    color: white;
    display: block;
}
ul li a:hover{
    background-color: silver;
}
ul li ul li{
    display: none;
}
ul li:hover ul li{
    display: block;
}
form.eg{
  position: absolute;
	top: 300px;
	width: 900px;
	left: 250px;
 padding: 10px;
  font-size: 17px;
  float: left;
  
}

form.example button {
	position: absolute;
	top: 310px;
	width: 80px;
	right: 485px;
  float: left;
 padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 2px solid #2196F3;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
form.change{
	position: absolute;
	top: 30px;
	color: orange;
	left: 1000px;
	background: orange;
}

	
</style>
       
    </head>
    <body>
	<script>
		document.cookie = "background: url(https://thimpress.com/wp-content/uploads/2017/10/ios_7_galaxy_wallpaper_for_desktop_by_iar7-d6av9ap-1.png) no-repeat";
		</script>
	<h1><b id="welcome">WELCOME! <i><?php echo $_SESSION['username']; ?></i></b></h1>

               <ul>
                </li>
                <li><a href="#">CSE</a>
                    <ul>
                       <li><a href="cseph.php">Hod</a></li>
                       <li><a href="cseph2.php">Staff</a></li>
                       <li><a href="cseph3.php">Student</a></li>
                   </ul>
                </li>
                <li><a href="#">CIVIL</a>
                <ul>
                       <li><a href="civilph.php">Hod</a></li>
                       <li><a href="civilph2.php">Staff</a></li>
                       <li><a href="civilph3.php">Student</a></li>
                   </ul>
                
                </li>
                <li><a href="#">ECE</a>
                <ul> 
                       <li><a href="eceph.php">Hod</a></li>
                       <li><a href="eceph2.php">Staff</a></li>
                       <li><a href="eceph3.php">Student</a></li>
                   </ul>
                </li>
                <li><a href="#">EEE</a>
                    <ul>
                       <li><a href="eeeph.php">Hod</a></li>
                       <li><a href="eeeph2.php">Staff</a></li>
                       <li><a href="eeeph3.php">Student</a></li>
                   </ul>
                </li>
                
                <li><a href="#">IT</a>
                <ul>
                       <li><a href="itph.php">Hod</a></li>
                       <li><a href="itph2.php">Staff</a></li>
                       <li><a href="itph3.php">Student</a></li>
                   </ul>
                </li>
                <ul>
				<li>
                <ul>
                    <a href="logout.php">LOGOUT</a>  
                   </ul>
                </li>
                <ul>
            </ul>
        <form class="change">
		<a href="changepass.php">Change Password</a>
		</form>
		
		
		
      <form class="eg" method="POST">
		
   
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search....." class="form-control" />
    </div>
   </div>
   <br/>
   <div id="result"></div>
  </div>
  </form>
		
        
	
		</body>
		 </html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"csearch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
 
 });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
  
 });
});
</script>