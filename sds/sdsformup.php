<?php
    include('connect.php');
    $symptom = $_POST['symptom'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phn = $_POST['phn'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("insert into sdsform (symptom, name, age, gender, phn, location)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $symptom, $name, $age, $gender, $phn, $location);
    $stmt->execute();

    mysqli_query($conn,'TRUNCATE TABLE temptable');





    $doctabletraversesql = "SELECT * FROM doctorform";
    $doctabletraverse = $conn->query($doctabletraversesql);

                    
    if ($doctabletraverse->num_rows > 0) {
    
        while($row = $doctabletraverse->fetch_assoc()) {
            $docid = $row["id"];
            $dsp = $row["specialization"];
            $dloc = $row["division"];
            


            $fetchlwsql = "SELECT ".$dloc." AS lbasew FROM locationweight 
            WHERE plocation = '$location' ";
            $w1 = $conn->query($fetchlwsql);
            $rowoflw = $w1->fetch_assoc();
            $lweight = $rowoflw['lbasew'];


  
                $fetchlwsql2 = "SELECT ".$dsp." AS lbasew2 FROM deptweight 
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



    header("Location: suggestion.php");
    
    
    $stmt->close();
    $conn->close();
    

?>
