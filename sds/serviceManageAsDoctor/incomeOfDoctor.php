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

    <title>Manage service Of Doctor</title>

 

</head>
<body class="container-fluid">
    
<?php
    session_start();
    $did = $_SESSION['did'];
    include('../../navbar.php');
    $totalFees = 0;
?>
  

  <section id="news" class="d-flex justify-content-between mb-4 rounded bg-info shadow">

<div>
    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
</div>

    <div>
    <h1 class="text-center text-white header-font mt-4"> Accepted Appointments</h1>
    </div>

    <div>
    <button style="visibility:hidden;" type="button" class="btn-add"  onclick="location.href = 'sdsform.php' ">Add Service</button>
    </div>
  
    

</section>






    <?php
        
        include('../../connect.php');


        $sql = "SELECT appointmentrequest_id, doctorid, finished, doctor.name as dname, doctor.specialization as dsp, doctor.fees as dfees, userinfo.name as uname, userinfo.location as uloc, userinfo.phone as uphn, problem,appointmenttime  FROM appointmentrequest
                INNER JOIN doctor ON appointmentrequest.doctorid = doctor.id
                INNER JOIN userinfo ON appointmentrequest.userid = userinfo.id
                WHERE status = 'accepted' AND doctorid = '$did' AND finished = 'yes';
          ";
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
        
            while($row = $result->fetch_assoc()) {
               $totalFees = $totalFees + $row['dfees'];
               $docName = $row['dname'];
            }
        } else {
            echo "0 results";
        }


    ?>
        
   



<div class="mx-auto text-center">
    <h1>Total income of <?php echo $docName ?> is <?php echo $totalFees ?></h1>


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