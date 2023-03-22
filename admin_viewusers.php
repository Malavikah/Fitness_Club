<?php
session_start();
include('check_login.php');
check_login();

  if(isset($_GET['act']))
  {
    $act=$_GET['act'];
  }
  else
  {
    $act=0;
  }
    if(isset($_GET['dact']))
  {
    $act=0;
  }
  if(isset($_POST['search']))
    {
      $name=$_POST['name'];
      $sql="select a.*,b.name as pname from user as a,packages as b where a.pi=b.pi and  a.name like '$name%'";
      echo "$name";
    }
    else
    {
      $sql="select a.*,b.name as pname from user as a,packages as b where a.pi=b.pi";
        // echo "name";
    }
  
  include('dbconnections.php');
  
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /*table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }*/

    /*td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }*/
      th, td {
      border-bottom: 1px solid #ddd;
      padding: 8px;
    }

 /*   .button {
  margin: 0 0 0 15px;
  border: 2px solid #cda45e;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
}*/

/*.button{
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}*/

    /*tr:nth-child(even) {
      background-color: #dddddd;
    }*/
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
        <!-- <ul>
          <li><a class="nav-link scrollto active" href="admin_packagemain.php">Packages</a></li>
          <li><a class="nav-link scrollto" href="admin_trainingplanall.php">Training plan</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Service</a></li>
          <li><a class="nav-link scrollto" href="admin_viewusers.php">Users</a></li>

          <li><a class="nav-link scrollto" href="admin_productall.php">Products</a></li>
          <li><a class="nav-link scrollto" href="#gallery">chat</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Feedback</a></li>
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
        </div><br>
        <p align="Center">USERS</p>
        <p align="Center"></p>
        <form  method="post"   data-aos="fade-up" data-aos-delay="100">

                     <table align="center">
                       <tr>
                        <td>Search</td>
                        <td><input type="text" name="name"></td>
                        <td><input class="button" type="submit" name="search" value="Search"></td>
                      </tr>
                     </table>

          <table width="75%" align="Center">

                            <tr>
                              <td>Sl</td>
                              <td>Name</td>
                              <td>Email</td>
                              <td>Phone</td>
                              <td>Address</td>
                              <td>DOB</td>
                              <td>Height</td>
                              <td>Weight</td>
                              <td>Package</td>
                              <td>Action</td>
                             
                            </tr>

                               <?php 
                               $sl=0;
                              while($row=mysqli_fetch_assoc($result))
                              {
                                $sl=$sl+1;
                            ?>

                            <tr>
                              <td>
                                <?php echo $sl; ?>
                              </td>

                              <td>
                                <?php echo $row['name'] ?>
                              </td>

                              <td>
                                <?php echo $row['email'] ?>
                              </td>
                              <td>
                                <?php echo $row['phone'] ?>
                              </td>
                              <td>
                                <?php echo $row['address'] ?>
                              </td>
                              <td>
                                <?php echo $row['dob'] ?>
                              </td>
                              <td>
                                <?php echo $row['height'] ?>
                              </td>
                              <td>
                                <?php echo $row['weight'] ?>
                              </td>
                              <td>
                                <?php echo $row['pname'] ?>
                              </td>
                              <!-- <?php $idd=$row['ui']; ?>
                              <td>

                                <a href="<?php echo $act!=$row['ui']?'?act='.$row['ui']:'?dact='.$row['ui'] ?>"><?php echo $act==$row['ui']?'Activate':'Deactivate'?>


                                </a><br></td> -->

                              <!-- <td><a href="admin_updateuser.php?id=<?php echo $idd; ?>">Disable</a></td> -->
                             
                              <td><a href="admin_userdel.php?id=<?php echo $idd; ?>">Delete</a></td>

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