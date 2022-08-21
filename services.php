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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="newcss.css">


    <title>Services</title>

</head>
<body>
    

   
    <!-- 1st nav like cdc  -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="flex">
                <a class="navbar-brand text-dark" href="index.html"><img class="logo" src="img/svh1.png" alt="">
                    <b>Swift<span style="color: red;"> Virtual Hospital</span> </b> </a>
            </div>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Start Navbar -->
    <nav style="background-color: #005EAA; color: whitesmoke;" class="shadow rounded">
        <div class="container-fluid">


            <div class="container">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
                <ul style="color: white;" class="nav nav-tabs nav-fill p-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.html">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="services.php">SERVICES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="doctor.php">DOCTORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="nurse.php">NURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="clinic.php">CLINICS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="ambulance.php">AMBULANCES</a>
                    </li>
                    


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            OTHER SERVICES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mobileclinic.php">MOBILE CLINIC</a></li>
                            <li><a class="dropdown-item" href="mods.php">MODS</a></li>
                            <li><a class="dropdown-item" href="midcs.php">MIDCS</a></li>
                            <li><a class="dropdown-item" href="bloodbank.php">BLOOD BANK</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="serviceDeliverySystem.php">SERVICE DELIVERY SYSTEM</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- End Navbar-->



    <a href="index.html">
        <button class="btn-back"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>

    </a>






    <section id="news" class="container my-5 pt-4">
        <h1 class="text-center header-font my-5"><span class="p-text">Services</span> </h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
            <a href="doctor.php">
                <div class="col">
                    <div class="card border rounded h-100">
                        <div class="m-5 text-center">
                            <img src="img/doctorimage.webp" class="w-65 card-img-top rounded-circle" alt="...">
                        </div>

                        <div class="card-body text-center px-5">

                            
                            <h1 class="p-text">Doctors</h1>
                        </div>
                    </div>
                </div>





            </a>

            <a href="nurse.php">
                <div class="col">
                    <div class="card border rounded h-100">
                    <div class="m-5 text-center">
                                <img src="img/nurseimage.jpg" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h1 class="p-text">Nurses</h1>
                            </div>
                    </div>
                </div>

            </a>

            


            <a href="clinic.php">
                <div class="col">
                    <div class="card border rounded h-100">
                    <div class="m-5 text-center">
                                <img src="img/clinic.png" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h1 class="p-text">Clinics</h1>
                            </div>
                    </div>
                </div>

            </a>


            <a href="mobileclinic.php">
                <div class="col">
                    <div class="card border rounded h-100">
                    <div class="m-5 text-center">
                                <img src="img/mobileclinic.png" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h1 class="p-text">Mobile Clinics</h1>
                            </div>
                    </div>
                </div>

            </a>

            <a href="ambulance.php">
                <div class="col">
                    <div class="card border rounded  h-100">
                    <div class="m-5 text-center">
                                <img src="img/ambulanceimage.jpg" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h2 class="p-text">Ambulances</h2>
                            </div>
                    </div>
                </div>

            </a>




            <a href="mods.php">
                <div class="col">
                    <div class="card border rounded h-100">
                    <div class="m-5 text-center">
                                <img src="img/oxygenicon.png" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h4 class="p-text">Mobile Oxygen Delivery Service</h4>
                            </div>
                    </div>
                </div>

            </a>

            <a href="midcs.php">
                <div class="col">
                    <div class="card border rounded h-100">
                    <div class="m-5 text-center">
                                <img src="img/midcs.png" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h5 class="p-text">Mobile Infectious Disease  Contains Systems</h5>
                            </div>
                    </div>
                </div>

            </a>


            <a href="bloodbank.php">
                <div class="col">
                    <div class="card border rounded h-100">
                    <div class="m-5 text-center">
                                <img src="img/bloodbankicon.jpg" class="w-65 card-img-top rounded-circle" alt="...">
                            </div>

                            <div class="card-body text-center px-5">

                                
                                <h1 class="p-text">Blood Bank</h1>
                            </div>
                    </div>
                </div>

            </a>

            






        </div>


    </section>


       <!-- footer section -->
       <footer class="container-fluid">
        <div class="container partition">
            <div>
                <h6 style="margin-top: 20px;">Have Questions?</h6>
                <a style="text-decoration: none; color: gray;" href="">VISIT SVH</a>
                <h6>Call 800-232-4636</h6>
                <a style="text-decoration: none; color: gray;" href="mail-to">Email CDC-INFO</a><br>
                <a style="text-decoration: none; color: gray;" href="mail-to">Open 24/7</a>

            </div>
            <div style="margin-left: 190px;">
                <h6 style="margin-top: 20px;">SVH INFORMATION</h6>
                <p>About SVH</p>
                <p>Jobs</p>
                <p>Funding</p>
                <p>info@svh.com</p>
            </div>
            <div style="margin-left: 190px;">
                <h6 style="margin-top: 20px;">Privacy</h6>
                <p>No fair act</p>
                <p>Accessility</p>
                <p>info@svh.com</p>
            </div>

            <div style="margin-left: 190px;">
                <h6 style="margin-top: 20px;">CONNECT WITH SVH</h6>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-white fontw" aria-current="page" href="#"><i
                                class="fa fa-facebook fa-1x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fontw" aria-current="page" href="services.html"><i
                                class="fa fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fontw" href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fontw" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>

                </ul>
            </div>


        </div>


        <div class="footer-end text-center">
            <h5 style="color: #b3a9a9;">Developed by Pial & Tarek</h5>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
  





    
</body>
</html>