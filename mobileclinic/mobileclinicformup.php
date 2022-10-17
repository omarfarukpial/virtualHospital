<?php
    include('../connect.php');

    $mobileclinicname = $_POST['mobileclinicname'];
    $hotline = $_POST['hotline'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("insert into mobileclinic (mobileclinicname, hotline, location)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $mobileclinicname, $hotline, $location);
    $stmt->execute();
    header("Location: mobileclinic.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
