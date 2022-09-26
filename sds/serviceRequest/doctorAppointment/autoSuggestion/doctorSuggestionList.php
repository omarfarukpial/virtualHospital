

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


<!-- Doctor suggestion list  -->
    

<table class="table table-striped table-borderd text-center w-75 mx-auto  table-hover" style="border-radius: 1em;
    overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

        <thead class="thead-dark">
            <tr>
                
                <th>Doctor Name</th>
                <th>Doctor Specialization</th>
                <th>Doctor Location</th>
                <th>Doctor Fees</th>
                <th>Doctor Phone</th>
                <th>Weight</th>
                <th>Action</th>
  
            </tr>

        </thead>

            <?php
                
                include('../../../../connect.php');

  





                $sql= "SELECT a.id as a_id, a.name as a_name,b.id as b_id, b.docid as b_docid, b.weight as b_weight, a.id as a_id, a.phoneNumber as a_phoneNumber, a.specialization as a_specialization, a.location as a_location, a.fees as a_fees
                    FROM doctor as a
                    INNER JOIN temptable as b ON (a.id=b.docid)
                    WHERE b.weight > 2.5
                    ORDER BY b.weight DESC";
                $result = $conn->query($sql);

                if ($result -> num_rows>0) {
                    while ($row = $result->fetch_assoc()) {
                        
                        echo"<tr>";
                        echo"<td>".$row["a_name"]."</td>".
                        "<td>".$row["a_specialization"]."</td>".
                        "<td>".$row["a_location"]."</td>".
                        "<td>".number_format($row["a_fees"],2)."</td>". 
                        "<td>".$row["a_phoneNumber"]."</td>". 
                        "<td>".number_format($row["b_weight"],2)."</td>".
                        "<td> <a class='btn btn-success' href=sendAppointment.php?did=".$row['a_id']." role='button'>Get Appointment</a> </td>"
                        ;

                    }
                    echo"</tr>";
                }
                else {
                    echo "0 result";
                }




            ?>
            
            </table>









            
    


<!-- Footer section  -->
<br>
<br>
<br>
<?php
    include('../../../../footer.php');
?>


    
</body>
</html>