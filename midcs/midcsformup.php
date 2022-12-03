<?php
    include('../connect.php');

    $midcsname = $_POST['midcsname'];
    
    $hotline = $_POST['hotline'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("insert into midcs (midcsname,  hotline, location)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $midcsname, $hotline, $location);
    $stmt->execute();
    header("Location: midcs.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
