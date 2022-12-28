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

    <title>Clinic</title>


   
    <!-- Jquery adding for Table management -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</head>
<body class="container-fluid">
    

  
  
<?php
    include('../navbar.php');
?>
 




 <section id="news" class="container-xxl d-flex justify-content-between mb-4 rounded bg-info shadow">

    <div>
    <button type="button" class="btn-add"  onclick="location.href = 'ClinicForm.php' ">Add Clinic</button>
        
    </div>

    <div>
    <h1 class="text-center text-white header-font mt-4"> Clinic List</h1>
    </div>
    <div>
    <button type = "button" class="btn-back" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Back </button>
    </div>
    

</section>
    
        
<div class="container-xxl" style="width:100%; margin: auto;">
    
    <table id = "table_id" class="table table-striped table-borderd text-center mx-auto  table-hover" style="border-radius: .5em;
        overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Clinic Name</th>
                        <th>Number of Beds</th>
                        <th>Hotline</th>
                        <th>Current Location</th>
                        <th>Doctor List</th>
                        <th>Nurse List</th>
                        <th>Action</th>
                  
                        
                    </tr>
                </thead>
                <?php
                    
                    include('../connect.php');

                    $sql = "SELECT * FROM clinic";
                    $result = $conn->query($sql);
                    
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                    
                        while($row = $result->fetch_assoc()) {


                        


                            echo"<tr>";
                            echo "<td align=right>". $row["id"]. "</td>".
                                "<td>". $row["clinicname"]. "</td>" .
                                "<td align=right>". $row["nbeds"] . "</td>". 
                                "<td>". $row["phn"]. "</td>" .
                                "<td>". $row["location"] . "</td>".
                                "<td><a href= 'doctorList.php?cid=".$row["id"]."&cname=".$row['clinicname']."'><button type='button' class = 'btn btn-primary btn-sm'> See Doctors </button></a></td>".
                                "<td><a href= 'nurseList.php?cid=".$row["id"]."&cname=".$row['clinicname']."'><button type='button' class = 'btn btn-primary btn-sm'> See Nurse </button></a></td>".
                                "<td> <button type= 'button' class = 'btn btn-success btn-sm editbtn'> Edit</button> ".
                                "<button type='button' class = 'btn btn-danger btn-sm deletebtn'> DELETE </button></td>";
                            echo"</tr>";
                        }
                    } else {
                        echo "0 results";
                    }


                ?>
                    
    </table>

        

</div>







  



            <!-- footer section -->
<br>
<br>
<br>
<?php
include('../footer.php');
?>






<!-- Delete modal  -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="clinicdelete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-danger"> Delete </button>
                    </div>
                </form>

            </div>
        </div>
    </div>




        <!-- Edit Modal -->


<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Clinic Data </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="lform-modal">

                <form action="clinicedit.php" method="post">
                <input type="hidden" name="update_id" id="update_id">
            <label for="clinicname">Clinic Name</label>
            <input type="text" id="clinicname" name="clinicname" placeholder="Clinic name...">
        
            

         
            <label for="nbeds">Number of Beds</label>
            <input type="text" id="nbeds" name="nbeds" placeholder="Number of Beds...">

            
            <label for="phn">Hotline number</label>
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




            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
            </form>

            </div>
        </div>
    </div>

    





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

 
<script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
</script>
  

    <script>
        $(document).ready(function () {

      


      
            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');
                

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#clinicname').val(data[1]);
                $('#nbeds').val(data[2]);
                $('#phn').val(data[3]);
                $('#location').val(data[4]);

                
                

               

            });

        });




    </script>




<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
</script>














            


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


            
    


            
    







    
</body>
</html>