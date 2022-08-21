<?php
    include('connect.php');

    $clinicname = $_POST['clinicname'];
    $nbeds = $_POST['nbeds'];
    // $fpbed = $_POST['fpbed'];
    $location = $_POST['location'];
    // $remarks = $_POST['remarks'];
    $doc = $_POST['cdoctor'];
    $nurse = $_POST['cnurse'];

    $stmt = $conn->prepare("insert into clinicform (clinicname, nbeds, doctor, location, nurse)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $clinicname, $nbeds, $doc, $location, $nurse);
    $stmt->execute();
    header("Location: clinic.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
