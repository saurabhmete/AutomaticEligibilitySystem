<?php
session_start();

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
$admsn_no = $_SESSION["addmision_no"];

$sql="SELECT sem1_int from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $int1 =$row[0];
    }
$int->close();

$sql="SELECT sem1_ext from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $ext1 =$row[0];
    }
$int->close();

$sql="SELECT sem2_int from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $int2 =$row[0];
    }
$int->close();

$sql="SELECT sem2_ext from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $ext2 =$row[0];
    }
$int->close();

if ($int1+$int2<=3 && $ext1+$ext2<=5) {
  echo "You are eligible.";

}

elseif ($int1+$int2<=4 || $ext1+$ext2<=6) {
  echo "You are not eligible but can take provisional admission.";

}
else {
  echo "You are not eligible";
}

$conn->close();
?>
