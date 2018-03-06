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
$num_user = "";
$spass = $_POST['stpass']??"";


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
{echo "<script>alert('No Student Found. Please Add Student Data First');window.location.href='admin_main.html';</script>";}
else
{
    $sql = "UPDATE student_db SET $sem_ext_str=$sem_ext, $sem_int_str=$sem_int, stud_pass='$spass' where addmision_no='$admsn_no'";

}


    //
    // $sql1="SELECT count(*) AS $num_user
    // FROM   student_db
    // WHERE  addmision_no = $admsn_no";
    // if($num_user==0)
    // {
    //     echo "<script>alert('No Student Found. Please Add Student Data First');window.location.href='updatedata.html';</script>";
    //
    // }
    // else
    // {
    // $sql = "UPDATE student_db SET $sem_ext_str=$sem_ext, $sem_int_str=$sem_int where addmision_no=$admsn_no";
    // }


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
