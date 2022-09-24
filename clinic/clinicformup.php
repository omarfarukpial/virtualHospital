<?php
    include('connect.php');

    $clinicname = $_POST['clinicname'];
    $nbeds = $_POST['nbeds'];
    $phn = $_POST['phn'];
    $location = $_POST['location'];
   

  


    $stmt = "INSERT INTO clinic (clinicname, nbeds, phn,location)
    VALUES ('$clincname', '$nbeds', '$phn', '$location')";


    if ($conn->query($stmt) === TRUE) {
        echo "New record created successfully";
        header("Location: clinic.php");
      } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
      }


   
    
    
    $stmt->close();
    $conn->close();
    

?>
