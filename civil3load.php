<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "demodb");  
 if(isset($_POST["yearid"]))  
 {  
      if($_POST["yearid"] != '')  
      {  
           $sql = "SELECT * FROM civilstaff WHERE yearid = '".$_POST["yearid"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM civilstaff";  
      }  
      $result = mysqli_query($connect, $sql)or die( mysqli_error($connect)); ;  
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
      $connect->close();
 }  
 ?>