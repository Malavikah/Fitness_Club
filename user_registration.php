<?php
session_start();
include('check_login.php');
    check_login();
    include('dbconnections.php');


    if(isset($_POST['submit']))
    {
        // echo "hello";
        $uname=$_POST['email'];
        $pass=$_POST['password'];
        $conf=$_POST['conf'];
        // if($pass==$conf)
        // {
        // INSERT INTO `login` (`Lid`, `uname`, `password`, `utype`) VALUES (NULL, '', '', '')

        $sql="INSERT INTO `login` (`uname`, `password`, `utype`) VALUES ('$uname', '$pass', 'user')";
        $result=$con->query($sql);
        // echo "$sql";
        // echo "$result->error";

        $sql="select max(Lid) as mxid from login";
        $result=$con->query($sql);
        $utype=mysqli_fetch_assoc($result);
        $lid=$utype['mxid'];
        $name=$_POST['uname'];
        $addr=$_POST['addr'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $package=$_POST['pack'];




        $sql="INSERT INTO `user` ( `name`, `email`, `phone`, `address`, `dob`, `height`, `weight`, `pi`, `Lid`) VALUES ( '$name', '$email', '$phone', '$addr', '$dob', '$height', '$weight', '$package', '$lid')";

        $result=$con->query($sql);

        ?>

            <script type="text/javascript">
                alert("Registration Completed Successfully");
                Location.href="index.php";
            </script>

        <?php

        // header("Location:index.php");


        
        // }
        // else
        // {
        //     echo "<script>alert('password and confirm password not matching');</script>";
        // }

    }
    $sql="select * from packages";
    $result=$con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FITNESS CLUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets\img\icon.jpg" rel="icon">
  <link href="assets\img\icon.jpg" rel="assets\img\icon.jpg">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script type="text/javascript">
         var check = function() {
           if (document.getElementById('password').value ==
             document.getElementById('conf').value) {
             
           } else {
                document.getElementById('conf').value="";
                alert('Password and Confirm Password Not matching');
           }
        }
      </script>

  <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div> -->

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <!-- <li>En</li> -->
          <!-- <li><a href="#">De</a></li> -->
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Fitness</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
         <?php include 'publicmenu.php' ?>
        <!-- <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="public_viewpack.php">packages</a></li>

          <li><a class="nav-link scrollto" href="#specials">contact</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="user_registration.php">Register</a></li> -->
          
            <!-- ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a  --><!-- class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!-- <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a> -->

    </div>
  </header><!-- End Header -->

  
  <main id="main">

   
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>  </h2>
          <p> </p>
          <p> </p>
          <p> </p>
        </div>
        
        <br>
        <br>
        <p align="Center">REGISTRATION </p>
        <form method="post"  data-aos="fade-up" data-aos-delay="100">

          <table align="center">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="uname" required class="form-control" id="name" placeholder="Your Name" ></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="Email" name="email" required class="form-control" id="name" placeholder="Your Email" ></td>
                            </tr>

                            <tr>
                                <td>Phone</td>
                                <td><input type="tele" pattern="[0-9]{10}" name="phone" required class="form-control" id="name" placeholder="Phone number" ></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" name="addr" required class="form-control" id="name" placeholder="Your Address" ></td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td><input type="Date" name="dob" style="width: 100%" required class="form-control" id="name" placeholder="Your DOB"></td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td><input type="text" name="height" required class="form-control" id="name" placeholder="Height"></td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td><input type="text" name="weight" required class="form-control" id="name" placeholder="Weight"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="password" required class="form-control" id="name" placeholder="Enter your password"></td>
                            </tr>
                            <tr>
                                <td>Confirm</td>
                                <td><input type="password" name="conf" id="conf" required class="form-control" id="name" placeholder="confirm password"></td>
                            </tr>
                            <tr>
                                <td>Package</td>
                                <td><select name="pack" style="width: 100%">
                                    <?php 
                                        // $sl=0;
                                    while($row=mysqli_fetch_assoc($result))
                                            {
                                    ?>
                                        <option value="<?php echo $row['pi'] ?>"><?php echo $row['name'] ?></option>

                                    <?php
                                        }
                                    ?>
                                </select></td>
                            </tr>
                            <tr>
                                <TD></TD>
                                <td><input class="button" type="submit" name="submit" value="REGISTER" onclick="check();"></td>
                                <!-- <td><input type="submit" value="REGISTER" name="submit" onclick="check();"></button></td> -->
                            </tr>
                        </table>
                    
          
        </form>

     <!--  </div> -->
    </section>
    
      
    </table><!-- End Book A Table Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>