<?php

include('../connect.php');



$id = $_POST['delete_id'];
 

$sql = "DELETE FROM clinic  WHERE id = '$id' ";
$stmt = $conn->prepare($sql);
$stmt->execute();
echo '<script>alert("Data Deleted Successfully!")</script>';




$stmt->close();
$conn->close();



header("Location: clinic.php");






?>