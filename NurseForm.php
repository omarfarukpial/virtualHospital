<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="newcss.css">
    <link rel="stylesheet" href="inputFormNew.css">
    
    <title>Nurse Form</title>

</head>
<body>
   

   
    
<?php
    include('navbar.php');
?>




    <section id="news" class="container pt-4">
        <h1 class="text-center header-font mt-4"> Nurse <span class="p-text">Registration Form</span> </h1>
    </section>


    <div style="display: flex;">
    <div class="dform">
        <form action="nurseformup.php" method="post">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your fisrt name...">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name...">

          <label for="phn">Phone number</label>
          <input type="text" id="phn" name="phone" placeholder="Your phone number...">

          <label for="age">Age</label>
          <input type="text" id="age" name="age" placeholder="Your age...">


          <label for="gender">Gender</label>
          <select id="gender" name="gender">
            <option disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>

          <label for="designation">Designation</label>
          <select id="designation" name="designation">
            <option disabled selected>Select Designation</option>
            <option value="Senior Staff Nurse">Senior Staff Nurse</option>
            <option value="Staff Nurse">Staff Nurse</option>
            <option value="Nurse">Nurse</option>
          </select>

          <label for="nfee">Fees per hour</label>
          <input type="text" id="nfee" name="nfee" placeholder="Your Fees per hour...">
          
          


      
          <label for="division">Current Location</label>
          <select id="division" name="division">
          
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






          
          <input type="submit" value="Submit">
        </form>
      </div>

      <div class="descontent">
          <div style="margin-left:40%;">
          <img src="img/nurseimage.jpg" alt="Doctor logo" height=200px width=200px style="border-radius: 50%;">
          </div>
          
          <br>
          <h5>A nurse is a health care professional who is engaged in the practice of nursing. Nurses are men and women who are responsible (along with other health care professionals) for the treatment, safety and recovery of acutely or chronically ill or injured people, health maintenance of the healthy, and treatment of life-threatening emergencies in a wide range of health care settings. </h5>

        </div>
  
    </div>

    <div style="margin-right:10px" class="container text-right">
            <a href="nurse.php">
                <button type = "button" class="btn-back"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
            </a>
            </div>


<!-- footer section -->
<br>
<br>
<br>
<?php
include('footer.php');
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


            
    


      




    






    
</body>
</html>