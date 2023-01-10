<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../css/newcss.css">
    <link rel="stylesheet" href="../../../../css/inputFormNew.css">

    <title>Automatic Doctor Suggestion</title>

 

</head>
<body>
    
<?php
    include('../../../../navbar.php');
?>
  
<!-- Back Button and Heading -->
<section id="news" class="d-flex justify-content-between ml-2 mr-2">
    <div>
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
    <div>
        <h1 class="text-center header-font mt-4"> Doctor <span class="p-text">Suggestion List</span> </h1>
    </div>
    <div>
        <button style="visibility:hidden;" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
</section>



<div class = "d-flex align-items-center justify-content-center mt-4 mb-4">
    <h1>Appointment placed successfully.</h1>
</div>


<?php






$docid = $_GET['did'];
$symptom = $_SESSION['symptom'];
$username = $_SESSION['username'];
$problem = $_SESSION['problem'];


date_default_timezone_set("Asia/Dhaka");
$time = date("Y-m-d h:i:sa");



// Userid find from username 

$usernamesql = "SELECT id FROM userinfo WHERE username = '$username'";
$userid = $conn->query($usernamesql)->fetch_assoc()['id'];


// Upload appointment data to database

$stmt = "INSERT INTO appointmentRequest (doctorid, userid, symptom, problem, time)
VALUES ('$docid', '$userid','$symptom', '$problem', '$time')";
$conn->query($stmt);





// session_destroy();

// $stmt->close();
$conn->close();











?>











            
    


<!-- Footer section  -->
<br>
<br>
<br>
<?php
    include('../../../../footer.php');
?>


    
</body>
</html>