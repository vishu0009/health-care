<?php
include "conn.php";
//  $ad=$_SESSION['admin'];
//  session_start();


// for table ----
$id=$_GET['id'];
$sql1="select * from doctors where id='$id'";
$qry=mysqli_query($con,$sql1);
if($row=mysqli_fetch_assoc($qry)){

}
?>
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

   <title>Responsive Regisration Form </title>
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
                            <input type="text" name="name" value="<?php echo $row['name'];  ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Specialist</label>
                            <input type="text" name="spc" value="<?php echo $row['spc']; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $row['email'];  ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="pass" value="<?php echo $row['pass'];  ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gen" required>
                                <option value="Male"<?php if($row['gen']=='Male'){echo 'selected';} ?> >Male</option>
                                <option value="Female<?php if($row['gen']=='Female'){echo 'selected';} ?>" >Female</option>
                                <option value="Others<?php if($row['gen']=='Others'){echo 'selected';} ?>">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mob" value="<?php echo $row['mob'];  ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="text" name="age" value="<?php echo $row['age'];  ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="adr" value="<?php echo $row['adr'];  ?>" required>
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
$sql="update doctors set name='$n',spc='$spc',email='$em',pass='$pass',gen='$gen',mob='$mob',age='$age',adr='$adr' where id='$id'";
mysqli_query($con,$sql);
header("location:admin_home.php?added");
}
?>
