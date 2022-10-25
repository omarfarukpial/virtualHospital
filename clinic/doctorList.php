<?php

session_start();

include('../connect.php');

$cid = $_GET['cid'];
$clinicname = $_GET['cname'];

$_SESSION['clinicid'] = $cid;
$_SESSION['clinicName'] = $clinicname;



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/newcss.css">
    <title>Doctor List in Clinic</title>


    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 

</head>
<body class="container-fluid">
    

    
<?php
    include('../navbar.php');

?>




<section id="news" class="container-xxl d-flex justify-content-between mb-4 rounded bg-info shadow">

    <div>
    <a href="doctorAdding.php"><button type="button" class="btn-add">Add Doctor</button></a>
    </div>

        <div>
        <h1 class="text-center text-white header-font mt-4">  Doctors in <?php echo $clinicname ?> </h1>
        <!-- <h1 class="text-center header-font mt-4"> Doctors in  </h1> -->
        </div>
        <div>
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
            
        
        </div>
        

    </section>

   



    <div class="container-xxl" style="width:100%; margin: auto;">

        <table id = "table_id" class="table table-striped table-borderd text-center  mx-auto  table-hover" style="border-radius: 1em;
    overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Specialization</th>
                    <th>Designation</th>
                    <th>Fees</th>
                    <th>Current Location</th>
                    <th>Phone Number</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Action</th>
                </tr>
                </thead>
            <?php
                
                

                $sql = "SELECT * FROM clinicdoclist 
                        WHERE clinic_id = $cid
                        ";
                $result = $conn->query($sql);
                
                
                if ($result->num_rows > 0) {
                    // output data of each row
                
                    while($row = $result->fetch_assoc()) {
                        $docid = $row["doctor_id"];
                        $docStartTime = $row["doctor_start_time"];
                        $docEndTime = $row["doctor_end_time"];
                        


                        



                        $docFetchSql = "SELECT * FROM doctor 
                        WHERE id = $docid
                        ";
                        $docRow = $conn->query($docFetchSql)->fetch_assoc();
                        
                        
                        echo"<tr>";
                        echo "<td align=right>". $docRow["id"]. "</td>".
                            "<td>". $docRow["name"]. "</td>" .
                            "<td align=right>". date_diff(date_create($docRow["dob"]), date_create(date("Y-m-d")))->format('%y') . "</td>".
                            "<td>". $docRow["gender"] . "</td>".
                            "<td>". $docRow["specialization"] . "</td>".
                            "<td>". $docRow["designation"] . "</td>".
                            "<td align=right>". number_format($docRow["fees"],2) . "</td>".
                            "<td>". $docRow["location"] . "</td>".
                            "<td align=right>". $docRow["phoneNumber"] . "</td>".
                            "<td>". $docStartTime. "</td>".
                            "<td>". $docEndTime. "</td>".
                            "<td><a href= './doctorTimeEdit.php?cid=".$cid."&did=".$docid."&cname=".$clinicname."'><button type='button' class = 'btn btn-success btn-sm'> Edit Time </button></a></td>"


                            
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
include('../footer.php');
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>


            
    






    
</body>
</html>