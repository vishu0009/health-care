<?php
ob_start();
$em=$_POST['email'];
$pass=$_POST['pass'];
include "conn.php";
$sql="select * from patient where email='$em' and pass='$pass'";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){
    $db_em=$row['email'];
    $db_pass=$row['pass'];
    session_start();
    $_SESSION['pat']=$row['email'];

  
    if($db_em==$em && $db_pass==$pass){
        header ("location:patient_home.php?Welecome");
        ob_end_flush();
    }
    else{
        echo ("Email or Password incorrect");
    }
}
