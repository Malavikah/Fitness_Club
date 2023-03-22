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
  $sql="select * from Product";
  $result=$con->query($sql);
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <!-- <title>Restaurantly Bootstrap Template - Index</title>
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

      <!-- <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Fitness</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <?php include 'usermenu.php' ?>
       <!--  <ul>
          <li><a class="nav-link scrollto active" href="user_viewpackages.php">Packages</a></li>
          <li><a class="nav-link scrollto" href="user_viewtrainingplan.php">Training plans</a></li>
          <li><a class="nav-link scrollto" href="gallery">Feedback</a></li>

          <li><a class="nav-link scrollto" href="user_viewproducts.php">Products</a></li>
          <li><a class="nav-link scrollto" href="gallery">Payment</a></li>
          <li><a class="nav-link scrollto" href="gallery">Chat</a></li>
          <li><a class="nav-link scrollto" href="user_viewtrainers.php">Trainers</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Order</a></li>
          <li><a class="nav-link scrollto" href="home.php">Logout</a></li>
          
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!-- <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>  </h2>
          <p>  </p>
        </div>
        <br>
         <br>
          <br>  <p align="Center">ADD PRODUCT</p>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">


          <?php 
            $sl=0;
          while($row=mysqli_fetch_assoc($result))
            {
              $sl=$sl+1;
              $idd=$row['prid'];
          ?>
            <div class="col-lg-6 menu-item filter-starters">
              <img src="<?php echo $row['image'] ?>" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#"><?php echo $row['name'] ?></a><span>Rs.<?php echo $row['price'] ?></span>
              </div>
              <div class="menu-ingredients">
                Description : <?php echo $row['descr'] ?>
                <br>
                Exp-date : <?php echo $row['expdate'] ?>
                <br>
                Stock : <?php echo $row['qty'] ?>
                <br>
                <a href="user_purchase.php?id=<?php echo $idd; ?>"><h4><b>Buy</b</h4></a>
               
              </div>
            </div>

          <?php
          }
          ?>

        

        </div>

      </div>
    </section><!-- End Menu Section -->

    
    

    <!-- ======= Contact Section ======= -->
    

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