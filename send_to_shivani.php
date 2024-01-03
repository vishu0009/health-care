<?php
session_start();
$doc_em=$_SESSION['doc'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body><h1>Hello</h1>
<?php
$id=$_GET['id'];
include "conn.php";
$sql="select * from `patient_req` where id='$id'";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){
    $n=$row['name'];
    $pro=$row['problem'];
    $em=$row['email'];
    $mob=$row['mob'];
    $age=$row['age'];
    $adr=$row['adr'];

$sql1="insert into `shivani`( `name`, `problem`, `email`, `mob`, `age`, `adr`, doc_email) values ('$n','$pro','$em','$mob','$age','$adr','$doc_em')";
mysqli_query($con,$sql1);

$sql2="delete from `patient_req` where id='$id'";
mysqli_query($con,$sql2);
header("location:app_req.php");

}
?>

</body>
</html>