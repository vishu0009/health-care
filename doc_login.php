<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc_ Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <style>
          *{
            margin: 0;
            padding:0;
          }
        body {
            margin: 0px;
            padding: 0px;
            background: url(https://i.pinimg.com/564x/47/c5/d6/47c5d6895fa84aefc462277d38654832.jpg);
            background-repeat: no-repeat;
            background-size: 1280px 680px;
            color: white;
            font-family: 'Baloo Bhaina 2', cursive;
            background-color: rgba(0, 0, 0, 0.329);
            overflow: hidden;


        }

        .navbar {
            display: inline-block;
            /* border: 3px solid white; */
            margin-left: 17%;
            margin-top: 25px;
            border-radius: 5px;
           


        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            font-size: 23px;
            padding: 33px 50px;
            text-decoration: none;
        }

        .navbar li a:hover {

            color: rgb(97, 7, 7);
            font-size: 23px;
            padding: 0px 50px;
            text-decoration: none;
            border-bottom: 2px solid rgb(57, 203, 12);
        }

        .container {
            background: rgba(255,255,255,0.6);
            box-shadow: 0 26px 42px rgba(0, 0, 0, 0.9);
            margin-top: 66px;
            padding: 26px 28px;
            /* border: 3px solid orange; */
            border-radius: 37px;
            width: 28%;
            margin-left: 5%;
            display: inline-block;

        }




        .container input {
            padding: 7px 20px;
            margin: 5px;
            border-radius: 20px;
            width: 54%;
            border-radius: 2px black;
            font-size: 20px;
            

        }

        .btn {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 15px 60px;
            border-radius: 20px;
            margin-left: 22%;
            background-color: rgb(60, 255, 0);
            border: none;
          
        }

        .box {
            /* border: 2px solid white; */
            width: 850px;
            height: 350px;
            /* background-color: white; */
            margin-right: 100px;
            margin-top: 50px;
            padding: 22px 22px;
            display: inline-block;
            float: right;
            font-size: 20px;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .btn2{
            margin: 5px;
            border: none;
            color: white;
            font-size: 20px;
            padding: 15px 60px;
            border-radius: 20px;
            background-color: rgb(60, 255, 0);
            margin-top: 10px;
            margin-left: 240px;
            position: relative;
  text-transform: uppercase;
        }
        .btn2 a{
            text-decoration: none;
            color:white
        }
  .btn2:hover {
    animation: glow 3s ease-in infinite;
  }
  
  .btn2::before {
    animation: alternate 1s ease-in infinite;
    background: rgb(60, 255, 0);
    border-radius: inherit;
    content: '';
    filter: blur(10px);
    opacity: .75;
    position: absolute;
    transition: all .3s ease-in-out;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    z-index: -1;
  }
  
  .btn2:hover::before {
    filter: blur(20px);
    opacity: 1;
  }


@keyframes glow {
  0% {
    background: rgb(111, 240, 72);
  }
  25% {
    background: rgb(67, 203, 26);
  }
  100% {
    background: rgb(60, 255, 0);
  }
}
View Compiled
        .neon {
  color: #fff;
  text-shadow:
    0 0 5px #fff,
    0 0 10px #fff,
    0 0 20px #fff,
    0 0 40px #0ff,
    0 0 80px #0ff,
    0 0 90px #0ff,
    0 0 100px #0ff,
    0 0 150px #0ff;
}

     
    </style>
</head>

<body>
</body>
<header style=" background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0, 0, 0, 0.26);">
    <div class="navbar">
        <ul>
            <li><a href="index.html"> Home</a> </li>
            <li> <a href="patient_reg.php">Registration</a></li>
            <li><a href="doc_login.php">Doctor Login</a></li>
            <li><a href="admin_login.php">Admin Login</a></li>
        </ul>
    </div>

</header>
<div style=" background-color: rgba(0, 0, 0, 0.137); height:700px">

    <form method="post" action="doc_login_back.php">
       
        <div class="container">
        <div style="color:black;">Doctor's Login</div>
            <input type="text" name="email" required placeholder="Enter Your Email"><br>
            <input type="password" name="pass" required placeholder="Enter Password"><br>
            <input type="submit" name="save" class="btn" value="Login" style="display:inline-block;width:100px;text-align:center;padding:15px 20px; margin-left:50px;">
            <input type="reset" class="btn" value="Clear" style="background-color: orange ; display:inline-block;width:100px;text-align:center;padding:15px 30px; ">
        </div>
    </form>  <div class="box">
       
        <center>
            <h2 class="neon" style="color: rgb(247, 51, 51); margin-left: -150px">Welcom To HEALTH CARE </h2>
        </center>
      <button class="btn2"><a href="patient_reg.php">  Register Now</a></button>
    </div>
</div>
<div style="background-color: white;">
    <img style="margin-left: 3%;" src="Images/Placement.png" alt="">
</div>
<div>
    <img src="Images/Placement - Copy.png" alt="">
</div>

</html>