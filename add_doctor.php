<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="add_doctor.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Add Doctor</title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Specialist</label>
                            <input type="text" name="spc" placeholder="Enter your Specialization" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="pass" placeholder="Enter your password" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gen" required>
                                <option disabled selected>Select gender</option>
                                <option value="Male" >Male</option>
                                <option value="Female" >Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mob" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Enter your age" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="adr" placeholder="Enter your address" required>
                        </div>
                    </div>
                </div>

                 <input style="cursor:pointer; padding: 10px; margin-left:385px; margin-top: 30px;background-color: #4070f4; border-radius:10px;border:none;color:white;" type="submit" name="save" vlaue="Register">
                
            </div>
  
        </form>
    </div>

    <script src="add_doctor.js"></script>
</body>
</html>

<?php
if(isset($_POST['save'])){
include("conn.php");
$n=$_POST['name'];
$spc=$_POST['spc'];
$em=$_POST['email'];
$pass=$_POST['pass'];
$gen=$_POST['gen'];
$mob=$_POST['mob'];
$age=$_POST['age'];
$adr=$_POST['adr'];
$sql="insert into doctors(name,spc,email,pass,gen,mob,age,adr) value('$n','$spc','$em','$pass','$gen','$mob','$age','$adr')";
mysqli_query($con,$sql);
header("location:admin_home.php?added");
}
?>