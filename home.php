

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Card_solutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
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

  <!-- button style -->
  <style>
    #btn {
      -webkit-border-radius: 12;
  -moz-border-radius: 12;
  border-radius: 12px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  background: #234d69;
  padding: 9px 8px 12px 10px;
  text-decoration: none;
}

#btn:hover {
  background: #234d69;
  text-decoration: none;
}
  </style>

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="home.php">Card_solutions</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#co">Contact</a></li>
          <li><a class="getstarted scrollto" href="index.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Card solutions provide payment Solutions </h1>
          <h2>Any wallet ,Credit and Debit Into Bank Account </h2>
          
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#bank" class="btn-get-started scrollto">Fill Bank Details</a>
            <!-- <a href="" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
<div>

  <center> <h4>Bank Details</h4></center>
<form id="bank" action="bankverifi.php" method="post" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">User id</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter user id" name="uid" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div> <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Bank Name</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Bank Name" name="bname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div> <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Upi id</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter upi id" name="bupi" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div> <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Enter the Amount</label>
      <input type="number" class="form-control" id="uname" placeholder="Enter Amount" name="bcupi" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">I agree </label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<hr>


































    
    

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  

    <div class="footer-top">
      <div class="container">
        <div class="row" id="co">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Card_solutions</h3>
            <p>
              bangalore Karnataka<br>
              <!-- <strong>Phone:</strong> 8951094397<br> -->
              <strong>Email:contact.Skylabs.gmail.com</strong><br>
            </p>
          </div>

         

        </div>
      </div>
    </div>

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <!-- to desable forward and back word -->
<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 100);
window.onunload = function () { null };

// Special functions
<!-- to remove copy and past -->
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}


// Disable right-click
document.addEventListener('contextmenu', (e) => e.preventDefault());

function ctrlShiftKey(e, keyCode) {
  return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
}

document.onkeydown = (e) => {
  // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
  if (
    event.keyCode === 123 ||
    ctrlShiftKey(e, 'I') ||
    ctrlShiftKey(e, 'J') ||
    ctrlShiftKey(e, 'C') ||
    (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
  )
    return false;
};



/** TO DISABLE SCREEN CAPTURE **/
document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        alert('Screenshots disabled!');
    }
});

/** TO DISABLE PRINTS WHIT CTRL+P **/
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
        alert('This section is not allowed to print or export to PDF');
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }
});
</script>

</body>

</html>