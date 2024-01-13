<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Card_solutions - Adminpage</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="logo.png" rel="icon">
   

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Admin Page</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>--></div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Card solutions provide payment Solutions </h1>
                    <h2>our top Services <br> Paytm postpay to Bank Account <br> Credit Card to Bank Account</h2>

                    <div class="d-flex justify-content-center justify-content-lg-start">

                        <!-- <a href="" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

<!-- admin page -->
<hr>
 <center><h4> Admin Pannel</h4></center>
 <hr> &nbsp; 
      <button id="btn"   onclick="window.open('create_Account.php','popUpWindow','height=500,width=400,left=100 ,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          create_Account </button>   
    
      <hr> &nbsp; 
      <button id="btn"   onclick="window.open('custemer_login_details.php','popUpWindow','height=500,width=400,left=100 ,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          custemer_login_detail </button>   
      <hr> &nbsp; 
      <button id="btn"   onclick="window.open('custemer_order_details.php','popUpWindow','height=500,width=400,left=100 ,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          custemer_order_details </button>  
      <hr> &nbsp; 
      <button id="btn"   onclick="window.open('custemer_payment_details.php','popUpWindow','height=500,width=400,left=100 ,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          custemer_payment_details </button> 
           <hr>&nbsp; 
           <button id="btn"   onclick="window.open('update_admin_login.php','popUpWindow','height=500,width=400,left=100 ,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          update_admin_login </button> 
           <hr>





















      
<!-- php of paymentupdate -->
 <section>
<?php
include_once('connection.php');
 $sqll= "SELECT * FROM `payment_link`";
 $res= mysqli_query($conn,$sqll);
 $link =mysqli_fetch_assoc($res);
 echo"<script type='text/javascript'>

 (function()
 {
   if( window.localStorage )
   {
     if( !localStorage.getItem('firstLoad') )
     {
       localStorage['firstLoad'] = true;
       window.location.reload();
     }  
     else
       localStorage.removeItem('firstLoad');
   }
 })();
 
 </script>";

?>
 
    <h4>Payment Link Updated <br> <?php echo "present link :". $link['link']; ?></h4>
  <form action="admin.php" method="post">
                <input type="text" name="up">
                <input type="submit" value="Update">
            </form>
    <hr>        
           
       


   

<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
  $link = $_POST['up'];
$sqll = "UPDATE `payment_link` SET `link`='$link' WHERE 1";
mysqli_query($conn,$sqll);
}

?>
</section>

<!-- php of paymentupdate close -->
      

<!-- admin page -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Card_solutions</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">Card solutions Team</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>