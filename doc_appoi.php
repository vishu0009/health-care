<?php
session_start();
$doc=$_SESSION['doc'];
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title> Doctor Home Page </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css1/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css1/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css1/responsive.css" rel="stylesheet" />

  <style>
    table{
        margin-left:280px;
        background-color: lightgreen;
    }
    td,th{
        border: 3px solid white;
        border-radius:7px;
        padding: 10px;
    }
  </style>

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images1/hero-bg.png" alt="">
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Health Care
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="doc_appoi.php">Appoinments<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doc_logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <table>
      <tr>
                                        
                                        <th>NAME</th>
                                        <th>PROBLEM</th>
                                        <th>EMAIL</th>
                                        <th>MOBILE NO.</th>
                                        <th>AGE</th>
                                        <th>ADDRESS</th>
                                        <th>ACTION 1</th>
                                    </tr>
<?php
include "conn.php";
$sql1="select * from `shivani`";
$qry1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_assoc($qry1)){
  if($row['doc_email']==$doc){
    $n=$row['name'];
    $pro=$row['problem'];
    $em=$row['email'];
    $mob=$row['mob'];
    $age=$row['age'];
    $adr=$row['adr'];




?>

                                    <tr>
                                        <td><?php echo $n;  ?></td>
                                        <td><?php echo $pro;  ?></td>
                                        <td><?php echo $em;  ?></td>
                                        <td><?php echo $mob;  ?></td>
                                        <td><?php echo $age;  ?></td>
                                        <td><?php echo $adr;  ?></td>
                                        <td><a href="shivani_accept.php">Accept</a></td>
                                    </tr><?php }} ?>
      </table>
    </section>
    <!-- end slider section -->
  </div>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Adil Nagar, Lucknow
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9026494238
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  rraavvii9026@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="https://www.facebook.com/">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/rajput-ravi/">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/?next=%2F">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
            Physicians and surgeons diagnose and treat injuries or illnesses and address health maintenance. Physicians examine patients; take medical histories; prescribe medications; and order, perform, and interpret diagnostic tests.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="#">
                Home
              </a>
              <a class="" href="#">
                About
              </a>
              <a class="" href="#">
                Departments
              </a>
              <a class="" href="#">
                Doctors
              </a>
              <a class="" href="#">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://www.linkedin.com/in/rajput-ravi/">Ravi Rajpoot<br><br></a>
        </p>
       
      </div>  
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>