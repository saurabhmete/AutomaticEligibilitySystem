<?php
session_start();

$ausername = $_POST['username'];
$apassword = $_POST['password'];

$_SESSION["addmision_no"] = $ausername;

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





$result = mysqli_query($conn,"SELECT * FROM student_db WHERE addmision_no='$ausername' AND stud_pass='$apassword'");

while($row = mysqli_fetch_array($result)) {
$var1=$row['addmision_no'];
$var2=$row['stud_pass'];

}


if($ausername==$var1)
{
echo "<script>alert('Login Sucessfull');window.location.href='student_main.html';</script>";
}
else {
echo "<script>alert('Inncorrect Credentials. Please Try again');window.location.href='wya.html';</script>";
}

$conn->close();
?>
