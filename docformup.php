<?php
    include('connect.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $specialization = $_POST['specialization'];
    $fees = $_POST['fees'];
    $division = $_POST['division'];

    $stmt = $conn->prepare("insert into doctorform (firstName, lastName, phoneNumber, age, gender, specialization, fees, division)
    values(?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("sssissis", $firstname, $lastname, $phone, $age, $gender, $specialization, $fees, $division);
    $stmt->execute();
    header("Location: doctor.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
