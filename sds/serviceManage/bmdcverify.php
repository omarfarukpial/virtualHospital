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
    <title>BMDC Verify</title>


    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 

</head>
<body class="container-fluid">
    

    
<?php
    include('../../navbar.php');
    include('../../connect.php');
    $did = $_GET['did'];




    $sql = "SELECT * FROM doctor
            WHERE id = '$did'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc()
                

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

   
    <div class="container ">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-borderd   mx-auto  table-hover" style="border-radius: .5em;
    overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <tr>
                    <td>Name:</td>
                    <td><?php echo $row['name']?></td>
                </tr>
                <tr>
                    <td>BMDC Registration Number:</td>
                    <td><?php echo $row['bmdcreg']?></td>
                </tr>
                <tr>
                    <td>Phone number:</td>
                    <td><?php echo $row['phoneNumber']?></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><?php echo $row['dob']?></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td><?php echo $row['gender']?></td>
                </tr>

                <tr>
                    <td>Specialization:</td>
                    <td><?php echo $row['specialization']?></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><?php echo $row['designation']?></td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><?php echo $row['location']?></td>
                </tr>

                </table>

            </div>
            <div class="col  text-center p-5">
                 <br>
                <a class='btn btn-primary mt-5 w-50' href='https://verify.bmdc.org.bd/' target='_blank' role='button'>Open BMDC Website</a>
                <br>
                <a class='btn btn-danger mt-5 w-50' href='verifydone.php?did=<?php echo $did?>' role='button'>Mark as Verified</a>
            </div>
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


    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>


            
    






    
</body>
</html>