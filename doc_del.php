<?php 
include ("conn.php");
$id=$_GET['id'];
$sql="delete from doctors where id='$id'";
mysqli_query($con,$sql);
header("location:admin_home.php?DELETED");

?>