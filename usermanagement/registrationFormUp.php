<?php

include('../connect.php');

$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$pass = $_POST['pass'];


$userInfoUpdate = "INSERT INTO userinfo(email, username, name, age, gender, phone, location, pass)
                        VALUES ('$email', '$username', '$name', '$age', '$gender', '$phone', '$location', '$pass')";
if (!($conn->query($userInfoUpdate)) === TRUE) {
    echo "Error: " . $userInfoUpdate . "<br>" . $conn->error;
}

header("Location: login.php");



?>