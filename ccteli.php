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

if ($int1==0 && $int2==0 && $ext1==0 && $ext2==0) {
  if ($int3+$int4<=3 && $ext3+$ext4<=5) {
    echo "Student is eligible.";

  }

  elseif ($int3+$int4==4 || $ext3+$ext4==6) {
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
