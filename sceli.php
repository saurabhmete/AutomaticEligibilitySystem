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
$var1 = $row['sem1_int'];
$var2 = $row['sem1_ext'];
$var3 = $row['sem2_int'];
$var4 = $row['sem2_ext'];
if(($var1+$var3)<4 && ($var2+$var4)<6)
  {echo
   "<tr>
    <td>{$row['addmision_no']}</td>
	</tr>\n";}

}

mysqli_close($conn);
?>
</table>
