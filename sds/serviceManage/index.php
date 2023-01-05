<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/newcss.css">
    <link rel="stylesheet" href="../../css/inputFormNew.css">

    <title>Manage service</title>

 

</head>
<body class="container-fluid">
    
<?php
    include('../../navbar.php');
?>
  

  <section id="news" class="container-xxl d-flex justify-content-between mb-4 rounded bg-info shadow">

<div>
<button class="invisible" style="" type="button" class="btn-add"  onclick="location.href = 'sdsform.php' ">Add Service</button>
</div>

    <div>
    <h1 class="text-center text-white header-font mt-4">Manage services</h1>
    </div>

    <div>
    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    <!--  -->
    </div>
  
    

</section>

    
 <div class="mt-5">
    <div class = "d-flex justify-content-center">
        <button  type="button" class="btn-add w-25"  onclick="location.href = 'requestedAppointments.php' ">Requested Appointments</button>
    </div>
    <div class = "d-flex justify-content-center">
        <button  type="button" class="btn-add w-25"  onclick="location.href = 'acceptedAppointments.php' ">Accepted Appointments</button>
    </div>
    <!-- <div class = "d-flex justify-content-center">
        <button  type="button" class="btn-add w-25"  onclick="location.href = 'doctorVerifyReq.php' ">Doctor Verify Request</button>
    </div> -->
    

 </div>       




<!-- footer section -->
<br>
<br>
<br>
<?php
include('../../footer.php');
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


            
    





    
</body>
</html>