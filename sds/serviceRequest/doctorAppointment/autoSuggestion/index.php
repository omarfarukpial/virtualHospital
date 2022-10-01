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
<body class="container-fluid">
    
<?php
    include('../../../../navbar.php');
?>
  
<!-- Back Button and Heading -->
<section id="news" class="d-flex justify-content-between mb-4 rounded bg-info shadow">
    <div>
        <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
    <div>
    <h1 class="text-center text-white header-font mt-4"> Doctor Auto Suggestion</h1>
    </div>
    <div>
        <button style="visibility:hidden;" type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
</section>


<!-- Appointment info form -->


    <div style="display: flex;">

    <div class="dform">
        <form action="doctorAutoSuggestion.php" method="post">

        <label for="symptom">Symptom</label>
        <select name="symptom" id="symptom">
            <option disable selected>Select your symptom</option>
            <option value="Cardiology">Chest pain</option>
            <option value="Cardiology">Shortness of breath</option>
            <option value="Darmatology">rashes on skin</option>
            <option value="Orthopedics">Fracture in bone</option>
            <option value="GeneralMedicine">Fever for two days</option>
            <option value="Gynecology">Bleeding after menopause</option>
        </select>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" onkeyup="userinfofill(this.value)" value="">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" >

        <label for="age">Age</label>
        <input type="text" id="age" name="age" >
      
        <label for="gender">Gender</label>
        <input type="text" id="gender" name="gender" >

        <label for="phn">Phone Number</label>
        <input type="text" id="phn" name="phn" >

        


          

          

          
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

          <br>



        <label for="problem">Tell us about your problem</label>
        <textarea class="form-control mb-4" name = "problem" id="problem" rows="5"></textarea>

      
          
          <input type="submit" value="Submit">
        </form>
      </div>


      


      <div style="text-align:center">
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






<!-- User info fillup using fetch api  -->
    <script>
      async function userinfofill(x) {
   

        const user = x;

       

        const res = await fetch("userfill.php?username="+x);
        const userdata = await res.json();


        document.getElementById("name").value = userdata.name;
        document.getElementById("age").value = userdata.age;
        document.getElementById("gender").value = userdata.gender;
        document.getElementById("phn").value = userdata.phone;
        document.getElementById("location").value = userdata.location;






      }
    </script>


            
    





    
</body>
</html>