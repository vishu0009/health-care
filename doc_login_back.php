<?php
$em=$_POST['email'];
$pass=$_POST['pass'];
ob_start();
include "conn.php";
$sql="select * from doctors where email='$em' and pass='$pass'";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){
    $db_em=$row['email'];
    $db_pass=$row['pass'];
    session_start();
    $_SESSION['doc']=$row['email'];
        if($db_em==$em && $db_pass==$pass){
            header ("location:doc_home.php?Welecome");
            ob_end_flush();
        }
        else{
            echo ("Email or Password incorrect");
        }
    }
?>