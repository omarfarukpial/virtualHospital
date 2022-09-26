<?php
    session_start();
    include('../../../../connect.php');










    $symptom = $_POST['symptom'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phn = $_POST['phn'];
    $location = $_POST['location'];
    $problem = $_POST['problem'];





   

    // $stmt = "INSERT INTO sds (symptom, username, name, age, gender, phn, location, problem)
    // VALUES ('$symptom', '$username' '$name', '$age', '$gender', '$phn', '$location', '$problem')";
    // $conn->query($stmt);


    $_SESSION['symptom'] = $symptom;
    $_SESSION['username'] = $username;
    $_SESSION['problem'] = $problem;









    mysqli_query($conn,'TRUNCATE TABLE temptable');





    $doctabletraversesql = "SELECT * FROM doctor";
    $doctabletraverse = $conn->query($doctabletraversesql);

                    
    if ($doctabletraverse->num_rows > 0) {
    
        while($row = $doctabletraverse->fetch_assoc()) {
            $docid = $row["id"];
            $dsp = $row["specialization"];
            $dloc = $row["location"];
            
            


            $fetchlwsql = "SELECT $dloc AS lbasew FROM locationweight 
            WHERE plocation = '$location'";
            $w1 = $conn->query($fetchlwsql);
            $rowoflw = $w1->fetch_assoc();
            $lweight = $rowoflw['lbasew'];
            



            $fetchlwsql2 = "SELECT $dsp AS lbasew2 FROM deptweight 
            WHERE psymp = '$symptom' ";
            $w2 = $conn->query($fetchlwsql2);
            $rowoflw2 = $w2->fetch_assoc();
            $lweight2 = $rowoflw2['lbasew2'];

           








            $totalweight =  3*(double)$lweight2 + 2*(double)$lweight;
            




            $dataupsql = $conn->prepare("insert into temptable (docid, weight)
            values(?,?)");
            $dataupsql->bind_param("sd", $docid, $totalweight);
            $dataupsql->execute();




            
        }
    } else {
        echo "No value in Doctor Table";
    }



    header("Location: doctorSuggestionList.php");
    
    
    // $stmt->close();
    $conn->close();
    

?>
