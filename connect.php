<?php
$user = 'root';
$pass = '';
$db = 'healthinformatics';
$conn = new mysqli('localhost', $user, $pass, $db);
if ($conn -> connect_error) {
    die ('Connection Failed : '.$conn->connect_error);
}
?>
