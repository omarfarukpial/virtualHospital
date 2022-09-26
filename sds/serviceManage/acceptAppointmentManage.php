
<?php

include('../../connect.php');

$aid = $_POST['aid'];
$appointmenttime = $_POST['appointmentDateTime'];


$sql = "UPDATE appointmentRequest
SET appointmenttime = '$appointmenttime', status = 'accepted'
WHERE appointmentrequest_id = '$aid'";
$conn->query($sql);


echo "Appointment Requested Accepted!";
header('Refresh: 3; URL=requestedAppointments.php');








?>
