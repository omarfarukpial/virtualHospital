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
<body class="container-fluid content">
    

    
<?php
    include('../navbar.php');

?>




<section id="news" class="mt-4 container-xxl d-flex justify-content-between mb-4 rounded bg-info shadow">

    <div>
    <button style="visibility: hidden" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>

    </div>

        <div>
        <h1 class="text-center text-white header-font mt-4"> AI Doctor</h1>
        </div>
        <div>
        
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
        </div>
        

    </section>


    <div class="container-xxl">
    
    <h2 class="text-center">Use <span style="color:red">CTRL+F</span>  to find quickly</h2>


        
    <form class = "dform" action="redirectpyfile.php" method="post">

        <div class="row">
            <div class="col">
                <input type='checkbox' name='checkbox[]' value='itching'> Itching<br>
                <input type='checkbox' name='checkbox[]' value='skin rash'> Skin rash<br>
                <input type='checkbox' name='checkbox[]' value='nodal skin eruptions'> Nodal skin eruptions<br>
                <input type='checkbox' name='checkbox[]' value='continuous sneezing'> Continuous sneezing<br>
                <input type='checkbox' name='checkbox[]' value='shivering'> Shivering<br>
                <input type='checkbox' name='checkbox[]' value='chills'> Chills<br>
                <input type='checkbox' name='checkbox[]' value='joint pain'> Joint pain<br>
                <input type='checkbox' name='checkbox[]' value='stomach pain'> Stomach pain<br>
                <input type='checkbox' name='checkbox[]' value='acidity'> Acidity<br>
                <input type='checkbox' name='checkbox[]' value='ulcers on tongue'> Ulcers on tongue<br>
                <input type='checkbox' name='checkbox[]' value='muscle wasting'> Muscle wasting<br>
                <input type='checkbox' name='checkbox[]' value='vomiting'> Vomiting<br>
                <input type='checkbox' name='checkbox[]' value='burning micturition'> Burning micturition<br>
                <input type='checkbox' name='checkbox[]' value='spotting urination'> Spotting urination<br>
                <input type='checkbox' name='checkbox[]' value='fatigue'> Fatigue<br>
                <input type='checkbox' name='checkbox[]' value='weight gain'> Weight gain<br>
                <input type='checkbox' name='checkbox[]' value='anxiety'> Anxiety<br>
                <input type='checkbox' name='checkbox[]' value='cold hands and feets'> Cold hands and feets<br>
                <input type='checkbox' name='checkbox[]' value='mood swings'> Mood swings<br>
                <input type='checkbox' name='checkbox[]' value='weight loss'> Weight loss<br>
                <input type='checkbox' name='checkbox[]' value='restlessness'> Restlessness<br>
                <input type='checkbox' name='checkbox[]' value='lethargy'> Lethargy<br>
                <input type='checkbox' name='checkbox[]' value='patches in throat'> Patches in throat<br>
                <input type='checkbox' name='checkbox[]' value='irregular sugar level'> Irregular sugar level<br>
                <input type='checkbox' name='checkbox[]' value='cough'> Cough<br>
                <input type='checkbox' name='checkbox[]' value='high fever'> High fever<br>
                <input type='checkbox' name='checkbox[]' value='sunken eyes'> Sunken eyes<br>
                <input type='checkbox' name='checkbox[]' value='breathlessness'> Breathlessness<br>
                <input type='checkbox' name='checkbox[]' value='sweating'> Sweating<br>
            </div>

            <div class="col">

                <input type='checkbox' name='checkbox[]' value='dehydration'> dehydration<br>
                <input type='checkbox' name='checkbox[]' value='indigestion'> indigestion<br>
                <input type='checkbox' name='checkbox[]' value='headache'> headache<br>
                <input type='checkbox' name='checkbox[]' value='yellowish skin'> yellowish skin<br>
                <input type='checkbox' name='checkbox[]' value='dark urine'> dark urine<br>
                <input type='checkbox' name='checkbox[]' value='nausea'> nausea<br>
                <input type='checkbox' name='checkbox[]' value='loss of appetite'> loss of appetite<br>
                <input type='checkbox' name='checkbox[]' value='pain behind the eyes'> pain behind the eyes<br>
                <input type='checkbox' name='checkbox[]' value='back pain'> back pain<br>
                <input type='checkbox' name='checkbox[]' value='constipation'> constipation<br>
                <input type='checkbox' name='checkbox[]' value='abdominal pain'> abdominal pain<br>
                <input type='checkbox' name='checkbox[]' value='diarrhoea'> diarrhoea<br>
                <input type='checkbox' name='checkbox[]' value='mild fever'> mild fever<br>
                <input type='checkbox' name='checkbox[]' value='yellow urine'> yellow urine<br>
                <input type='checkbox' name='checkbox[]' value='yellowing of eyes'> yellowing of eyes<br>
                <input type='checkbox' name='checkbox[]' value='acute liver failure'> acute liver failure<br>
                <input type='checkbox' name='checkbox[]' value='fluid overload'> fluid overload<br>
                <input type='checkbox' name='checkbox[]' value='swelling of stomach'> swelling of stomach<br>
                <input type='checkbox' name='checkbox[]' value='swelled lymph nodes'> swelled lymph nodes<br>
                <input type='checkbox' name='checkbox[]' value='malaise'> malaise<br>
                <input type='checkbox' name='checkbox[]' value='blurred and distorted vision'> blurred and distorted vision<br>
                <input type='checkbox' name='checkbox[]' value='phlegm'> phlegm<br>
                <input type='checkbox' name='checkbox[]' value='throat irritation'> throat irritation<br>
                <input type='checkbox' name='checkbox[]' value='redness of eyes'> redness of eyes<br>
                <input type='checkbox' name='checkbox[]' value='sinus pressure'> sinus pressure<br>
                <input type='checkbox' name='checkbox[]' value='runny nose'> runny nose<br>
                <input type='checkbox' name='checkbox[]' value='congestion'> congestion<br>
                <input type='checkbox' name='checkbox[]' value='chest pain'> chest pain<br>

            </div>

            <div class="col">
                

                <input type='checkbox' name='checkbox[]' value='weakness in limbs'>weakness in limbs<br>
                <input type='checkbox' name='checkbox[]' value='fast heart rate'>fast heart rate<br>
                <input type='checkbox' name='checkbox[]' value='pain during bowel movements'>pain during bowel movements<br>
                <input type='checkbox' name='checkbox[]' value='pain in anal region'>pain in anal region<br>
                <input type='checkbox' name='checkbox[]' value='bloody stool'>bloody stool<br>
                <input type='checkbox' name='checkbox[]' value='irritation in anus'>irritation in anus <br>
                <input type='checkbox' name='checkbox[]' value='neck pain'>neck pain<br>
                <input type='checkbox' name='checkbox[]' value='dizziness'>dizziness<br>
                <input type='checkbox' name='checkbox[]' value='cramps'>cramps<br>
                <input type='checkbox' name='checkbox[]' value='bruising'>bruising<br>
                <input type='checkbox' name='checkbox[]' value='obesity'>obesity<br>
                <input type='checkbox' name='checkbox[]' value='swollen legs'>swollen legs<br>
                <input type='checkbox' name='checkbox[]' value='swollen blood vessels'>swollen blood vessels<br>
                <input type='checkbox' name='checkbox[]' value='puffy face and eyes'>puffy face and eyes<br>
                <input type='checkbox' name='checkbox[]' value='enlarged thyroid'>enlarged thyroid<br>
                <input type='checkbox' name='checkbox[]' value='brittle nails'>brittle nails<br>
                <input type='checkbox' name='checkbox[]' value='swollen extremeties'>swollen extremeties<br>
                <input type='checkbox' name='checkbox[]' value='excessive hunger'>excessive hunger<br>
                <input type='checkbox' name='checkbox[]' value='extra marital contacts'>extra marital contacts<br>
                <input type='checkbox' name='checkbox[]' value='drying and tingling lips'>drying and tingling lips<br>
                <input type='checkbox' name='checkbox[]' value='slurred speech'>slurred speech<br>
                <input type='checkbox' name='checkbox[]' value='knee pain'>knee pain<br>
                <input type='checkbox' name='checkbox[]' value='hip joint pain'>hip joint pain<br>
                <input type='checkbox' name='checkbox[]' value='muscle weakness'>muscle weakness<br>
                <input type='checkbox' name='checkbox[]' value='stiff neck'>stiff neck<br>
                <input type='checkbox' name='checkbox[]' value='swelling joints'>swelling joints<br>
                <input type='checkbox' name='checkbox[]' value='movement stiffness'>movement stiffness<br>

            </div>

            <div class="col">
           
                <input type='checkbox' name='checkbox[]' value='spinning movements'>spinning movements<br>
                <input type='checkbox' name='checkbox[]' value='loss of balance'>loss of balance<br>
                <input type='checkbox' name='checkbox[]' value='unsteadiness'>unsteadiness<br>
                <input type='checkbox' name='checkbox[]' value='weakness of one body side'>weakness of one body side<br>
                <input type='checkbox' name='checkbox[]' value='loss of smell'>loss of smell<br>
                <input type='checkbox' name='checkbox[]' value='bladder discomfort'>bladder discomfort<br>
                <input type='checkbox' name='checkbox[]' value='foul smell of urine'>foul smell of urine<br>
                <input type='checkbox' name='checkbox[]' value='continuous feel of urine'>continuous feel of urine<br>
                <input type='checkbox' name='checkbox[]' value='passage of gases'>passage of gases<br>
                <input type='checkbox' name='checkbox[]' value='internal itching'>internal itching<br>
                <input type='checkbox' name='checkbox[]' value='toxic look (typhos)'>toxic look (typhos)<br>
                <input type='checkbox' name='checkbox[]' value='depression'>depression<br>
                <input type='checkbox' name='checkbox[]' value='irritability'>irritability<br>
                <input type='checkbox' name='checkbox[]' value='muscle pain'>muscle pain<br>
                <input type='checkbox' name='checkbox[]' value='altered sensorium'>altered sensorium<br>
                <input type='checkbox' name='checkbox[]' value='red spots over body'>red spots over body<br>
                <input type='checkbox' name='checkbox[]' value='belly pain'>belly pain<br>
                <input type='checkbox' name='checkbox[]' value='abnormal menstruation'>abnormal menstruation<br>
                <input type='checkbox' name='checkbox[]' value='dischromic patches'>dischromic patches<br>
                <input type='checkbox' name='checkbox[]' value='watering from eyes'>watering from eyes<br>
                <input type='checkbox' name='checkbox[]' value='increased appetite'>increased appetite<br>
                <input type='checkbox' name='checkbox[]' value='polyuria'>polyuria<br>
                <input type='checkbox' name='checkbox[]' value='family history'>family history<br>

            </div>

            <div class="col">
                <input type='checkbox' name='checkbox[]' value='mucoid sputum'>mucoid sputum<br>
                <input type='checkbox' name='checkbox[]' value='rusty sputum'>rusty sputum<br>
                <input type='checkbox' name='checkbox[]' value='lack of concentration'>lack of concentration<br>
                <input type='checkbox' name='checkbox[]' value='visual disturbances'>visual disturbances<br>
                <input type='checkbox' name='checkbox[]' value='receiving blood transfusion'>receiving blood transfusion<br>
                <input type='checkbox' name='checkbox[]' value='receiving unsterile injections'>receiving unsterile injections<br>
                <input type='checkbox' name='checkbox[]' value='coma'>coma<br>
                <input type='checkbox' name='checkbox[]' value='stomach bleeding'>stomach bleeding<br>
                <input type='checkbox' name='checkbox[]' value='distention of abdomen'>distention of abdomen<br>
                <input type='checkbox' name='checkbox[]' value='history of alcohol consumption'>history of alcohol consumption<br>
                <input type='checkbox' name='checkbox[]' value='fluid overload'>fluid overload<br>
                <input type='checkbox' name='checkbox[]' value='blood in sputum'>blood in sputum<br>
                <input type='checkbox' name='checkbox[]' value='prominent veins on calf'>prominent veins on calf<br>
                <input type='checkbox' name='checkbox[]' value='palpitations'>palpitations<br>
                <input type='checkbox' name='checkbox[]' value='painful walking'>painful walking<br>
                <input type='checkbox' name='checkbox[]' value='pus filled pimples'>pus filled pimples<br>
                <input type='checkbox' name='checkbox[]' value='blackheads'>blackheads<br>
                <input type='checkbox' name='checkbox[]' value='scurring'>scurring<br>
                <input type='checkbox' name='checkbox[]' value='skin peeling'>skin peeling<br>
                <input type='checkbox' name='checkbox[]' value='silver like dusting'>silver like dusting<br>
                <input type='checkbox' name='checkbox[]' value='small dents in nails'>small dents in nails<br>
                <input type='checkbox' name='checkbox[]' value='inflammatory nails'>inflammatory nails<br>
                <input type='checkbox' name='checkbox[]' value='blister'>blister<br>
                <input type='checkbox' name='checkbox[]' value='red sore around nose'>red sore around nose<br>
                <input type='checkbox' name='checkbox[]' value='yellow crust ooze'>yellow crust ooze<br>

            </div>

        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <input style="margin:0" type="submit" value="Submit">
            </div>
            <div class="col"></div>
  

        </div>
      

     

    </form>
    


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







