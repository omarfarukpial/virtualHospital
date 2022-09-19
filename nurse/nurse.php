<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="../css/inputForm.css">

    <title>Nurse</title>

  


</head>
<body>
    

  
   
<?php
    include('../navbar.php');
?>







<section id="news" class="d-flex justify-content-between ml-4 mr-4 mb-4 rounded bg-light">

    <div>
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>

    <div>
    <h1 class="text-center header-font mt-4"> Nurse <span class="p-text">List</span> </h1>
    </div>

    <div>
    <button type="button" class="btn-add"  onclick="location.href = 'NurseForm.php' ">Add Nurse</button>
    </div>
    

</section>


    
        

            <table class="table table-striped table-borderd text-center w-75 mx-auto  table-hover" style="border-radius: 1em;
    overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Designation</th>
                        <th>Fees per hour</th>
                        <th>Current Location</th>
                        <th>Phone Number</th>
                        
                    </tr>
                </thead>

            <?php
                
                include('../connect.php');

                $sql = "SELECT * FROM nurse";
                $result = $conn->query($sql);
                
                
                if ($result->num_rows > 0) {
                    // output data of each row
                
                    while($row = $result->fetch_assoc()) {
                        echo"<tr>";
                        echo "<td align=right>". $row["id"]. "</td>".
                            "<td>". $row["name"]. "</td>" .
                            "<td align=right>". date_diff(date_create($row["dob"]), date_create(date("Y-m-d")))->format('%y') . "</td>".
                            "<td>". $row["gender"] . "</td>".
                            "<td>". $row["designation"] . "</td>".
                            "<td align=right>". number_format($row["fee"],2) . "</td>".
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

           

        
            <br>

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

            
    






    
</body>
</html>