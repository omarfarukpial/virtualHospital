<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
session_start();
if(!isset($_SESSION['mail'])){
    header("Location:Home.php");
}
$DB="imple";
$USER="root";
$PASSWORD="";
$HOST="localhost";
$connect = mysqli_connect($HOST, $USER, $PASSWORD, $DB);

if (!$connect) {
  echo "Connected failed";
}
else{
echo " ";
}



/*$open = fopen('teacher.txt', "r") or die("can't open file");
$ara = array(); 
$zi=0;
while(!feof($open)){
  $lik = fgets($open);
  $lik = trim($lik, "\n");
  $tok = explode(",",$lik);
  $ara[$zi]=array(); 
  $cnt = sizeof($tok);
  for($x=0; $x<$cnt; $x++){
    $ara[$zi][$x] = $tok[$x];
  }
  $zi++;
 }
fclose($open);		
$recorded=$ara;  
$lengi=sizeof($recorded)-1;
//echo "out of-",$lengi;
//(int)$sid2=(int)(($lengi/2)-2);
//(int)$sid3=(int)($lengi/2);
    // $sid4=$lengi-2;*/


$q11="select * from student where id between 1 and 1000";
$da11=mysqli_query($connect, $q11);
$rtr11 = mysqli_fetch_assoc($da11);
$co = mysqli_num_rows($da11);        




      $file = fopen('student.txt', "w") or die("can't open file");

			for($i=1;$i<=$co;$i++){

				$qq1="select * from student where id=$i";
					$dda1=mysqli_query($connect, $qq1);
					$rtrr1 = mysqli_fetch_assoc($dda1);
					

					$location=$rtrr1['location1'];
					$sub=$rtrr1['subject1'];
					$budget=$rtrr1['budget1'];
					$availability=$rtrr1['availability1'];

               $in=$location.",".$sub.",".$budget.",".$availability."\n";
                fputs($file,$in)or die("can't write file");

			}
      fclose($file);



$qsp="select * from teacher where id between 1 and 1000";
$dspk=mysqli_query($connect, $qsp);
$rtsp = mysqli_fetch_assoc($dspk);
$cos = mysqli_num_rows($dspk);        




      $file = fopen('teacher.txt', "w") or die("can't open file");

			for($i=1;$i<=$cos;$i++){

			  	$ak="select * from teacher where id=$i";          
					$duk=mysqli_query($connect, $ak);
					$rtrv = mysqli_fetch_assoc($duk);
					

					$location=$rtrv['location1'];
					$sub=$rtrv['subject1'];
					$budget=$rtrv['expectation1'];
					$availability=$rtrv['availability1'];     

          $in=$location.",".$sub.",".$budget.",".$availability."\n";
          fputs($file,$in)or die("can't write file");

			}
      fclose($file);

     
     

  $mail= $_SESSION['mail'];
  $pass = $_SESSION['pass'];
  

  
 
  $query="select * from student where email='$mail' and password = '$pass'";
  $data=mysqli_query($connect, $query);
  $result = mysqli_fetch_assoc($data);
  
  $ifs=$result['id'];
  
 

  if($ifs==1){
    $sid2= $ifs+2;
    (int)$sid3=(int)($co/2);
    $sid4= $co-2;

  }
  else if($ifs==$co){
    $sid2= 2;
    (int)$sid3=(int)($co/2)-1;
    $sid4= $co-1;

  }
  else if($ifs>1 && $ifs<$co-2){
    $sid2= $ifs+2;
    $sid3= $ifs-1;
    $sid4= $ifs+1; 

  }

  $_SESSION['pl1']= $ifs;
  $_SESSION['pl2']= $sid2;
  $_SESSION['pl3']= $sid3;
  $_SESSION['pl4']= $sid4;

  //echo "id1-" , $sid2;
  //echo "id2-" , $sid3;
  //echo "id3-" , $sid4;


  $q1="select * from student where id='$sid2'";
  $d1=mysqli_query($connect, $q1);
  $r1 = mysqli_fetch_assoc($d1);


  $q2="select * from student where id='$sid3'";
  $d2=mysqli_query($connect, $q2);
  $r2 = mysqli_fetch_assoc($d2);


  $q3="select * from student where id='$sid4'";
  $d3=mysqli_query($connect, $q3);
  $r3 = mysqli_fetch_assoc($d3);


  $loc=$result['location1'];
  $sub=$result['subject1'];
  $exc=$result['budget1'];
  $ava=$result['availability1'];

  $loc1=$r1['location1'];
  $sub1=$r1['subject1'];
  $exc1=$r1['budget1'];
  $ava1=$r1['availability1'];

  $loc2=$r2['location1'];
  $sub2=$r2['subject1'];
  $exc2=$r2['budget1'];
  $ava2=$r2['availability1'];

  $loc3=$r3['location1'];
  $sub3=$r3['subject1'];
  $exc3=$r3['budget1'];
  $ava3=$r3['availability1'];
 
   $file = fopen('cen1.txt', "w") or die("can't open file");
   $in=$loc.",".$sub.",".$exc.",".$ava."\n".$loc1.",".$sub1.",".$exc1.",".$ava1."\n".$loc2.",".$sub2.",".$exc2.",".$ava2."\n".$loc3.",".$sub3.",".$exc3.",".$ava3."\n";
   fputs($file,$in)or die("can't write file");
   fclose($file);


      $qry="select id from student where email='$mail' and password = '$pass'";
      $da=mysqli_query($connect, $qry);
      $tot = mysqli_num_rows($da);
      $re = mysqli_fetch_assoc($da);

      $id =  $re['id']; 
     
      
      if(isset($_POST['submit'])){
        $filename= $_FILES["fileToUpload"]["name"];
        $tempname= $_FILES["fileToUpload"]["tmp_name"];
        $folder="image/".$filename; 

        move_uploaded_file($tempname,$folder);
        
           $quer="UPDATE teacher SET photo='$folder' WHERE id='$id'";
          
            $data=mysqli_query($connect,$quer);
            if($data){
                echo"";
            }
        
           
      
        }

      $qr="select * from student where id='$id'";
    
      $dat=mysqli_query($connect, $qr);
      $tota = mysqli_num_rows($dat);
      $res = mysqli_fetch_assoc($dat);


