<?php
include('../../connect.php');
$did = $_GET['did'];

$sql = "UPDATE doctor
        SET verified = 'yes'
        WHERE id = '$did'";
$conn->query($sql);

echo '<script>alert("Doctor is marked as verified!")</script>';

header("Refresh:0; url=doctorVerifyReq.php");


$conn -> close();





?>