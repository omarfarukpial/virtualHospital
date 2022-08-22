<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/icon.png">
    <link rel="stylesheet" href="newcss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@300;400&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <!-- Font Awesome adding -->
    <script src="https://kit.fontawesome.com/c045880d2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <title>Virtual Hospital</title>


    <style>
        
        .card {
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            padding: 14px 80px 18px 36px;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }
        
    </style>
</head>

<body>


    <?php
    include('navbar.php');

    ?>

    <!-- intro part -->
    <div class="container d-flex">
        <article
            style="border: 1px solid gray;margin-top: 15px; padding: 10px; border-radius: 15px; box-shadow: 4px 7px 6px #888888;font-family:DynaPuff;">
            <h5 style="color: #141514;"><span style="color: orangered;"><b>A virtual hospital</b> </span> is a
                way to
                provide remote hospital-level care and
                monitoring to patients
                with
                communicable (e.g., COVID-19) and non-communicable diseases (e.g., diabetes) using telehealth-based
                communication, IoT devices, AI for disease patterns identification, and more.</h5>
        </article>

    </div><br>

    <!-- swiper  -->
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/v0.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v1.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v2.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v3.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v4.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v5.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v6.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v4.png" />
                </div>
                <div class="swiper-slide">
                    <img src="img/v0.jpg" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- carousel part -->
    <!-- <div class="container">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="800">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/last.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/last2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/last33.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div> -->
    <!-- search part  -->
    <div style="border: 1px solid gray; margin-top: 15px; border-radius: 10px; box-shadow: 5px 10px 8px #888888; margin-bottom: 20px;"
        class="container">
        <div
            style="border: 1px solid gray; padding: 10px; margin: 15px; border-radius: 10px; box-shadow: 2px 6px 5px #d9cecec2;">
            <div class="d-flex">
                <img src="img/Screenshot_2.png" alt="">
                <div>
                    <h2>Diseases County Check</h2>
                    <p>Find community levels and prevention steps by county.</p>
                </div>


            </div>
            <h5>Select a Location (all fields required)</h5>
            <div class="input-group">
                <select class="custom-select" id="inputGroupSelect04">
                    <option disabled selected>Choose...</option>
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
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Go</button>
                </div>
            </div>
        </div>



    </div>

    <!-- partition part -->
    <div class="container container3">
        <div class="link1">
            <!-- <a class="menu"  href="services.php">Services</a> -->
            <a class="menu" href="serviceDeliverySystem.php">Service Delivery System</a>
        </div>

        <div class="link2">
            <p style="padding: 10px;"> <b style="color: orange; font-size: large;">Virtual Hospital</b> in devoloping
                countries
                like
                Bangladesh are not adequate. The
                major
                issue of Bangladesh is
                its large populatiion. The infectious disease affects severely here and spreads a lot faster than in
                other
                countries. The rural area lacks enough hospitals, qualified doctors. and proper medical equipment. When
                outbreaks take places, they become cumbersome for developing countries. To solve such problems we need a
                low-cost medical service, that will have all the necessary things that are needed for the patient</p>

        </div>

    </div>

    <div class="container my-5">
        <div class="card-deck  ">
            <div class="card bg-info">
                <img class="card-img-top" src="img/Screenshot_3.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Quarantine & Isolation</h5>
                    <p class="card-text">Learn the latest recommendations after COVID-19 exposure or if you are sick.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card bg-info">
                <img class="card-img-top" src="img/Screenshot_4.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Making the Vaccine Decision</h5>
                    <p class="card-text">Learn about the importance of on-time vaccination during childhood.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card bg-info">
                <img class="card-img-top" src="img/Screenshot_5.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Drinking Water Week</h5>
                    <p class="card-text">Learn more about where your drinking water comes from and what makes it safe to
                        use.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Question section -->

    <!-- faq ending -->
    <!-- <div class="container ">
        <img style="margin: auto;" width="100%" height="100%" src="img/ss1.png" alt="">
    </div> -->

    <!-- Button trigger modal -->


    <?php
        include('footer.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            autoplay: { delay: 2000 },
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            // pagination: {
            //     el: ".swiper-pagination",
            // },
        });
    </script>
</body>

</html>