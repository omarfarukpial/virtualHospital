<?php
    include('connect.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $tcost = $_POST['tcost'];
    $division = $_POST['division'];

    $stmt = $conn->prepare("insert into ambulanceform (name, phone, tcost, location)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssds", $name, $phone, $tcost, $division);
    $stmt->execute();
    header("Location: ambulance.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
