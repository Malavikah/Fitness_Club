<?php
  session_start();
  include('check_login.php');
    check_login();

include('dbconnections.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="select food from trainigplan where pid=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);

    // $name=$crow['pname'];
    // $plan=$crow['plan'];
    $food=$crow['food'];
   
    $_SESSION['id']=$idd;
    $_SESSION['act']="Edit";

    // echo "<script> alert('hello');</script>";

  }
  else
  {
    $_SESSION['act']="Save";
    //  $name="";
    // $plan="";
    $food="";
  }



if(isset($_POST['submit']))
  {
    // echo "hello";
    // $name=$_POST['pname'];
    // $plan=$_POST['plan'];
    $food=$_POST['food'];

    // $filename= basename($_FILES["file1"]["name"]);
    // $ext = pathinfo($filename, PATHINFO_EXTENSION);
    // $fnn=date("YmdHis").".".$ext;
    // $target_dir = "uploads/";
    // $target_file = $target_dir.$fnn;
    // if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
    //     }
    // else
    //     {
    //       // echo "<script>alert('error')</script>";
    //     }

    // if ($_SESSION['act']=="Edit")
    // {
    //     $idd=$_SESSION['id'];
    //     $sql="UPDATE `trainigplan` SET `pname` = '$name', `plan` = '$plan', `food` = '$food', `file` = '$target_file'  WHERE `trainigplan`.`pid` ='$idd'";
    // }
    // else
    // {
    //    $sql="INSERT INTO `trainigplan` ( `pname`, `plan`,`food`,`file`) VALUES ( '$name', '$plan','$food','$target_file')";
    // }

    // echo $sql;
    
        $result=$con->query($sql);
        header("Location:admin_trainingplanall.php");
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

 
</head>

<body>

  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

    
      <div class="languages d-none d-md-flex align-items-center">
        <ul>
         
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
       
      </nav><!-- .navbar -->

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
        <p align="Center">FOOD CHART</p>
        <br>
        <?php 
            $sl=0;
          while($row=mysqli_fetch_assoc($result))
            {
              $sl=$sl+1;
          ?>
     

<!--                           
            <tr>
              <td><br>
                <img width="200" height="200" src="assets\img\qr_code.jpg">

              </td>
            </tr> -->
           Food: <?php echo $row['food']; ?>
                  
                        
         
           
           <?php
          }
          ?>   
       
    </section>
 </main>
 
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