<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "demodb");  
 function year($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM yeardb";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["yearid"].'">'.$row["years"].'</option>';  
      }  
      return $output;  
 }  
 function hod($connect)  
 {  
       
      $sql = "SELECT eeehod.id, eeehod.dept, eeehod.name, eeehod.dad, eeehod.dob, eeehod.gender, eeehod.mob, eeehod.address, eeehod.aadhar, eeehod.remarks FROM eeehod";	  
      $result = mysqli_query($connect, $sql);
      	echo "<table border='1'>
<tr>
<th>ID</th>
<th>DEPT</th>
<th>NAME</th>
<th>FATHER NAME</th>
<th>DOB</th>
<th>GENDER</th>
<th>MOBILE</th>
<th>ADDRESS</th>
<th>AADHAR</th>
<th>REMARKS</th>
</tr>";
 
      while($row = mysqli_fetch_array($result))  
      {  
   echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['dept'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['dad'] . "</td>";
  
   echo "<td>" . $row['dob'] . "</td>";

  echo "<td>" . $row['gender'] . "</td>";

  echo "<td>" . $row['mob'] . "</td>";

  echo "<td>" . $row['address'] . "</td>";
  
  echo "<td>" . $row['aadhar'] . "</td>";

  echo "<td>" . $row['remarks'] . "</td>";


  echo "</tr>";
	  }
 }
?>

<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
		   
		   <style>
		body{
    margin: 0;
    padding: 0;
    background: url(https://wallpapertag.com/wallpaper/full/f/5/d/266392-most-popular-background-1920x1080.jpg) no-repeat;
    background-size: cover;
    font-family: sans-serif;
}

h1{
	font-family: times new roman;
	color: orange;
}
select{
	position: absolute;
	top: 30px;
	left: 1000px;
	width: 70px;
	padding: 10px;
	margin-top: 10px;
	padding: 5px;
}
input{
	position: absolute;
    top: 30px;
	width: 90px;
	left: 1100px;
	padding: 5px;
	margin-top: 10px;
	border: none;
	font-weight: bold;
	outline: none;
	background: royalblue;
	color: white;}

 table{
	 
	  border: 1px solid #ccc;
	 clear: both;
 }  
 table th{
	 
	 background: black;
	 text-align: center;
	 width: 300px;
	 font-family: times new roman;
	 font-size: 16px;
	 color: white;
	 padding: 3px;
 }
 table td{
	 background: green;
	 color: white;
	 text-align: center;
	 width: 300px;
	 font-size: 15px;
	 font-family: times new roman;
	 padding: 3px;
 }
 
		</style>   
	  </head>  
      <body>  
           
<div class="container">		   
	<center><strong><h1> RECORDS OF HOD</h1></strong></center>

            <br /><br />

<div class="data">
                        <select name="year" id="year">  
                          <option>year</option>  
                          <?php echo year($connect); ?>  
                     </select>
                      
                   <div class="row" id="show_product">  
				   <?php echo hod($connect);?>
               </div>
		</div>
		</div>
		</body>
</html>


<script>  
 $(document).ready(function(){  
      $('#year').change(function(){  
           var yearid = $(this).val();  
           $.ajax({  
                url:"eeeload.php",  
                method:"POST",  
                data:{yearid:yearid},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>
