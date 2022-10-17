<?php 
include('../../../../connect.php');

$cid = $_POST["cid"];



$sql = "SELECT clinicdoclist.doctor_id, doctor.id as did, doctor.name as dname  FROM clinicdoclist
        INNER JOIN doctor
        ON clinicdoclist.doctor_id = doctor.id
        WHERE clinicdoclist.clinic_id = '$cid'";



$docinfo = $conn->query($sql);

if ($docinfo -> num_rows > 0) {
    echo '<option value="">Select Doctor</option>'; 
    while ($row = $docinfo -> fetch_assoc()) {

        echo '<option value="'.$row['did'].'">'.$row['dname'].'</option>';

    
    }

}








?>