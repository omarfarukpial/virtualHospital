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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Manual Doctor Suggestion</title>

 

</head>
<body class="container-fluid">
    
<?php
    include('../../../../navbar.php');
    // include('../../../../connect.php');
    
?>
  
<!-- Back Button and Heading -->
<section id="news" class="container-xl d-flex justify-content-between mb-4 rounded bg-info shadow">
    <div>
    <button class="invisible" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Add Docotr </button>
    </div>
    <div>
    <h1 class="text-center text-white header-font mt-4"> Doctor Manual Selection</h1>
    </div>
    <div>

    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
        <!-- <button style="visibility:hidden;" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button> -->
    </div>
</section>


<!-- Appointment info form -->


    <div class="container-xl" style="display: flex;">

    <div class="dform2">
        <form action="./manualAppointmentSend.php" method="post">
<div class="row">
    <div class="col-md-4">
    <label for="symptom">Specialist Needed</label>
        <select name="symptom" id="symptom">
                <option selected>Select Specialists</option>
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
    <div class="col-md-4">
            <label for="cid">Select Clinic</label>
            <select name="cid" id = "cid" >
                <option disable selected> Select Clinic</option>
                <?php
                    $csql = "SELECT id, clinicname FROM clinic";
                    $cres = $conn->query($csql);
                    while ($crow = $cres->fetch_assoc()) {
                        printf(
                            '<option value="%s">%s', $crow['id'], $crow['clinicname']
                        );
                    }

                ?>
            </select>
            </div>
    <!-- <div class="col-md-4">
    <label for="username">Username</label>
        <input type="text" id="username" name="username" onkeyup="userinfofill(this.value)" value="">
    </div> -->
    <!-- <div class="col-md-4">
    <label for="name">Name</label>
        <input type="text" id="name" name="name" >
    </div> -->
</div>
        
<div class="row">
        <div class="col-md-4">
            <label for="did">Select Doctor</label>
            <select name="did" id = "did" onchange="showDoc(this.value)" >
                <option disable selected> Select Doctor</option>
                
            </select>
            </div>
    <!-- <div class="col-md-4">
    <label for="age">Age</label>
        <input type="text" id="age" name="age" >
    </div> -->
    <!-- <div class="col-md-4">
    <label for="gender">Gender</label>
        <input type="text" id="gender" name="gender" >
    </div>
    <div class="col-md-4">
    <label for="phn">Phone Number</label>
        <input type="text" id="phn" name="phn" >
    </div> -->
    <div class="col-md-4">
            <label for="problem">Tell us about your problem</label>
        <textarea class="form-control mb-4" name = "problem" id="problem" rows="5"></textarea>
            </div>
</div>
        

        

        <div class="row">
            <div class="col-md-4">
            <!-- <label for="location">Current Location</label>
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
          </select> -->
            </div>
            
            
        </div>
      
        <div class="row">
            
        </div>



        

      
          
        <div class="input-group w-50 mx-auto mt-0 mb-1">
                    <input type="submit" value="Submit">
                </div>
        </form>
      </div>





      <div style="text-align:center" class="mt-5">
        <p id= "str1"></p>
       
      </div>

</div>




<!-- footer section -->
<br>
<br>
<br>
<?php
include('../../../../footer.php');
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>




        <script>
$(document).ready(function(){
    $('#cid').on('change', function(){
        var cid = $(this).val();
        if(cid){
            $.ajax({
                type:'POST',
                url:'fetchdoctor.php',
                data:'cid='+cid,
                success:function(html){
                    $('#did').html(html);
                  
                }
            }); 
        }else{
            $('#did').html('<option value="">Select Clinic first</option>');
  
        }
    });

});
</script>








<!-- User info fillup using fetch api  -->
    <script>
      async function userinfofill(x) {
   

        const user = x;

       

        const res = await fetch("../autoSuggestion/userfill.php?username="+x);
        const userdata = await res.json();


        document.getElementById("name").value = userdata.name;
        document.getElementById("age").value = userdata.age;
        document.getElementById("gender").value = userdata.gender;
        document.getElementById("phn").value = userdata.phone;
        document.getElementById("location").value = userdata.location;






      }
    </script>





      



      
    <script>
            function showDoc(str) {
            
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("str1").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET","doctorinfo.php?did="+str,true);
                xmlhttp.send();
        
            }
    </script>


            
    





    
</body>
</html>