function fina($g1,$g2,$g3,$g4,$lenth,$lenth1,$lenth2,$lenth3)
{
/*  echo"final output: ";
   for($j=0;$j<$l;$j++){
        echo"$f[$j] ";
    }
    echo"</br>";*/
    $_SESSION['vsc1'] = $g1;
    $_SESSION['vsc2'] = $g2;
    $_SESSION['vsc3'] = $g3;
    $_SESSION['vsc4'] = $g4;
    $_SESSION['l1'] = $lenth;
    $_SESSION['l2'] = $lenth1;
    $_SESSION['l3'] = $lenth2;
    $_SESSION['l4'] = $lenth3;
    
}


function centroidcalculate($g1,$g2,$g3,$g4,$it,$lenth,$lenth1,$lenth2,$lenth3)
{
    
	GLOBAL $record;
    $itr=$it;
    $sum=0;
	$sum1=0;
	$sum2=0;
	$sum3=0;
	$summ=0;
	$summ1=0;
	$summ2=0;
	$summ3=0;
    //echo"<br>";
     if($lenth==0){
        $cen[0][0]=$centroid[0][0];
        $cen[0][1]=$centroid[0][1];
        $cen[0][2]=$centroid[0][2];
        $cen[0][3]=$centroid[0][3];
     }
     else{
     for($i=0;$i<$lenth;$i++){
        (int)$sum=(int)$sum+(int)$record[$g1[$i]-1][0];
        $sum1=$sum1+$record[$g1[$i]-1][1];
        $sum2=$sum2+$record[$g1[$i]-1][2];
		$sum3=$sum3+$record[$g1[$i]-1][3];
      }
    $a1=$sum/$lenth;
    $a2=$sum1/$lenth;
    $a3=$sum2/$lenth;
    $a4=$sum3/$lenth;

    $cen[0][0]=$a1;
    $cen[0][1]=$a2;
    $cen[0][2]=$a3;
	  $cen[0][3]=$a4;
    
    } 
    
    if($lenth1==0){
        $cen[1][0]=$centroid[1][0];
        $cen[1][1]=$centroid[1][1];
        $cen[1][2]=$centroid[1][2];
        $cen[1][3]=$centroid[1][3];
     }
     else{
    for($i=0;$i<$lenth1;$i++){
        (int)$summ=(int)$summ+(int)$record[$g2[$i]-1][0];
        $summ1=$summ1+$record[$g2[$i]-1][1];
        $summ2=$summ2+$record[$g2[$i]-1][2];
		$summ3=$summ3+$record[$g2[$i]-1][3];
    }

    $b1=$summ/($lenth1);
    $b2=$summ1/($lenth1);
    $b3=$summ2/($lenth1);
    $b4=$summ3/($lenth1);

    $cen[1][0]=$b1;
    $cen[1][1]=$b2;
    $cen[1][2]=$b3;
	$cen[1][3]=$b4;
    
}
if($lenth2==0){
    $cen[2][0]=$centroid[2][0];
    $cen[2][1]=$centroid[2][1];
    $cen[2][2]=$centroid[2][2];
    $cen[2][3]=$centroid[2][3];
 }
 else{
	for($i=0;$i<$lenth2;$i++){
        (int)$summm=(int)$summm+(int)$record[$g3[$i]-1][0];
        $summm1=$summm1+$record[$g3[$i]-1][1];
        $summm2=$summm2+$record[$g3[$i]-1][2];
		$summm3=$summm3+$record[$g3[$i]-1][3];
    }
	
    $c1=$summm/($lenth2);
    $c2=$summm1/($lenth2);
    $c3=$summm2/($lenth2);
    $c4=$summm3/($lenth2);

    $cen[2][0]=$c1;
    $cen[2][1]=$c2;
    $cen[2][2]=$c3;
	$cen[2][3]=$c4;
    
}
if($lenth3==0){
    $cen[3][0]=$d1;
    $cen[3][1]=$d2;
    $cen[3][2]=$d3;
    $cen[3][3]=$d4;
   
 }
 else{
	for($i=0;$i<$lenth3;$i++){
        (int)$summmm=(int)$summmm+(int)$record[$g4[$i]-1][0];
        $summmm1=$summmm1+$record[$g4[$i]-1][1];
        $summmm2=$summmm2+$record[$g4[$i]-1][2];
		$summmm3=$summmm3+$record[$g4[$i]-1][3];
    }
	
    $d1=$summmm/($lenth3);
    $d2=$summmm1/($lenth3);
    $d3=$summmm2/($lenth3);
	  $d4=$summmm3/($lenth2);
	
//echo"Average = $a1 $a2 $a3 $a4 $b1 $b2 $b3 $b4 $c1 $c2 $c3 $c4 $d1 $d2 $d3 $d4 ";
	//echo"</br>";

    
   
	
    $cen[3][0]=$d1;
    $cen[3][1]=$d2;
    $cen[3][2]=$d3;
    $cen[3][3]=$d4;
}

    $itr++;
    
    if($itr==11){
	    fina($g1,$g2,$g3,$g4,$lenth,$lenth1,$lenth2,$lenth3);
        return 0;
    }
    else{
        distancecalculate($record,$cen,$itr);
    }

}

