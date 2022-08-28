<?php 
    include('connect.php');

    $id = $_POST['update_id'];
    $clinicname = $_POST['clinicname'];
    $nbeds = $_POST['nbeds'];
    // $fpbed = $_POST['fpbed'];
    $location = $_POST['location'];
    // $remarks = $_POST['remarks'];
    $doc = $_POST['cdoctor'];
    $nurse = $_POST['cnurse'];

    $stmt = $conn->prepare("UPDATE clinicform SET clinicname ='$clinicname', nbeds='$nbeds', doctor='$doc', location='$location', nurse='$nurse' WHERE id = '$id' ");
    $stmt->execute();
    echo '<script>alert("Data Updated Successfully!")</script>';
 
    
    
    $stmt->close();
    $conn->close();


    header("Location: clinic.php");





?>