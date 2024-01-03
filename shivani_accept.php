<?php
include "conn.php";
$sql="delete from shivani";
mysqli_query($con,$sql);
header("location: doc_home.php");

?>