function cluster($s,$itt)
{
	$c=1;
	$cnt=0;
	$cnt1=0;
	$cnt2=0;
	$cnt3=0;
	GLOBAL $len;
	GLOBAL $len1;
    for($i=0;$i<$len;$i=$i+1){
        if(($s[$i]<=$s[$i+$len])&&($s[$i]<=$s[$i+(2*$len)])&&($s[$i]<=$s[$i+(3*$len)])){
          $g1[$cnt]=$c;
          $cnt++;
        }
        else if(($s[$i+$len]<=$s[$i])&&($s[$i+$len]<=$s[$i+(2*$len)])&&($s[$i+$len]<=$s[$i+(3*$len)])){
          $g2[$cnt1]=$c;
          $cnt1++;
        }
		else if(($s[$i+(2*$len)]<=$s[$i])&&($s[$i+(2*$len)]<=$s[$i+$len])&&($s[$i+(2*$len)]<=$s[$i+(3*$len)])){
          $g3[$cnt2]=$c;
          $cnt2++;
        }
		else if(($s[$i+(3*$len)]<=$s[$i])&&($s[$i+(3*$len)]<=$s[$i+$len])&&($s[$i+(3*$len)]<=$s[$i+(2*$len)])){
          $g4[$cnt3]=$c;
          $cnt3++;
        }
        $c++;

    }
	/*echo"Iteration-$itt";
	echo"</br>";
    echo"Group-1: ";
    for($j=0;$j<$cnt;$j++){
        echo"$g1[$j] ";
    }
    echo"</br>";
    echo"Group-2: ";
    for($k=0;$k<$cnt1;$k++){
        echo"$g2[$k] ";
    }
	echo"</br>";
    echo"Group-3: ";
    for($j=0;$j<$cnt2;$j++){
        echo"$g3[$j] ";
    }
    echo"</br>";
    echo"Group-4: ";
    for($k=0;$k<$cnt3;$k++){
        echo"$g4[$k] ";
    }
	echo"</br>";
	echo"</br>";*/
    centroidcalculate($g1,$g2,$g3,$g4,$itt,$cnt,$cnt1,$cnt2,$cnt3);
}

