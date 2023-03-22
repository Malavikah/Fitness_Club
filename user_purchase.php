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
    $sql="select * from product where prid=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);
    $image=$crow['image'];
    $name=$crow['name'];
    $aqty=$crow['qty'];
    $price=$crow['price'];
   
    // echo "<script> alert('hello');</script>";

  }
  else
  {
    // $_SESSION['act']="Save";
    // $name="";
    // $charge="";
    
    // $duration="";
    // $details="";
  }

if(isset($_POST['submit']))
  {
    // echo "hello";
    $filename= basename($_FILES["file1"]["name"]);
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $fnn=date("YmdHis").".".$ext;
    $target_dir = "uploads/";
    $target_file = $target_dir.$fnn;
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
        }
    else
        {
          // echo "<script>alert('error')</script>";
        }

    $uid=$_SESSION['UID'];
    $pid=$_POST['pid'];
    $date=date("Y/m/d");
    $qty=$_POST['pqty'];
    $price=$_POST['price'];
    
     
    
        $sql="INSERT INTO `prod_purchase` ( `uid`, `prid`, `date`, `screen`, `qty`,`price`) VALUES ( '$uid', '$pid', '$date', '$target_file', '$qty','$price')";
  
    
        $result=$con->query($sql);

        $sql="update product set qty=qty-$qty where prid=$idd";
        $result=$con->query($sql);
      ?>

      <script>window.alert('Payment successful')

    window.location='user_viewproducts.php'</script>
      <?php
      //  header("Location:user_viewproducts.php");
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
  <script type="text/javascript">
    
    function validqty()
    {
       aqty=document.getElementById("aqty").value;
       eqty=document.getElementById("pqty").value;
       if (parseInt(eqty)>parseInt(aqty))
       {
        document.getElementById("pqty").value="";
        alert("Please Enter Valid quantity");
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
        <p align="Center"></p>
        <br>
     
        <p align="Center">PRODUCT PURCHASE</p>
        <form method="post" role="form" enctype="multipart/form-data"  data-aos="fade-up" data-aos-delay="100">
          <input type="hidden" name="pid" value="<?php echo $idd ?>">
          <table align="center">

                            <tr>
                                <td></td>
                                <td><img width="100" height="100" src="<?php echo $image ?>"></td>
                            </tr>
                            <tr>
                                <td>Product</td>
                                <td><input readonly type="text" required name="product" value="<?php echo $name ?>" ></td>
                            </tr>
                            <tr>
                                <td>Available</td>
                                <td><input type="text" readonly required name="aqty" id="aqty" value="<?php echo $aqty ?>" ></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" readonly required name="price" value="<?php echo $price ?>" ></td>
                            </tr>

                            <tr>
                                <td>Qty</td>
                                <td><input type="text" required name="pqty" id="pqty" ></td>
                            </tr>
                            <tr>
                                <td>Payment Screen</td>
                                <td><input type="file" required name="file1" ></td>
                            </tr>



                            <tr>
                              <td></td>
              <td><br><input class="button" type="submit" name="submit" value="SUBMIT" onclick="validqty();"></td>
            </tr>
            <tr>
              <td></td>
              <td><br>
                <img width="200" height="200" src="assets\img\qr_code.jpg">

              </td>
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

          </div>

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
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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