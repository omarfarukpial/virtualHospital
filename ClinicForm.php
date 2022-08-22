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
    <link rel="stylesheet" href="inputForm.css">
    
    <title>Clinic Form</title>

    <style>
        table {
        
        border-collapse: collapse;
        }

        table, td, th {
        border: 1px solid black;
        padding: 5px;
        }

        th {text-align: left;}
    </style>

</head>
<body>
   

<?php
    include('navbar.php');
?>


    <?php 
    include('connect.php');


    ?>



    <a href="clinic.php">
        <button class="btn-back"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>

    </a>

    <section id="news" class="container my-5 pt-4">
        <h1 class="text-center header-font my-5"> Clinic <span class="p-text">Registration Form</span> </h1>
    </section>


    <div style = "display:flex">
        <div class="dform" style="width:40%; margin-left:50px;">
            <form action="clinicformup.php" method="post">
            <label for="clinicname">Clinic Name</label>
            <input type="text" id="clinicname" name="clinicname" placeholder="Clinic name...">
        
            

            
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



            <!-- <label for="remarks">Remarks</label>
            <input type="text" id="remarks" name="remarks" placeholder="Remarks...">

            <label for="nbeds">Number of Beds</label>
            <input type="text" id="nbeds" name="nbeds" placeholder="Number of Beds...">

            <label for="fpbed">Fees per Bed</label>
            <input type="text" id="fpbed" name="fpbed" placeholder="Fees per Bed..."> -->


            <label for="cdoctor">Doctor</label>
            <select name="cdoctor" id="cdoctor" onchange="showUser(this.value)">
                <option disable selected>Select Doctor</option>
                <?php
                    $sql='select id, firstName from doctorform';
                    $res=$conn->query( $sql );
                    
                    while( $row = $res->fetch_assoc() ){
                        printf(
                            '<option value="%s">%s',
                            $row['id'],
                            $row['firstName']
                        );
                    }
                ?>
                
            </select>


            <label for="cnurse">Nurse</label>
            <select name="cnurse" id="cnurse" onchange="showUserNurse(this.value)">
                <option disable selected>Select Nurse</option>
                <?php
                    $sql='select id, firstName from nurseform';
                    $res=$conn->query( $sql );
                    
                    while( $row = $res->fetch_assoc() ){
                        printf(
                            '<option value="%s">%s',
                            $row['id'],
                            $row['firstName']
                        );
                    }
                ?>
                
            </select>

            <label for="nbeds">Number of Beds</label>
            <input type="text" id="nbeds" name="nbeds" placeholder="Number of Beds...">






        
            
            <input type="submit" value="Submit">
            </form>
        </div>

        <div style="text-align: center">
            
            <p id="str2"></p>

            <br>
            <br>
            <p id="str3"></p>



        </div>
    

    </div>

    
    <script>
        function showUser(str) {
        
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("str2").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","docinfoshow.php?q="+str,true);
        xmlhttp.send();
        }

 
    </script>

    <script>
               function showUserNurse(nurseid) {
        
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("str3").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","nurseinfoshow.php?q="+nurseid,true);
        xmlhttp.send();
        }
    </script>


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