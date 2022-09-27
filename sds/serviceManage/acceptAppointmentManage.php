
<?php

include('../../connect.php');
date_default_timezone_set("Asia/Dhaka");

$aid = $_POST['aid'];
$appointmenttime = $_POST['appointmentDateTime'];


$sql = "UPDATE appointmentRequest
SET appointmenttime = '$appointmenttime', status = 'accepted'
WHERE appointmentrequest_id = '$aid'";
$conn->query($sql);


echo "Appointment Requested Accepted!";
header('Refresh: 3; URL=requestedAppointments.php');








?>
