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
    
    <title>Mobile Infectious Disease Control Systems Location</title>

  


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
    <h1 class="text-center header-font mt-4"> MIDCS <span class="p-text">Location</span> </h1>
    </div>

    <div>
    <button type="button" class="btn-add" style="display:none;"  onclick="location.href = 'NurseForm.php' ">Add Nurse</button>
    </div>


</section>

<?php
    

    $cloc = $_POST['cloc'];
    $dloc = $_POST['dloc'];
    $node = 5;
    $ans;


    $costMat = array (
        array("location","Kushtia","Jhenaidah","Jashore", "Satkhira", "Khulna"),
        array("Kushtia", 0, 45, 999, 999, 999),
        array("Jhenaidah", 45, 0, 47, 999, 999),
        array("Jashore", 999, 47, 0, 75, 65),
        array("Satkhira", 999, 999, 75, 0, 60),
        array("Khulna", 999, 999, 65, 60, 0)
      );
    $cost = array (
        array("location","Kushtia","Jhenaidah","Jashore", "Satkhira", "Khulna"),
        array("Kushtia", 0, 45, 999, 999, 999),
        array("Jhenaidah", 45, 0, 47, 999, 999),
        array("Jashore", 999, 47, 0, 75, 65),
        array("Satkhira", 999, 999, 75, 0, 60),
        array("Khulna", 999, 999, 65, 60, 0)
      );
      $p = array (array ());

      for ($i = 1; $i<=$node; $i++) {
          for ($j=1; $j<=$node; $j++) {
            for ($k = 1; $k<=$node; $k++) {
                for ($i = 1; $i<=$node; $i++) {
                    for($j=1; $j<=$node; $j++) {
                        if($cost[$i][$k]+$cost[$k][$j] < $cost[$i][$j]) {
                            $cost[$i][$j] = $cost[$i][$k]+$cost[$k][$j];

                        }
                        
                    }
                }
            }
          }
      }
      $r;
      $c;

      for ($i=1; $i<=$node; $i++) {
          if ($cost[$i][0]==$cloc) {
              $r = $i;
              break;

          }
      }
      for ($j = 1; $j<=$node; $j++) {
          if ($cost[0][$j] == $dloc) {
              $c = $j;
          }
      }

      $ans = $cost[$r][$c];
      

      echo "<h1 style= text-align:center> Distance between ". $cloc. " to " .$dloc. " is ";
      echo $ans." km";
      echo "</h1>";
    

?>




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




      




    






    
</body>
</html>