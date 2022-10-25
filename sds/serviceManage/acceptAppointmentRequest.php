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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/newcss.css">
    <link rel="stylesheet" href="../../css/inputFormNew.css">

    <title>Manage service</title>

 

</head>
<body>
    
<?php
    include('../../navbar.php');
?>
  

<section id="news" class=" container-xxl d-flex justify-content-between ml-2 mr-2">
    <div>
        
    </div>
    <div>
    <h1 class="text-center header-font mt-4"> Appointment <span class="p-text">Schedule</span> </h1>
    </div>
    <div>
    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
        <!-- <button style="visibility:hidden;" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button> -->
    </div>
</section>

<?php

$aid = $_GET['aid'];


?>


<div class="mx-auto ">
    <div class = "shadow-lg p-3 mx-auto mt-5 bg-white rounded w-50 ">
        <h4 class = "text-center mt-4 mb-4">Select Appointment Date and Time</h4>

            <form action="acceptAppointmentManage.php" method="post">
            <input type="hidden" value="<?php echo $aid ?>" name="aid" />
                <div class="input-group">
                    <input class = "mx-auto rounded-pill w-auto px-3" type="datetime-local" id="appointmentDateTime" name="appointmentDateTime">
                </div>
                
                <div class="input-group w-50 mx-auto mt-5 mb-5">
                    <input type="submit" value="Submit">
                </div>
                
            </form>
    </div>



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