<?php
session_start();
include('C:\xampp\htdocs\virtualHospital\connect.php');


if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $islogged = 1;
    $userInfoSql = "SELECT * FROM userinfo WHERE username = '$username'";
    $userInfo = $conn->query($userInfoSql)->fetch_assoc();
    $name = $userInfo['name'];
}
else {
    $islogged = 0;
}


?>

<!-- 1st nav like cdc  -->
<nav class="navbar navbar-light bg-light mt-2 ">
        <div class="container-fluid d-flex justify-content-between d-inline">
            <div class="flex">
                
                <a class="navbar-brand text-dark align-items-center" href="/virtualHospital">
                    <div class="d-flex flex-row">
                            <div>
                            <img class="logo" src="/virtualHospital/img/svh1.png" alt="">
                            </div>
                            <div class="" >
                        <b style="font-size: 32pt; mb-0">Swift<span style="color: red;font-size: 32pt; "> Virtual Hospital</span> <p class="mt-0">SVH 24/7: Savings life, <span style="color:red;">hotline:</span>  01521413418 </p> </b> 
                        </div>
                    </div>
                    
                  
                </a>
                
                    
            </div>

             
                <!-- <img class="" style="width: 20%; height: 20%;border-radius: 15px; " src="/virtualHospital/img/svh6.png" alt="logo"> -->
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> -->

              
                <div>
                    <?php
                        if ($islogged == 1) {
                            ?>
                             <div class="text-center"><?php echo $name ?></div>
                            <div>
                            <a class="nav-link text-white" href="/virtualHospital/usermanagement/logout.php"><button class="btn align-middle" style="background-color: purple;color: white;   border: none;border-radius: 5px; cursor: pointer;  ">Log Out</button></a>
                            </div>

                            <?php
                        }
                        else {
                    ?>
                        <div class="ml-4">Guest</div>
                        <div>
                        <a class="nav-link text-white" href="/virtualHospital/usermanagement/login.php"><button class="btn " style="background-color: purple;color: white;   border: none;border-radius: 5px; cursor: pointer;  ">Log In</button></a>
                        </div>
                    <?php
                        }
                        ?>
                    
                    

                </div>
             
        </div>
        
 </nav>

    <!-- Start Navbar -->
    <nav style="background-color: purple; color: white; margin:0;  " class="shadow rounded">
        <div class="container-fluid">

     
            <div class="container-fluid py-0" style="" >
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
                <ul style="color: white; font-family: 'DynaPuff', cursive; " class="navdecor">
                <!-- nav nav-tabs nav-fill p-3 -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/virtualHospital/index.php">HOME</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href="services.php">SERVICES</a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/virtualHospital/doctor/doctor.php">DOCTORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/virtualHospital/nurse/nurse.php">NURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/virtualHospital/clinic/clinic.php">CLINICS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="/virtualHospital/ambulance/ambulance.php">AMBULANCES</a>
                    </li>
                    


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            OTHER SERVICES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/virtualHospital/mobileclinic/mobileclinic.php">MOBILE CLINIC</a></li>
                            <li><a class="dropdown-item" href="/virtualHospital/mods/mods.php">Mobile Oxygen Delivery System</a></li>
                            <li><a class="dropdown-item" href="/virtualHospital/midcs/midcs.php">Mobile Infectious Disease Control System</a></li>
                            <li><a class="dropdown-item" href="/virtualHospital/bloodbank/bloodbank.php">BLOOD BANK</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/virtualHospital/sds/sds.php">SERVICE DELIVERY SYSTEM</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/virtualHospital/aidoctor/">AI Doctor</a>
                    </li>
                    <?php 
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['username']=='admin') {
                            ?>

                            <li class="nav-item">
                            <a class="nav-link text-white" href="/virtualHospital/sds/serviceManage/doctorVerifyReq.php">Doctor Verify</a>
                            </li>
                        <?php
                        }
                    }
                    ?>


                </ul>

            </div>
        </div>
    </nav>
    <!-- End Navbar-->