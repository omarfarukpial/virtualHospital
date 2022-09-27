<?php



include('../../connect.php');

$aid = $_GET['aid'];


$sql = "DELETE FROM appointmentrequest WHERE appointmentrequest_id = '$aid'";


if ($conn->query($sql) === TRUE) {
    echo "Appointment rejected successfully";
    header('Refresh: 3; URL=requestedAppointments.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }







   $conn->close();
?>