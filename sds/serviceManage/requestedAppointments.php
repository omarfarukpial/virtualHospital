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
<body class="container-fluid">
    
<?php
    include('../../navbar.php');
?>
  

  <section id="news" class="container-xxl d-flex justify-content-between mb-4 rounded bg-info shadow">

<div>
<button style="visibility:hidden;" type="button" class="btn-add"  onclick="location.href = 'sdsform.php' ">Add Service</button>
</div>

    <div>
    <h1 class="text-center text-white header-font mt-4">All Requested Appointments</h1>
    </div>

    <div>
    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    
    </div>
  
    

</section>




<div class="container-xxl" style="border-radius: 15px; ">

<table class="table table-striped table-borderd text-center  mx-auto  table-hover" style="border-radius: .5em;
overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <!-- <th>Clinic Name</th> -->
            <th>Doctor Name</th>
            <th>Specialization</th>
            <th>Fees</th>
            <th>Patient Name</th>
            <th>Patient Location</th>
            <th>Patient Phone</th>
            <th>Patient Problem</th>
            <th>Submission Time</th>
            <th colspan = "2">Action</th>
        </tr>
        </thead>
    <?php
        
        include('../../connect.php');

        $sql = "SELECT appointmentrequest.appointmentrequest_id as apt_id,  doctor.id as d_id, doctor.name as d_name, doctor.specialization as d_sp, doctor.fees as d_fees, userinfo.id as u_id, userinfo.name as u_name, userinfo.location as u_loc, userinfo.phone as u_phn, appointmentrequest.problem as apt_prob, appointmentrequest.time as apt_time, appointmentrequest.status as apt_status
        FROM appointmentrequest
        -- JOIN clinic ON clinic.id = appointmentrequest.clinicid
        JOIN doctor ON doctor.id = appointmentrequest.doctorid
        JOIN userinfo ON userinfo.id = appointmentrequest.userid
        WHERE appointmentrequest.status = 'pending' ";

    
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
        
            while($row = $result->fetch_assoc()) {
                
                echo"<tr>";
                echo "<td align=right>". $row["apt_id"]. "</td>".
                    // "<td>". $row["c_name"]. "</td>" .
                    "<td>". $row["d_name"]. "</td>" .
                    "<td>". $row["d_sp"]. "</td>" .
                    "<td align=right>". number_format($row["d_fees"],2) . "</td>".
                    "<td>". $row["u_name"] . "</td>".
                    "<td>". $row["u_loc"] . "</td>".
                    "<td>". $row["u_phn"] . "</td>".
                    "<td>". $row["apt_prob"] . "</td>".
                    "<td>". $row["apt_time"] . "</td>".
                    "<td> <a class='btn btn-success' href=acceptAppointmentRequest.php?aid=".$row['apt_id']." role='button'>Accept</a> </td>".
                    "<td> <a class='btn btn-danger' href=rejectAppointmentRequest.php?aid=".$row['apt_id']." role='button'>Reject</a> </td>"
                    ;
                echo"</tr>";
            }
        } else {
            echo "0 results";
        }


    ?>
        
    </table>

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