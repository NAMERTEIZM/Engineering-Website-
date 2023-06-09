<!-- <?php 
require_once "db.php";


if(@$_POST["submit"]) {
    $ad = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8') ;
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $tel = htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8');
    $mesaj = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');

    $ekle = $db->prepare("INSERT INTO `iletisim` (`ad` , `email`, `tel`, `mesaj`)
    VALUES (:ad, :email, :tel, :mesaj ) ");
    $ekle->bindValue(":ad", $ad, PDO::PARAM_STR);
    $ekle->bindValue(":email", $email, PDO::PARAM_STR);
    $ekle->bindValue(":tel", $tel, PDO::PARAM_STR);
    $ekle->bindValue(":mesaj", $mesaj, PDO::PARAM_STR);

    if($ekle->execute()){
      //eğer başarılıysa
      header("Location: index.php") ;
    }else{
        //eğer hatalıysa
        header("Location: index.php");
    }


}

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kariyer Mühendislik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@kariyermuhendislik.com.tr</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+90 544 585 68 14</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        
      <h1>Kariyer Mühendislik<span>.</span></h1>
    </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Anasayfa</a></li>
          <li><a href="#about">Hakkımızda</a></li>
          <li class="dropdown"><a href="#services"><span>Hizmetlerimiz</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#services">Patlamadan Korunma Dokümanı Hizmeti</a></li>
              <li><a href="#services">Exproof Ekipman Muayene Hizmeti</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#portfolio"><span>Eğitimler</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="portfolio-details.html">Exproof Ekipman Bakım, Montaj ve Denetim Eğitimi</a></li>
              <li><a href="portfolio_details.html">Patlamadan Korunma Dokümanı Hazırlama Eğitimi</a></li>
            </ul>
          </li>
          <li><a href="#referans">Referanslarımız</a></li>
          <li class="dropdown"><a href="#services"><span>Fotoğraf Galerisi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#services">Muayene Fotoğrafları</a></li>
              <li><a href="#services">Eğitim Fotoğrafları</a></li>
            </ul>
          <li><a href="#contact">İletişim</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
<div id="mdiv">
<h1 id="muayenetext">Eğitim Fotoğrafları</h1>

</div>
  <br>
  <hr>
 <div class="container">
  <div class="row">
    <div class="col-xl-3">
<img src="./assets/img/Eğitim/1.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/9.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/10.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/11.jpg" data-action="zoom" alt="">
  </div>


</div>
<div class="row">
    <div class="col-xl-3">
<img src="./assets/img/Eğitim/3.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/4.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/5.jpg" data-action="zoom" alt="">
  </div>
 
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/8.jpg" data-action="zoom" alt="">
  </div>
  
</div>
<div class="row">

<div class="col-xl-3">
<img src="./assets/img/Eğitim/2.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/6.jpg" data-action="zoom" alt="">
  </div>
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/7.jpg" data-action="zoom" alt="">
  </div>
   
  <div class="col-xl-3">
<img src="./assets/img/Eğitim/12.jpg" data-action="zoom" alt="">
  </div>
  
</div>

</div> 
<br>
<hr>
 


   
     <!-- END EDMO HTML (Happy Coding!)-->
 
 
      
  
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Kariyer Mühendislik <span id="footernok">.</span></span>
          </a>
          <p>Proses güvenliği alanında verdiği denetim, eğitim ve danışmanlık hizmetlerini en kapsamlı şekilde gerçekleştirip müşteri memnuniyeti kazanarak sektörde öncü olmayı başarabilmektir. </p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

   
        <div class="col-lg-2 col-6 footer-links">
          <h4>Hizmetlerimiz</h4>
          <ul>
            <li><a href="#">Patlamadan Korunma Dökümanı Hizmeti</a></li>
            <li><a href="#">Exproof Ekipman Muayene Hizmeti</a></li>
            
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Eğitimlerimiz</h4>
          <ul>
            <li><a href="portfolio-details.html">Exproof Ekipman Bakım, Montaj ve Denetim Eğitimi</a></li>
            <li><a href="portfolio_details.html">Patlamadan Korunma Dökümanı Hazırlama Eğitimi</a></li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Bizimle İletişime Geçin</h4>
          <p>
            Aşağıdudullu Mah. Ramazan Sk. No:1573 34773, Ümraniye/İSTANBUL <br><br>
            <strong>Telefon:</strong>+90 544 585 68 14<br>
            <strong>Email:</strong>info@kariyermuhendislik.com.tr<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Kariyer Mühendislik<span id="footernok">.</span></span></strong> Tüm Hakları Saklıdır.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Adem BARIŞ</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>