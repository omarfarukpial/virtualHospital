<?php
include('../connect.php');


$cid = $_POST['cid'];
$did = $_POST['did'];
$startTime = $_POST['docStartTime'];
$endTime = $_POST['docEndTime'];
$cname = $_POST['cname'];


echo $startTime;
echo $endTime;


$sql = "UPDATE clinicdoclist SET doctor_start_time = '$startTime', doctor_end_time = '$endTime'
        WHERE clinic_id = '$cid' AND doctor_id = '$did'";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:./doctorList.php?cid=$cid&cname=$cname");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }





$sql -> close();
$conn -> close();


?>