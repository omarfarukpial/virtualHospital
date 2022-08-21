<?php
    include('connect.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $division = $_POST['division'];
    $nfee = $_POST['nfee'];

    $stmt = $conn->prepare("insert into nurseform (firstName, lastName, phoneNumber, age, gender, designation, division, fee)
    values(?, ?, ?, ?, ?, ?,?, ?)");
    $stmt->bind_param("sssisssd", $firstname, $lastname, $phone, $age, $gender, $designation, $division, $nfee);
    $stmt->execute();
    header("Location: nurse.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
