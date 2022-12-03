<?php
    include('../connect.php');

    $modsname = $_POST['modsname'];
    $oxygenprice = $_POST['oxygenprice'];
    $hotline = $_POST['hotline'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("insert into mods (modsname, oxygenprice, hotline, location)
    values(?, ?, ?, ?)");
    $stmt->bind_param("sdss", $modsname, $oxygenprice, $hotline, $location);
    $stmt->execute();
    header("Location: mods.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
