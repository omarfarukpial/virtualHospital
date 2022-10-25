<?php
    include('../connect.php');

    $name = $_POST['name'];
    $bmdcreg = $_POST['bmdcreg'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $specialization = $_POST['specialization'];
    $designation = $_POST['designation'];
    $fees = $_POST['fees'];
    $location = $_POST['location'];

    $stmt = "INSERT INTO doctor (name, bmdcreg, phoneNumber, dob, gender, specialization, designation, fees, location)
    VALUES ('$name', '$bmdcreg', '$phone', '$dob', '$gender', '$specialization', '$designation', '$fees', '$location')";


    if ($conn->query($stmt) === TRUE) {
        echo "New record created successfully";
        header("Location: doctor.php");
      } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
      }


   
    
    
    $stmt->close();
    $conn->close();
    

?>
