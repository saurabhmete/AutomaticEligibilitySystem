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
$admsn_no = $_POST['atext'];



$sql="SELECT sem3_int from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $int3 =$row[0];
    }
$int->close();

$sql="SELECT sem3_ext from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $ext3 =$row[0];
    }
$int->close();

$sql="SELECT sem4_int from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $int4 =$row[0];
    }
$int->close();

$sql="SELECT sem4_ext from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $ext4 =$row[0];
    }
$int->close();







$sql="SELECT sem5_int from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $int5 =$row[0];
    }
$int->close();

$sql="SELECT sem5_ext from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $ext5 =$row[0];
    }
$int->close();

$sql="SELECT sem6_int from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $int6 =$row[0];
    }
$int->close();

$sql="SELECT sem6_ext from student_db where addmision_no='$admsn_no'";
$int = $conn->query($sql);
/* fetch object array */
    while ($row = $int->fetch_row()) {
        $ext6 =$row[0];
    }
$int->close();

if ($int3==0 && $int4==0 && $ext3==0 && $ext4==0)
{
  if ($int5+$int6<=3 && $ext5+$ext6<=5) {
    echo "Student is eligible.";

  }

  elseif ($int5+$int6==4 || $ext5+$ext6==6) {
    echo "Student is not eligible but can take provisional admission.";

  }
  else {
    echo "Student is not eligible";
  }
}

else {
  echo "Student is not eligible";
}

$conn->close();
?>