function distancecalculate($a,$b,$c)
{
  $p=0;
  $s=0;
  $it=$c;
  GLOBAL $len;
  GLOBAL $len1;
  
  for($i=0;$i<$len1;$i++){
    for($j=0;$j<$len;$j++){
            $sum=0;
            $q=0;
        for($k=0;$k<=3;$k++){
            (int)$sum=(int)$sum+((int)$a[$j][$k]-(int)$b[$p][$q])*((int)$a[$j][$k]-(int)$b[$p][$q]);
            $q++;
        }
       $distance=sqrt($sum);
	  // echo "$distance ";
       $v[$s]=$distance;
       $s++;
	  // echo "</br>value of s= $s";
    }
    $p++;
  }
  cluster($v,$it);
}

  $resultF = fopen('teacher.txt', "r") or die("can't open file");
	$array = array(); //Create the first dimension of a 2D array
	$z=0;
	while(!feof($resultF)){
	  $line = fgets($resultF);
	  $line = trim($line, "\n");
	  $tokens = explode(",",$line);
	  $array[$z]=array(); //Create the second dimension of the 2D array
	  $tokenCount = sizeof($tokens);
	  for($x=0; $x<$tokenCount; $x++){
		$array[$z][$x] = $tokens[$x];
	  }
	  $z++;
	 }
    fclose($resultF);		
    $record=$array;  
	
    $resultFF = fopen('cen1.txt', "r") or die("can't open file");
	$arra = array(); //Create the first dimension of a 2D array
	$w=0;
	while(!feof($resultFF)){
	  $lin = fgets($resultFF);
	  $lin = trim($lin, "\n");
	  $token = explode(",",$lin);
	  $arra[$w]=array(); //Create the second dimension of the 2D array
	  $tokenCnt = sizeof($token);
	  for($x=0; $x<$tokenCnt; $x++){
		$arra[$w][$x] = $token[$x];
	  }
	  $w++;
	 }	
    $centroid=$arra;
					
    $len=sizeof($record)-1;
  //	echo "</br> length= $len</br>";
    $len1=sizeof($centroid)-1;
   // echo "</br> length= $len1</br>";	
    $itr=1;
    distancecalculate($record,$centroid,$itr);

    
    
     
?>





<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Student Profile</title>
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" href="assets1/css/main.css" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/registration.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                                                                                 
    <style>
        div.gfg { 
               
                 
                background-color: white; 
                width: 369px; 
                height: 925px; 
                overflow: auto; 
                text-align:justify; 
            } 
            body{
                background-color:#b5b5b5;
                background-size:120%;
                color:#4c555d;
                font-family: 'Ubuntu', sans-serif;
                background-position:center bottom;
                background-repeat:no-repeat;
                background-attachment:fixed
            }
        </style>
		
	<style> 

