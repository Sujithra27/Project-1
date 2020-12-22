
<?php

$connect = mysqli_connect("localhost", "root", "", "demodb");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "(SELECT * FROM civilhod 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM civilstaff 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM civilstudent
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%')
		   UNION
		   (SELECT * FROM csehod 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM csestaff 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM csestudent
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%')
		   UNION
		   (SELECT * FROM ecehod 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM ecestaff 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM ecestudent
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%')
		   UNION
		   (SELECT * FROM eeehod 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM eeestaff 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM eeestudent
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%')
		   UNION
		   (SELECT * FROM ithod 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM itstaff 
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%') 
           UNION
           (SELECT * FROM itstudent
            WHERE id LIKE '%".$search."%'
            OR dept LIKE '%".$search."%' 
             OR year LIKE '%".$search."%' 
           OR name LIKE '%".$search."%' 
           OR address LIKE '%".$search."%'
		   OR mob LIKE '%".$search."%')";

}else{
return  ;
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)

{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>DEPT</th>
     <th>YEAR</th>
     <th>NAME</th>
     <th>ADDRESS</th>
	 <th>MOBILE</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["dept"].'</td>
    <td>'.$row["year"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["address"].'</td>
	<td>'.$row["mob"].'</td>
   </tr>
  ';
 }
 
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>