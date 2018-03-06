<style>
<?php include 'sol.css'; ?>
</style>
<table>
  <tr>
    <th>Eligible Admission No</th>
  </tr>
<tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "aes";
$conn = new mysqli($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM student_db");
while( $row = mysqli_fetch_assoc( $result ) )
{
  $var1 = $row['sem3_int'];
  $var2 = $row['sem3_ext'];
  $var3 = $row['sem4_int'];
  $var4 = $row['sem4_ext'];
  $var5 = $row['sem5_int'];
  $var6 = $row['sem5_ext'];
  $var7 = $row['sem6_int'];
  $var8 = $row['sem6_ext'];


if($var1 == 0 && $var2 == 0 && $var3==0 && $var4 ==0)
{
  if(($var5+$var7)<4 && ($var6+$var8)<6)
    {echo
     "<tr>
      <td>{$row['addmision_no']}</td>
  	</tr>\n";}

  }
}

mysqli_close($conn);
?>
</table>
