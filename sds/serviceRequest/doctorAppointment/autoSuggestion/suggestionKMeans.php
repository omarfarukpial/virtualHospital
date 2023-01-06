<?php
session_start();
include('../../../../connect.php');


$symptom = $_POST['symptom'];
$username = $_POST['username'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phn = $_POST['phn'];
$location = $_POST['location'];
$problem = $_POST['problem'];


$_SESSION['symptom'] = $symptom;
$_SESSION['username'] = $username;
$_SESSION['problem'] = $problem;


// Select all the data from the doctor table
$sql = "SELECT id, specialization, location, gender FROM doctor";
$result = $conn->query($sql);

// Open a new file for writing
$fp = fopen('doctors.csv', 'w');

fputcsv($fp, array('id','specialization','location', 'gender'));
// Loop through the result set and write the data to the CSV file
while ($row = $result->fetch_assoc()) {
    fputcsv($fp, $row);
}

// Close the file
fclose($fp);

// Close the database connection



$patientData = fopen('patient.csv', 'w');

fputcsv($patientData, array('specialization','location', 'gender'));
fputcsv($patientData, array($symptom,$location, $gender));
fclose($patientData);

$command = escapeshellcmd("kmeans.py");
$output = shell_exec($command);




// Close the CSV file



$csvFile = file('result.csv');
$data = [];
foreach ($csvFile as $line) {
  $data[] = (int)$line;
}


?>




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
<section id="news" class="container-xl d-flex justify-content-between mb-4 rounded bg-info shadow">
    <div>
        <button style="visibility:hidden;" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
    <div>
    <h1 class="text-center text-white header-font mt-4"> Doctor Auto Suggestion List</h1>
    </div>
    <div>
        <button  type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
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
                <th>Action</th>
  
            </tr>

        </thead>

            <?php
                
                include('../../../../connect.php');



                foreach($data as $id) {
                    $sql= "SELECT * FROM doctor WHERE id = '$id'";
                    $result = $conn->query($sql);

                    
                if ($result -> num_rows>0) {
                    while ($row = $result->fetch_assoc()) {
                        
                        echo"<tr>";
                        echo"<td>".$row["name"]."</td>".
                        "<td>".$row["specialization"]."</td>".
                        "<td>".$row["location"]."</td>".
                        "<td>".number_format($row["fees"],2)."</td>". 
                        "<td>".$row["phoneNumber"]."</td>". 
                        "<td> <a class='btn btn-success' href=sendAppointment.php?did=".$row['id']." role='button'>Get Appointment</a> </td>"
                        ;

                    }
                    echo"</tr>";
                }
                else {
                    echo "0 result";
                }

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