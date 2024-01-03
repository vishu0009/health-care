<?php
$id=$_GET['id'];
include "conn.php";
$sql="delete from `patient_req` where id='$id'";
mysqli_query($con,$sql);
header("location:app_req.php");

?>