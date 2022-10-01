<?php 
    include('../connect.php');

    $id = $_POST['update_id'];
    $clinicname = $_POST['clinicname'];
    $nbeds = $_POST['nbeds'];
    $location = $_POST['location'];
    $phn = $_POST['phn'];

    $stmt = $conn->prepare("UPDATE clinic SET clinicname ='$clinicname', nbeds='$nbeds', phn = '$phn', location='$location' WHERE id = '$id' ");
    $stmt->execute();
    echo '<script>alert("Data Updated Successfully!")</script>';
 
    
    
    $stmt->close();
    $conn->close();


    header("Location: clinic.php");





?>