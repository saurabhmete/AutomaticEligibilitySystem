<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ausername = $_POST['username'];
$apassword = $_POST['password'];


$result = mysqli_query($conn,"SELECT * FROM classc WHERE cid='$ausername' AND cpass='$apassword'");



          while($row = mysqli_fetch_array($result)) {
          $var1=$row['cpass'];
          $var2=$row['cid'];

          }


if($ausername==$var2)
{
  echo "<script>alert('Login Sucessfull');window.location.href='cc_main.html';</script>";
}
else {
  echo "<script>alert('Inncorrect Credentials. Please Try again');window.location.href='wya.html';</script>";
}

$conn->close();
?>
