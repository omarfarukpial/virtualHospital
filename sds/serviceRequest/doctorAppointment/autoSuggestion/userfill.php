<?php 
include('../../../../connect.php');

$username = $_GET["username"];

$sql = "SELECT * FROM userinfo WHERE username = '$username'";
$userinfo = $conn->query($sql)->fetch_assoc();

exit(json_encode($userinfo));



?>