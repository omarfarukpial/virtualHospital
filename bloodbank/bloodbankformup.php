<?php
    include('../connect.php');

    $bloodbankname = $_POST['bloodbankname'];
    
    $hotline = $_POST['hotline'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("insert into bloodbank (bloodbankname,  hotline, location)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $bloodbankname, $hotline, $location);
    $stmt->execute();
    header("Location: bloodbank.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
