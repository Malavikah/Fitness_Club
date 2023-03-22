<?php
    include('dbconnections.php');
    session_start();
    include('check_login.php');
        check_login();

    if(isset($_GET['id']))
      {
        $idd=$_GET['id'];
        $sql="select * from trainers where tid=$idd";
        $cres=$con->query($sql);

        $crow=mysqli_fetch_assoc($cres);

        $name=$crow['tname'];
        $email=$crow['email'];
        $phone=$crow['phone'];
        $dob=$crow['dob'];
        $gender=$crow['gender'];
        $exp=$crow['exp'];




        // echo "<script> alert('hello');</script>";

      }
      else
      {
        $_SESSION['act']="Save";
        $name="";
        $email="";
        $phone="";
        $dob="";
        // $image=$crow['Image'];
        $exp="";
      }



    if(isset($_POST['submit']))
    {
        // echo "hello";
        // $uname=$_POST['email'];
        // $pass=$_POST['password'];
        // $conf=$_POST['conf'];
        // if($pass==$conf)
        // {
        // INSERT INTO `login` (`Lid`, `uname`, `password`, `utype`) VALUES (NULL, '', '', '')

        // $sql="INSERT INTO `login` (`uname`, `password`, `utype`) VALUES ('$uname', '$pass', 'user')";
        // $result=$con->query($sql);
        // echo "$sql";
        // // echo "$result->error";

        // $sql="select max(Lid) as mxid from login";
        // $result=$con->query($sql);
        // $utype=mysqli_fetch_assoc($result);
        // $lid=$utype['mxid'];


        $name=$_POST['tname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $exp=$_POST['exp'];

        

        $sql="UPDATE `trainers` SET `tname` = '$name', `email` = '$email', `phone` = '$phone', `dob` = '$dob', `gender` = '$gender', `exp` = '$exp' WHERE tid =$idd ";

        $result=$con->query($sql);

       header("Location:admin_trainersall.php");


        
        // }
        // else
        // {
        //     echo "<script>alert('password and confirm password not matching');</script>";
        // }

    }
    $sql="select * from trainers";
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
  <link href="assets\img\icon.jpg" rel="apple-touch-icon">

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
        <?php include 'adminmenu.php' ?>
        <!-- <ul>
          <li><a class="nav-link scrollto active" href="admin_packagemain.php">Packages</a></li>
          <li><a class="nav-link scrollto" href="admin_trainingplanall.php">Training plan</a></li>
          <li><a class="nav-link scrollto" href="#">Service</a></li>
          <li><a class="nav-link scrollto" href="admin_viewusers.php">Users</a></li>

          <li><a class="nav-link scrollto" href="admin_productall.php">Products</a></li>
          <li><a class="nav-link scrollto" href="gallery">chat</a></li>
          <li><a class="nav-link scrollto" href="gallery">Feedback</a></li>
          <li><a class="nav-link scrollto" href="admin_paymentview.php">Payments</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Reports</a></li>
          <li><a class="nav-link scrollto" href="admin_trainersall.php">Trainers</a></li>
          <li><a class="nav-link scrollto" href="home.php">Logout</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
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
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i> -->
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
        <p align="Center">UPDATE TRAINERS</p>
        <form method="post" role="form"  data-aos="fade-up" data-aos-delay="100">

          
                        <table align="center">
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="uname" value="<?php echo $name; ?>" required ></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="Email" name="email" value="<?php echo $email; ?>" required></td>
                            </tr>

                            <tr>
                                <td>Phone</td>
                                <td><input type="text" name="phone" value="<?php echo $phone; ?>" required></td>
                            </tr>
                            
                            <tr>
                                <td>Date Of Birth</td>
                                <td><input type="Date" name="dob" value="<?php echo $dob; ?>" style="width: 100%" required> </td>
                            </tr>
                            <tr>
                              <td>Gender</td>
                              <td>
                                <select name="gender">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                                <td>Experiance</td>
                                <td><input type="text" required name="exp" value="<?php echo $exp; ?>" required></td>
                            </tr>
                            
                            <tr>
                              <td></td>
              <td><br><input class="button" type="submit" name="submit" value="ADD"></td>
            </tr>
                        </table>
                    
          <div class="row">
            
          <div class="mb-3">
            <!-- <div class="loading">Loading</div> -->
            <div class="error-message"></div>
            
          <!-- <div class="text-center"><button type="submit">ADD</button></div> -->
        </form>

     <!--  </div> -->
    </section>
    
      
    </table><!-- End Book A Table Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->

          <!-- </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    <!-- </div>
  </footer>End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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