body{
  
    color: #1a202c;
    text-align: left;
    background-color: #b5b5b5;    
}
.main-body {
   
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.btc {
  border-radius: 0%;
  width: 682px;
}
    .topnav a.active {
    
    padding: .7px 70px;
    background-color: #4CAF50;
    color: white;
    }
   
     #more {display: none;}
      p.main {
            text-align: justify;
            font-size:16px;
            padding-bottom: 10px;
            }

            
    </style>
	
		
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div class="topnav" id="header">
                <img src="images/ju.png" alt="Trulli" width="110" height="110" />
				      	<img src="images/logos.png" alt="Trulli" width="300" height="110" />
                    <div class="sub">

                    
                        <div class="user-info-dropdown">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="" role="button" data-toggle="dropdown">
                                    <span class="user-icon">
                                        <img  src="<?php echo $res['photo']; ?>" alt="">
                                    </span>
                                    <span style="color: #fff;" class="user-name"><?php echo $result['name']; ?></span>

                                </a>  
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                    <a class="dropdown-item" href="log-out.php"><i class="dw dw-logout"></i> Log Out</a>
                                </div>
                            </div>
                        </div>
                        
                        

                    </div>
                    <br>
                    <br>
                    <br>
                    <a  style="margin-left:30px;padding-left: 30px; padding-right: 30px; font-size: 18px; color:#ffffff;text-decoration: none;" href="home.php">Home</a>
				            <a style=" margin-left:10px; padding-left: 30px; padding-right: 30px; font-size: 18px;color:#ffffff;text-decoration: none;"href=".php">Profile</a>
                    <a style=" margin-left:10px; padding-left: 30px; padding-right: 30px;font-size: 18px;color:#ffffff;text-decoration: none;"href="about.php">About </a>
                  
                    <br>
                <br>
                    
                </div>

                
			</header>
			
			
			
            <div style=" margin-top:20px; height:auto; width: 1200px;">

                <div class="container">
                    <div class="main-body">
                    
                      
                    
                          <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                              <div  class="card">
                                <div class="card-body">











                                <h4>Recommended Teacher:</h4>
                                        <div class="gfg">
                                            
                                            <table id="customers" style="width:100%; padding-bottom: 20px;">



                                    <?php  
                                      $id= $_SESSION['vsc1'];
                                      $lens=sizeof($id);
                                                                           
                                            
                                            
                                   
                                    for($i=0;$i<$lens;$i++){
                                        $q1="select * from teacher where id='$id[$i]'";
                                        $da1=mysqli_query($connect, $q1);
                                        $rtr1 = mysqli_fetch_assoc($da1); 

                                      
                                        
                                        if($rtr1['location']==$result['location'] && $rtr1['subject']==$result['subject']){

                                   ?>
                                              
                                            <tr>
                                                
                                                <td>
                                                <a href="jak58.html"> <img src="<?php echo $rtr1['photo']; ?>" width="<?php if($rtr1['location']!=0){echo"200px";} ?>" height="<?php if($rtr1['location']!=0){echo"150";} ?>" style="border: none;" /></a> 
                                                </td>
                                                <td style="text-align:left">
                                                <?php echo "Name:",$rtr1['name'],"<br>"; ?>
                                                <?php echo "Location:",$rtr1['location'],"<br>"; ?>
                                                <?php echo "Subject:",$rtr1['subject'],"<br>"; ?>
                                                <?php echo "Expectation:",$rtr1['expectation'],"<br>"; ?>
                                                <?php echo "Availability:",$rtr1['availability'],"<br>"; ?>
                                                  
                                                  </td>
                                                
                                              </tr>
                                              <?php }else{?>
                                                <?php }?>
                                              <?php }?>

                                              <?php  
                                      $id= $_SESSION['vsc1'];
                                      $lens=sizeof($id);
                                                                           
                                            
                                            
                                   
                                    for($i=0;$i<$lens;$i++){
                                        $q1="select * from teacher where id='$id[$i]'";
                                        $da1=mysqli_query($connect, $q1);
                                        $rtr1 = mysqli_fetch_assoc($da1); 
                                        
                                        if($rtr1['location']!=$result['location'] && $rtr1['subject']==$result['subject']){

                                   ?>
                                              
                                              <tr>
                                                
                                                <td>
                                                <a href="jak58.html"> <img src="<?php echo $rtr1['photo']; ?>" width="<?php if($rtr1['location']!=0){echo"200px";} ?>" height="<?php if($rtr1['location']!=0){echo"150";} ?>" style="border: none;" /></a> 
                                                </td>
                                                <td style="text-align:left">
                                                <?php echo "Name:",$rtr1['name'],"<br>"; ?>
                                                <?php echo "Location:",$rtr1['location'],"<br>"; ?>
                                                <?php echo "Subject:",$rtr1['subject'],"<br>"; ?>
                                                <?php echo "Expectation:",$rtr1['expectation'],"<br>"; ?>
                                                <?php echo "Availability:",$rtr1['availability'],"<br>"; ?>
                                                  
                                                  </td>
                                                
                                              </tr>
                                              <?php }else{?>
                                                <?php }?>
                                              <?php }?>


                                              <?php  
                                      $id= $_SESSION['vsc1'];
                                      $lens=sizeof($id);
                                                                           
                                            
                                            
                                   
                                    for($i=0;$i<$lens;$i++){
                                        $q1="select * from teacher where id='$id[$i]'";
                                        $da1=mysqli_query($connect, $q1);
                                        $rtr1 = mysqli_fetch_assoc($da1); 
                                        
                                        if($rtr1['subject']!=$result['subject']){

                                   ?>
                                              
                                              <tr>
                                                
                                                <td>
                                                <a href="jak58.html"> <img src="<?php echo $rtr1['photo']; ?>" width="<?php if($rtr1['location']!=0){echo"200px";} ?>" height="<?php if($rtr1['location']!=0){echo"150";} ?>" style="border: none;" /></a> 
                                                </td>
                                                <td style="text-align:left">
                                                <?php echo "Name:",$rtr1['name'],"<br>"; ?>
                                                <?php echo "Location:",$rtr1['location'],"<br>"; ?>
                                                <?php echo "Subject:",$rtr1['subject'],"<br>"; ?>
                                                <?php echo "Expectation:",$rtr1['expectation'],"<br>"; ?>
                                                <?php echo "Availability:",$rtr1['availability'],"<br>"; ?>
                                                  
                                                  </td>
                                                
                                              </tr>
                                              <?php }else{?>
                                                <?php }?>
                                              <?php }?>


                                            
  
                                              </table>
                                            

                                           

                                    
                                    </div>
                               <!--   <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?php //echo $res['photo']; ?>" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                      <h4><?php //echo $result['name']; ?></h4>
                                      <p class="text-secondary mb-1"><?php //echo $result['designation']; ?></p>
                                      <p class="text-muted font-size-sm"><?php //echo $result['location']; ?>,Bangladesh</p>
                                      
                                    </div>
                                  </div>
          --> 
                                </div>
                              </div>
                              <br>
                              <br>
                              <br>
                              
                            </div>
                            <div class="col-md-8">
                              <div class="card mb-3">
                                <div class="card-body">


                                <div class="card">
                                <div class="card-body">
                                  <div class="d-flex flex-column align-items-center text-center">
                                    <img style="border: 5px solid #555;"  src="<?php echo $res['photo']; ?>" alt="Admin"  width="150">
                                    <div class="mt-3">
                                      <h4><?php echo $result['name']; ?></h4>
                                      <p class="text-secondary mb-1"><?php echo $result['designation']; ?></p>
                                      <p class="text-muted font-size-sm"><?php echo $result['location']; ?>,Bangladesh</p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>



                                  <div class="row">
                                    <div class="col-sm-3">
                                     
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo ": ";?>
                                  
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 style=" font-weight: bold;" class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo ": ";?>
                                    <?php echo $result['email']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 style=" font-weight: bold;" class="mb-0">Location</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo ": ";?>
                                    <?php echo $result['location']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 style=" font-weight: bold;"  class="mb-0">Subject</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo ": ";?>
                                    <?php echo $result['subject']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 style=" font-weight: bold;" class="mb-0">Budget</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo ": ";?>
                                    <?php echo $result['budget']; ?>
                                    </div>
                                  </div>

                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 style=" font-weight: bold;" class="mb-0">Availability</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo ": ";?>
                                    <?php echo $result['availability']; ?>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <div style="height:400px; width: 1435px;" class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                  <div class="card h-100">
                                    <div class="card-body">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



                              <div class="card mt-3">
                              <form action="" method="post" enctype="multipart/form-data">
  
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <button class="btc" type="submit" value="Upload Image" name="submit">Upload Image</button>
 
  
                              </form>
                           
                              <br>
                              </div>

                                       
                                  </div>
                                </div>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>



            </div>
                             </div>
                                </div>
                              
                             
                              
                                <footer>
                                    <div style="background-color:#45532e;
                                    padding-top: 10px;
                                    height: 45px;
								                    width: 1200px;
                                    text-align:center;
                                    margin-left:75px;
                                    ">
                                            <p style="color:#fff;"> © 2019 Department of Computer Science and Engineering, Jashore University of Science and Technology</p>
                                    </div>
                                </footer>
                               

                           
	</body>
</html>