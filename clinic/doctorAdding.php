    
<?php
    session_start();
    
    include('../connect.php');
    $cid = $_SESSION['clinicid'];
    $clinicname = $_SESSION['clinicName'];

?>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
    $docidlist = $_POST['doctorselectlist'];
    $clinicid = $_POST['clinicid'];
    $clinicname = $_POST['clinicName'];
    
    foreach($docidlist as $docidlist){ 
        $docAddSql = "INSERT INTO clinicdoclist (doctor_id, clinic_id)
        VALUES ('$docidlist', '$clinicid')"; 
        $conn->query($docAddSql);
            
    } 

    echo "<script>alert('Doctor Added Successfully!')</script>";
    header("Location:./doctorList.php?cid=$clinicid&cname=$clinicname");

    session_destroy();

    $conn->close();



}
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
    <link rel="stylesheet" href="../css/inputFormNew.css">
    <title>Doctor</title>


    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 

</head>
<body class="container-fluid">
    

<?php
include('../navbar.php');
?>




<section id="news" class="container-xl d-flex justify-content-between mb-4 rounded bg-info shadow">

<div>
        <button class="invisible" style="" type="button" class="btn-add"  onclick="location.href = 'DocForm.php' ">Add Doctor</button>
        </div>

        <div>
        <h1 class="text-center text-white header-font mt-4"> Add Doctor</h1>
        </div>

        <div>
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
        
        

    </section>

   

    <div class="row" style="margin-left: 10%; margin-right:10%">
        
        <!-- <div class="col-md-6 text-left">
            <a href="index.html">
                <button type = "button" class="btn-back"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
            </a>
        </div> -->
        
        <div style="margin-left:1030px" class="container">
      
        </div>
    
        
    </div>

    <div class="container" style="width:100%; margin: auto;">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="clinicid" value="<?php echo $cid ?>">
        <input type="hidden" name="clinicName" value="<?php echo $clinicname ?>">



            <table id = "table_id" class="table table-striped table-borderd text-center  mx-auto  table-hover" style="border-radius: 1em;
    overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <thead class="thead-dark">
                <tr>
                    <th>Select</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Specialization</th>
                    <th>Designation</th>
                    <th>Fees</th>
                    <th>Current Location</th>
                    <th>Phone Number</th>
                </tr>
                </thead>
            <?php





// SELECT * FROM demo_table1 WHERE NAME NOT IN (SELECT NAME FROM demo_table2);
                


                $sql = "SELECT * FROM doctor WHERE id NOT IN (SELECT doctor_id FROM clinicdoclist WHERE clinic_id = $cid)";




                $result = $conn->query($sql);
                
                
                if ($result->num_rows > 0) {
                    // output data of each row
                
                    while($row = $result->fetch_assoc()) {
                        
                        echo"<tr>";
                        echo "<td><input type='checkbox' name='doctorselectlist[]' value='".$row["id"]."'></td>".
                            "<td align=right>". $row["id"]. "</td>".
                            "<td>". $row["name"]. "</td>" .
                            "<td align=right>". date_diff(date_create($row["dob"]), date_create(date("Y-m-d")))->format('%y') . "</td>".
                            "<td>". $row["gender"] . "</td>".
                            "<td>". $row["specialization"] . "</td>".
                            "<td>". $row["designation"] . "</td>".
                            "<td align=right>". number_format($row["fees"],2) . "</td>".
                            "<td>". $row["location"] . "</td>".
                            "<td align=right>". $row["phoneNumber"] . "</td>"
                            
                            ;
                        echo"</tr>";
                    }
                } else {
                    echo "0 results";
                }


            ?>
                
            </table>

            <div class="input-group w-50 mx-auto mt-0 mb-2">
                    <input type="submit" value="Submit">
                </div>
            <!-- <div class = "input-group w-50 mx-auto mt-3 mb-2">
                <button type="submit" class="btn btn-primary mx-auto">Submit</button>

            </div> -->




            
            
        </form>

        

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