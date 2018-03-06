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


$selected_sem = $_POST['sem'];
$admsn_no = $_POST['addno'];
$sem_int_str = "sem".$selected_sem."_int";
$sem_ext_str = "sem".$selected_sem."_ext";
$spass = $_POST['stpass']??"";
$stud_pass="stud_pass";




$checked_arr1 = $_POST['internal']??0;


for ($i=0; $i <count($checked_arr1) ; $i++) {
  if($checked_arr1[$i]==0)
  {

    $sem_int=0;
  }

  else{
    $sem_int = count($checked_arr1);
  }
}


$checked_arr = $_POST['external']??0;

for ($i=0; $i <count($checked_arr) ; $i++) {
  if($checked_arr[$i]==0)
  {

    $sem_ext=0;
  }

  else{
    $sem_ext = count($checked_arr);
  }
}
$adsql=mysqli_query($conn,"SELECT * FROM student_db where addmision_no='$admsn_no'");
if(mysqli_affected_rows($conn)==0)
{$sql = "INSERT INTO student_db (addmision_no,stud_pass,$sem_ext_str, $sem_int_str)
VALUES ('$admsn_no','$spass',$sem_ext,$sem_int)";}
else
{
    $sql = "UPDATE student_db SET $sem_ext_str=$sem_ext, $sem_int_str=$sem_int, $stud_pass='$spass' WHERE addmision_no='$admsn_no'";

}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
