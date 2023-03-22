<?php
  session_start();
  include('check_login.php');
  check_login();
  include('dbconnections.php');

  $sql="select * from user where ui in(select ui from chat)";
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
   <style>
    
      th, td {
      border-bottom: 1px solid #ddd;
      padding: 8px;
    }

 
</style>

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
       <!--  <ul>
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
          <li><a class="nav-link scrollto" href="home.php">Logout</a></li>
            
          </li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
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
        <p align="Center"></p>
        <form method="post" role="form" enctype="multipart/form-data"  data-aos="fade-up" data-aos-delay="100">

          <!--  <a href="admin_productentry.php">New</a> -->

          <table  align="center" width="100%">

                           <!--  <tr>
                                <td>From</td>
                                <td><input type="date" name="fdate"></td>
                                <td>To Date</td>
                                <td><input type="date" name="tdate"></td>
                                <td><input class="button" type="submit" name="submit" value="Show"></td>
                                <td></td>
                                <td></td>
                            </tr> -->

                            <thead>
                                <th>Sl#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <!-- <th></th> -->
                                                               

                            </thead>

                            <?php 
                                $sl=0;
                                $tot=0;
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $idd=$row['ui'];
                                    $sl=$sl+1;
                                    

                            ?>
                                    <tr>
                                        <td><?php echo $sl; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><a href="admin_chatentry.php?id=<?php echo $idd; ?>">Messages</a></td>
                                       
                                      
                                    </tr>
                            <?php
                                }
                            ?>
                           
                            

                        </table>
            <!-- <tr>
              <td>phone</td>
              <td><input type="text" name="name" class="form-control" id="name" placeholder="enter your mobile no" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></td>
            </tr>
          </table>
          <div class="row">
            
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">REGISTER</button></div> -->
        </form>

     <!--  </div> -->
    </section>
    
      
  <!-- End Book A Table Section -->

    

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