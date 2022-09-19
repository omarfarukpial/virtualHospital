<?php
include('connect.php');
// Get the user id
$username = $_REQUEST['username'];




	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($conn, "SELECT name, age, gender, phone, location
 FROM userinfo WHERE username='$username'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$name = $row["name"];
	$age = $row["age"];
	$gender = $row["gender"];
	$phone = $row["phone"];
	$location = $row["location"];



// Store it in a array
$result = array("$name", "$age", "$gender", "$phone", "$location");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
