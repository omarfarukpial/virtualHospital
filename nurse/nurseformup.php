<?php
    include('../connect.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $location = $_POST['location'];
    $nfee = $_POST['nfee'];

    
    $stmt = "INSERT INTO nurse (name, phoneNumber, dob, gender, designation, fee, location)
    VALUES ('$name', '$phone', '$dob', '$gender', '$designation', '$nfee', '$location')";


    if ($conn->query($stmt) === TRUE) {
        echo "New record created successfully";
        header("Location: nurse.php");
      } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
      }

    
    
    $stmt->close();
    $conn->close();
    

?>
