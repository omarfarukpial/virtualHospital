

<?php

include('../../../../connect.php');
$doctorid = intval($_GET['did']);



mysqli_select_db($conn,"healthinformatics");
$sql="SELECT * FROM doctor WHERE id = '".$doctorid."'";
$result = mysqli_query($conn,$sql);

echo "<h4>Doctor Details</h4>";
echo "<table class='table table-striped table-borderd text-center w-75 mx-auto  table-hover' style='border-radius: 1em;
overflow: hidden;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>".
"<thead class='thead-dark'>".
    "<tr>".
        "<th>ID</th>".
        "<th>Name</th>".
        "<th>Age</th>".
        "<th>Gender</th>".
        "<th>Specialization</th>".
        "<th>Designation</th>".
        "<th>Fees</th>".
        "<th>Current Location</th>".
        "<th>Phone Number</th>".
    "</tr>".
"</thead>"
;


while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td align=right>". date_diff(date_create($row["dob"]), date_create(date("Y-m-d")))->format('%y') . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['specialization'] . "</td>";
  echo "<td>" . $row['designation'] . "</td>";
  echo "<td>" . $row['fees'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['phoneNumber'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>






