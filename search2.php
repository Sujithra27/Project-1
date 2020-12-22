
<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "demodb");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM civilhod
  WHERE name LIKE '%".$search."%'
  OR dept LIKE '%".$search."%' 
  OR aadhar LIKE '%".$search."%' 
  OR mobile LIKE '%".$search."%' 
  OR address LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM civilhod ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>Dept</th>
     <th>Aadhar</th>
     <th>Mobile</th>
     <th>Address</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["dept"].'</td>
    <td>'.$row["aadhar"].'</td>
    <td>'.$row["mob"].'</td>
    <td>'.$row["address"].'</td>
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