<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="../style.css">
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

    <!-- For new form design  -->
    <!-- <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
 <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script> -->

    <title>Doctor Form</title>
<!-- <style>
  body{background-color: #eee}.form-control:focus{color: #495057;background-color: #fff;border-color: #80bdff;outline: 0;box-shadow: 0 0 0 0rem rgba(0,123,255,.25)}.btn-secondary:focus{box-shadow: 0 0 0 0rem rgba(108,117,125,.5)}.close:focus{box-shadow: 0 0 0 0rem rgba(108,117,125,.5)}.mt-200{margin-top:200px}
</style> -->

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
    <h1 class="text-center text-white header-font mt-4"> Doctor Registration Form</h1>
    </div>

    <div>
    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    
    </div>
  
    

</section>




                                 
                             
                        
                         
      

                     
    
    <div class="container-xl" style="display:flex">

      
        <!-- <div class="descontent">
          <div style="margin-left:40%;">
          <img src="../img/doctorimage.webp" alt="Doctor logo" height=200px width=200px style="border-radius: 50%;">
          </div>
          
          <br>
          <h5>A doctor is someone who is experienced and certified to practice medicine to help maintain or restore physical and mental health. A doctor is tasked with interacting with patients, diagnosing medical problems and successfully treating illness or injury. There are many specific areas in the field of medicine that students can study. </h5>

        </div> -->

        <div class="dform">
        <form class="m-0" action="docformup.php" method="post">
                <div class="row">
                        <div class="col-md-4">
                        <label for="fname">Name</label>
                      <input class="form-control form-control-sm" type="text" id="name" name="name" >
                        </div>

                        <div class="col-md-4">
                        <label for="bmdcreg">BMDC Registration Number</label>
                      <input class="form-control form-control-sm" type="text" id="bmdcreg" name="bmdcreg" >
                        </div>
                        
                        <div class="col-md-4">
                        <label for="phn">Phone number</label>
                      <input class="form-control form-control-sm" type="text" id="phn" name="phone" >
                </div>
            </div>
          

          
      

          
          <div class="row mt-2">
            <div class="col-md-4">
            <label for="dob">Date of Birth</label> <br>
          <input class="form-control form-control-sm" type="date" id="dob" name="dob">
            </div>

            <div class="col-md-4">
            <label for="gender">Gender</label>
          <select id="gender" name="gender">
            <option disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>

            </div>
            <div class="col-md-4">
            <label for="specialization">Specialization</label>
          <select id="specialization" name="specialization">
          <option selected>Specialists</option>
                <option value="Allergy and immunology">Allergy and immunology</option>
                <option value="Anesthesiology">Anesthesiology</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Diagnostic radiology">Diagnostic radiology</option>
                <option value="Emergency medicine">Emergency medicine</option>
                <option value="Family medicine">Family medicine</option>
                <option value="General Medicine">General medicine</option>
                <option value="Gynecology">Gynecology</option>
                <option value="Internal medicine">Internal medicine</option>
                <option value="Medical genetics">Medical genetics</option>
                <option value="Neurology">Neurology</option>
                <option value="Nuclear medicine">Nuclear medicine</option>
                <option value="Obstetrics and gynecology">Obstetrics and gynecology</option>
                <option value="Ophthalmology">Ophthalmology</option>
                <option value="Orthopedics">Orthopedics</option>
                <option value="Pathology">Pathology</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Physical medicine and rehabilitation">Physical medicine and rehabilitation</option>
                <option value="Preventive medicine">Preventive medicine</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Radiation oncology">Radiation oncology</option>
                <option value="Surgery">Surgery</option>
                <option value="Urology">Urology</option>
          </select>
            </div>
          </div>

          
      


          
<div class="row mt-2">
  <div class="col-md-4">
  <label for="designation">Designation</label>
          <select id="designation" name="designation">
          <option selected>Designation</option>
                <option value="Professor">Professor</option>
                <option value="Associate Professor">Associate Professor</option>
                <option value="Assistant Professor">Assistant Professor</option>
          </select>
  </div>
  <div class="col-md-4">
  <label for="fees">Fees</label>
          <input type="text" id="fees" name="fees" >
  </div>
  <div class="col-md-4">
  <label for="location">Current Location</label>
          <select id="location" name="location">
            <option disabled selected>Select District</option>
            <option value="Bagerhat">Bagerhat</option>
            <option value="Bandarban">Bandarban</option>
            <option value="Barguna">Barguna</option>
            <option value="Barisal">Barisal</option>
            <option value="Bhola">Bhola</option>
            <option value="Bogra">Bogra</option>
            <option value="Brahmanbaria">Brahmanbaria</option>
            <option value="Chandpur">Chandpur</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Chuadanga">Chuadanga</option>
            <option value="Comilla">Comilla</option>
            <option value="Cox'sBazar">Cox'sBazar</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Dinajpur">Dinajpur</option>
            <option value="Faridpur">Faridpur</option>
            <option value="Feni">Feni</option>
            <option value="Gaibandha">Gaibandha</option>
            <option value="Gazipur">Gazipur</option>
            <option value="Gopalganj">Gopalganj</option>
            <option value="Habiganj">Habiganj</option>
            <option value="Jaipurhat">Jaipurhat</option>
            <option value="Jamalpur">Jamalpur</option>
            <option value="Jashore">Jashore</option>
            <option value="Jhalokati">Jhalokati</option>
            <option value="Jhenaidah">Jhenaidah</option>
            <option value="Khagrachari">Khagrachari</option>
            <option value="Khulna">Khulna</option>
            <option value="Kishoreganj">Kishoreganj</option>
            <option value="Kurigram">Kurigram</option>
            <option value="Kushtia">Kushtia</option>
            <option value="Lakshmipur">Lakshmipur</option>
            <option value="Lalmonirhat">Lalmonirhat</option>
            <option value="Madaripur">Madaripur</option>
            <option value="Magura">Magura</option>
            <option value="Manikganj">Manikganj</option>
            <option value="Maulvibazar">Maulvibazar</option>
            <option value="Meherpur">Meherpur</option>
            <option value="Munshiganj">Munshiganj</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Naogaon">Naogaon</option>
            <option value="Narail">Narail</option>
            <option value="Narayanganj">Narayanganj</option>
            <option value="Narsingdi">Narsingdi</option>
            <option value="Natore">Natore</option>
            <option value="Nawabganj">Nawabganj</option>
            <option value="Netrokona">Netrokona</option>
            <option value="Nilphamari">Nilphamari</option>
            <option value="Noakhali">Noakhali</option>
            <option value="Pabna">Pabna</option>
            <option value="Panchagarh">Panchagarh</option>
            <option value="Patuakhali">Patuakhali</option>
            <option value="Pirojpur">Pirojpur</option>
            <option value="Rajbari">Rajbari</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangamati">Rangamati</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Satkhira">Satkhira</option>
            <option value="Shariatpur">Shariatpur</option>
            <option value="Sherpur">Sherpur</option>
            <option value="Sirajganj">Sirajganj</option>
            <option value="Sunamganj">Sunamganj</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Tangail">Tangail</option>
            <option value="Thakurgaon">Thakurgaon</option>
          </select>
  </div>
</div>
       
<div class="input-group w-50 mx-auto mt-0 mb-1">
                    <input type="submit" value="Submit">
                </div>
        </form>
      </div>


    </div>





      
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



    





<script>
  $(document).ready(function(){

$('#smartwizard').smartWizard({
        selected: 0,
        theme: 'arrows',
        autoAdjustHeight:true,
        transitionEffect:'fade',
        showStepURLhash: false,
     
});

});
</script>
    
</body>
</html>