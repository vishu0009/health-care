<?php
include "conn.php";
$sql="delete from david";
mysqli_query($con,$sql);
header("location: doc_home.php");

?>