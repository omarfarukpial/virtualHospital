<!DOCTYPE html>
<html>
<head>
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

include('connect.php');
$q = intval($_GET['q']);



mysqli_select_db($conn,"healthinformatics");
$sql="SELECT * FROM nurseform WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<h4>Nurse Details</h4>";
echo "<table>".
"<tr>".
    "<th>Firstname</th>".
    "<th>Lastname</th>".
    "<th>Age</th>".
    "<th>Gender</th>".
    "<th>Specialization</th>".
    "<th>Fees</th>".
    "<th>Current Location</th>".
"</tr>";


while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstName'] . "</td>";
  echo "<td>" . $row['lastName'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['designation'] . "</td>";
  echo "<td>" . $row['fee'] . "</td>";
  echo "<td>" . $row['division'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>







