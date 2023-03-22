<?php
  session_start();
  include('check_login.php');
      check_login();
  // session_start();
  // if($_SESSION['stat']=="Active")
  // {
  //   // echo "Welcome ".$_SESSION["username"];
  // }
  // else
  // {
  //   header("location:index.php");
  // }
include('dbconnections.php');


if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="select * from packages where pi=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);

    $name=$crow['name'];
   
    $details=$crow['details'];
   
    $_SESSION['did']=$idd;
    $_SESSION['act']="Edit";

    // echo "<script> alert('hello');</script>";

  }
  else
  {
    $_SESSION['act']="Save";
    $name="";
    // $charge="";
    
    // $duration="";
    $details="";
  }

if(isset($_POST['submit']))
  {
    // echo "hello";
    $name=$_POST['name'];
   
    $details=$_POST['details'];
     
    if ($_SESSION['act']=="Edit")
    {   
        $idd=$_SESSION['did'];
     
        $sql="UPDATE `packages` SET `name` = '$name',  `details` = '$details' WHERE `packages`.`pi` ='$idd'";
    }
    else
    {
        $sql="INSERT INTO `packages` (`name`,`details`) VALUES ('$name','$details')";
    }
    
        $result=$con->query($sql);
        header("Location:admin_packagemain.php");
  }
 


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
        <p align="Center">ADD PACKAGES</p>
        <form method="post" role="form"  data-aos="fade-up" data-aos-delay="100">

          <table align="center">
                            <tr>
                                <td>Package Name</td>
                                <td><input type="text" required name="name" value="<?php echo $name ?>"></td>
                            </tr>
                            <!-- <tr>
                                <td>Charge</td>
                                <td><input type="text" required name="charge" value="<?php echo $charge ?>" ></td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td><input type="text" required name="duration" value="<?php echo $duration ?>" ></td>
                            </tr> -->
                            <tr>
                                <td>Details</td>
                                <td><input type="text" required name="details" value="<?php echo $details ?>" ></td>
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