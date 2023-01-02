<?php

$binary_array = [[]];
$all_checkboxes = ['itching','skin rash','nodal skin eruptions','continuous sneezing','shivering','chills','joint pain','stomach pain','acidity','ulcers on tongue','muscle wasting','vomiting','burning micturition','spotting urination','fatigue','weight gain','anxiety','cold hands and feets','mood swings','weight loss','restlessness','lethargy','patches in throat','irregular sugar level','cough','high fever','sunken eyes','breathlessness','sweating','dehydration','indigestion','headache','yellowish skin','dark urine','nausea','loss of appetite','pain behind the eyes','back pain','constipation','abdominal pain','diarrhoea','mild fever','yellow urine','yellowing of eyes','acute liver failure','fluid overload','swelling of stomach','swelled lymph nodes','malaise','blurred and distorted vision','phlegm','throat irritation','redness of eyes','sinus pressure','runny nose','congestion','chest pain','weakness in limbs','fast heart rate','pain during bowel movements','pain in anal region','bloody stool','irritation in anus','neck pain','dizziness','cramps','bruising','obesity','swollen legs','swollen blood vessels','puffy face and eyes','enlarged thyroid','brittle nails','swollen extremeties','excessive hunger','extra marital contacts','drying and tingling lips','slurred speech','knee pain','hip joint pain','muscle weakness','stiff neck','swelling joints','movement stiffness','spinning movements','loss of balance','unsteadiness','weakness of one body side','loss of smell','bladder discomfort','foul smell of urine','continuous feel of urine','passage of gases','internal itching','toxic look (typhos)','depression','irritability','muscle pain','altered sensorium','red spots over body','belly pain','abnormal menstruation','dischromic patches','watering from eyes','increased appetite','polyuria','family history','mucoid sputum','rusty sputum','lack of concentration','visual disturbances','receiving blood transfusion','receiving unsterile injections','coma','stomach bleeding','distention of abdomen','history of alcohol consumption','fluid overload','blood in sputum','prominent veins on calf','palpitations','painful walking','pus filled pimples','blackheads','scurring','skin peeling','silver like dusting','small dents in nails','inflammatory nails','blister','red sore around nose','yellow crust ooze']; 

foreach ($all_checkboxes as $checkbox_name) {
  if (in_array($checkbox_name, $_POST['checkbox'])) {
    $binary_array[0][] = '1';
  } else {
    $binary_array[0][] = '0';
  }
}




// $array = [[0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]];
$file = 'sfile.txt';


$array_string ="[[";

for ($i=0; $i<count($binary_array[0]); $i++) {
    $array_string=$array_string.$binary_array[0][$i].",";
}
$array_string=$array_string."]]";

// Write the string to the file
file_put_contents($file, $array_string);


 
$command = escapeshellcmd("test1.py");
$output = shell_exec($command);
// echo "Your disease is: ".$output;


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

    <title>AI Doctor</title>


    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 

</head>
<body class="container-fluid">
    

    
<?php
    include('../navbar.php');

?>




<section id="news" class="mt-4 container-xxl d-flex justify-content-between mb-4 rounded bg-info shadow">

    <div>
    <button style="visibility: hidden" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>

    </div>

        <div>
        <h1 class="text-center text-white header-font mt-4">Disease Prediction</h1>
        </div>
        <div>
        
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
        </div>
        

    </section>

    <div class="container text-center">
        <h2>We are assuming that you are suffering from <h1 style="color: red"><?php echo $output?></h1></h2>
        <br>
        <br>
        <h6>* This is just a prediction AI tool, please communicate with doctor for confirmation.</h6>
        <h6>* For better accuracy, please select symptom as much as possible.</h6>
    </div>


   


<!-- footer section -->
<br>
<br>
<br>
<?php
include('../footer.php');
?>


    
</body>
</html>



