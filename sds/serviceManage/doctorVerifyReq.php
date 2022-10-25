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
    <title>Doctor</title>


    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 

</head>
<body class="container-fluid">
    

    
<?php
    include('../../navbar.php');

?>




<section id="news" class="d-flex justify-content-between mb-4 rounded bg-info shadow">

    <div>
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>

        <div>
        <h1 class="text-center text-white header-font mt-4"> Doctors List</h1>
        </div>
        <div>
        <button style="visibility: hidden;" type="button" class="btn-add"  onclick="location.href = 'DocForm.php' ">Add Doctor</button>
        </div>
        

    </section>

   

    <div class="row" style="">
        
        <!-- <div class="col-md-6 text-left">
            <a href="index.html">
                <button type = "button" class="btn-back"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
            </a>
        </div> -->
        
        <div style="" class="container-fluid">
      
        </div>
    
        
    </div>

    <div class="container" style="width:100%; margin: auto;">

        <table id = "table_id" class="table table-striped table-borderd text-center  mx-auto  table-hover" style="border-radius: .5em;
    overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <thead class="thead-dark text-center align-middle">
                <tr class="text-center">
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">BMDC Registration</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Specialization</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Fees</th>
                    <th class="text-center">Current Location</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Verified</th>
                </tr>
                </thead>
            <?php
                
                include('../../connect.php');

                $sql = "SELECT * FROM doctor
                        WHERE verified = 'no'";
                $result = $conn->query($sql);
                
                
                if ($result->num_rows > 0) {
                    // output data of each row
                
                    while($row = $result->fetch_assoc()) {
                        
                        echo"<tr>";
                        echo "<td align=middle>". $row["id"]. "</td>".
                            "<td align=middle>". $row["name"]. "</td>" .
                            "<td align=middle>". $row["bmdcreg"]. "</td>" .
                            "<td align=middle>". date_diff(date_create($row["dob"]), date_create(date("Y-m-d")))->format('%y') . "</td>".
                            "<td align=middle>". $row["gender"] . "</td>".
                            "<td align=middle>". $row["specialization"] . "</td>".
                            "<td align=middle>". $row["designation"] . "</td>".
                            "<td align=middle>". number_format($row["fees"],2) . "</td>".
                            "<td align=middle>". $row["location"] . "</td>".
                            "<td align=middle>". $row["phoneNumber"] . "</td>". 
                            "<td align=middle><a class='btn btn-success' href=bmdcverify.php?did=".$row['id']." role='button'>Verify</a></td>"

                            
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


    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>


            
    






    
</body>
</html>