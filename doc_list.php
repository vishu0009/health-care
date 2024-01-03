<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']==null){
  header("location:admin_login.php?Plaease login first");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor List</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="admin_home.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="doc_list.php"><i class="fa fa-table "></i>Doctor's List</a>
                    </li>
                    <li>
                        <a href="add_doctor.php"><i class="fa fa-edit "></i>Add Doctor</a>
                    </li>


                    
                    <li>
                        <a href="app_req.php"><i class="fa fa-qrcode "></i>Appoinment Requests</a>
                    </li>
                    <li>
                        <a href="admin_logout.php"><i class="fa fa-bar-chart-o"></i>Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Doctor's List</h2>
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>NAME</th>
                                        <th>SPECIALIST</th>
                                        <th>EMAIL</th>
                                        <th>PASSWORD</th>
                                        <th>GENDER</th>
                                        <th>MOBILE NO.</th>
                                        <th>AGE</th>
                                        <th>ADDRESS</th>
                                        <th>ACTION 1</th>
                                        <th>ACTION 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
include "conn.php";
//  $ad=$_SESSION['admin'];
//  session_start();


// for table ----

$sql="select * from doctors";
$qry=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($qry)){


?>
                                    <tr class="success">
                                        <td><?php echo $row['name'];  ?></td>
                                        <td><?php echo $row['spc'];  ?></td>
                                        <td><?php echo $row['email'];  ?></td>
                                        <td><?php echo $row['pass'];  ?></td>
                                        <td><?php echo $row['gen'];  ?></td>
                                        <td><?php echo $row['mob'];  ?></td>
                                        <td><?php echo $row['age'];  ?></td>
                                        <td><?php echo $row['adr'];  ?></td>
                                        <td><a style="color:orange; text-decoration:none;" href="doc_del.php?id=<?php echo $row['id'];?>">DELETE</a></td>
                                        <td><a style="color:green; text-decoration:none;" href="doc_edit.php?id=<?php echo $row['id'];?>">UPDATE</a></td>
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
             
         
            </div>
            <!-- /. PAGE INNER  -->
            
        
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
