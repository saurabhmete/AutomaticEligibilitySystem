<?php
$checked_arr1 = $_POST['external'];
$count1 = count($checked_arr1);
echo "There are ".$count1." external are checked";
$checked_arr = $_POST['internal'];
$count = count($checked_arr);
echo "There are ".$count." internal are checked";
?>
