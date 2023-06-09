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
          <li class="dropdown"><a href="#gallery"><span>Fotoğraf Galerisi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="muayene.php">Muayene Fotoğrafları</a></li>
              <li><a href="eğitim.php">Eğitim Fotoğrafları</a></li>
            </ul>
          <li><a href="#contact">İletişim</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Kariyer Mühendislik'e Hoşgeldiniz</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Hemen Başla</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/fabrica2.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

  

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Hakkımızda</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <p>Kariyer Mühendislik Proses
              güvenliği alanında Atex
              direktifleri ile patlayıcı ortamların
              sınıflandırılması, risk değerlendirmesi,
              makine emniyeti, proses emniyeti vb.
              teknik konularda mühendislik,
              danışmanlık ve eğitim hizmeti
              vermek amacı ile kurulmuş
              bir firmadır</p>
              <img src="assets/img/about.jpeg" alt="" id="aboutimg">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h4 id="deger">Değerlerimiz</h4>
              <ul>
                <li ><i class="bi bi-check-circle-fill"></i> <span >Müşteri Odaklılık</span> 
                <p >
                  Müşterilerimiz için hizmetlerimizi, makul fiyatlarla,
                  söz verdiğimiz zaman ve şartlarda sunarız. Müşteri
                  memnuniyeti odaklı, müşterilerin ihtiyaç ve
                  taleplerine en kısa zamanda, en doğru şekilde
                  cevap veren bir yapıda ve mantıkla çalışırız.
                </p>
                </li>
                
                <li ><i class="bi bi-check-circle-fill"></i>Dürüstlük
                <p>
                  Öncelikli değerlerimizden birisi dürüstlüktür ve
gerek profesyonel hayatımızda gerekse kişisel
faaliyetlerimizde her zaman buna bağlı kalırız.
                </p>
                </li>
                <li  ><i class="bi bi-check-circle-fill"></i>Etik
                <p>
                  Mesleki ve kişisel davranışlarımızda etik
standartlara bağlıyız. Ortaklarımızla
iletişimlerimizde veya çalışmalarımızda bireysel
eylemlerimizin ve kararlarımızın her biri için
sorumluluk ve mesuliyet alırız ve günlük
faaliyetlerimiz sırasında profesyonelce davranırız.
                </p>
                </li>
                <li ><i class="bi bi-check-circle-fill"></i>Güvenilirlik
                <p>
                  Müşterilerimizin güvenini kazanmak ve
sürdürmek temel değerlerimiz arasında
yer alır. Doğruluktan hiçbir şartta
ayrılmayan, ilkelerine ve sözüne
kesinlikle sadık, her konuda güvenilir
olmayı içtenlikle benimseriz
                </p>
                </li>

              </ul>
             

         
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <div class="section-header">
      <h2 id="sponsorlar">Referanslarımız</h2>

    </div>
    <section id="referans" class="clients ">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper ">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/1.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/2.svg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/9.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/10.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/11.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/12.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/13.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/14.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/15.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/16.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/17.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/18.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/19.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/20.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/21.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/22.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/23.png" class="img-fluid" alt=""></div>

          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
   

    <!-- ======= Call To Action Section ======= -->
   
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Hizmetlerimiz</h2>
          <p>Hizmet detaylarımıza buradan ulaşabilirsiniz</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 col-md-6">
            <div class="service-item  position-relative">
              
              <h3>Patlamadan Korunma Dökümanı Hizmeti</h3>
              <p>ATEX 153'de, Bölge'lerin (Zone) genel
                tarifi yapılmakta ve firmaların
                yükümlülükleri anlatılmaktadır. 99/92/EC
                "Çalışanların Patlayıcı Ortamların
                Tehlikelerinden Korunması Hakkında Yönetmelik" Madde 10 gereğince İşveren,
                6. maddede belirtilen yükümlülüğünü
                yerine getirirken, ikinci fıkrada
                belirtilen hususların yer aldığı
                Patlamadan Korunma Dokümanını
                hazırlar. Patlayıcı ortam oluşması
                ihtimali bulunan işyerleri "Patlamadan Korunma Dökümanı" hazırlamakla yükümlüdür.</p>
                <button id="myBtn">Daha fazla bilgi al —></button>

            </div>
            
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6">
            <div class="service-item position-relative">
              
              <h3>Exproof Ekipman Muayene Hizmeti</h3>
              <p>Patlayıcı ortamlarda kullanılabilecek
                ekipmanlarla ilgili detayları içeren ve ATEX
                114 olarak bilinen 2014/34/EU sayılı Avrupa
                Parlamentosu ve Konseyi Direktifi ise
                mevzuatımıza “Muhtemel Patlayıcı Ortamda
                Kullanılan Teçhizat ve Koruyucu Sistemler
                İle İlgili Yönetmelik" olarak aktarılmıştır.
                Bu yönetmelikteki tedbirlerinuygulanabilmesi
                için önce Patlamadan Korunma Dokümanının
                hazırlanarak patlayıcı ortam sınıflamasının
                yapılmış olması gerekmektedir.</p>
                
                <button id="myBtnn">Daha fazla bilgi al —></button>
            </div>
            
          </div><!-- End Service Item -->

         

        </div>

      </div>
      
      <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          
          <object width="400" height="500" type="application/pdf" data="assets/img/Kariyer Mühendislik Katalog (1).pdf" id="pdf_content">
      <p>Pdf dokümanı yüklenemediğinde verilecek hata mesajı...</p>
      </object>
        </div>
      </div>
      <script>
          
      // Popup Al
      var modal = document.getElementById('myModal');
      
      // Kipi açan düğmeyi al
      var btn = document.getElementById("myBtn");
      
      // Kipi kapatan <span> öğesini edinin
      var span = document.getElementsByClassName("close")[0];
      
      // Kullanıcı düğmeyi tıklattığında
      btn.onclick = function() {
          modal.style.display = "block";
      }
      
      // Kullanıcı <span> (x) düğmesini tıkladığında, popup
      span.onclick = function() {
          modal.style.display = "none";
      }
      
      // Kullanıcı modelden başka herhangi bir yeri tıklattıysa, onu kapatın.
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            
            <object width="400" height="500" type="application/pdf" data="assets/img/Kariyer Mühendislik Katalog (1).pdf" id="pdf_content">
        <p>Pdf dokümanı yüklenemediğinde verilecek hata mesajı...</p>
        </object>
          </div>
        </div>
        <script>
            
        // Popup Al
        var modal = document.getElementById('myModal');
        
        // Kipi açan düğmeyi al
        var btn = document.getElementById("myBtnn");
        
        // Kipi kapatan <span> öğesini edinin
        var span = document.getElementsByClassName("close")[0];
        
        // Kullanıcı düğmeyi tıklattığında
        btn.onclick = function() {
            modal.style.display = "block";
        }
        
        // Kullanıcı <span> (x) düğmesini tıkladığında, popup
        span.onclick = function() {
            modal.style.display = "none";
        }
        
        // Kullanıcı modelden başka herhangi bir yeri tıklattıysa, onu kapatın.
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
    </section><!-- End Our Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Eğitimler</h2>
          <p>Eğitimlerimiz hakkında detaylı bilgiye buradan ulaşabilirsiniz</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          

          <div class="row gy-4 portfolio-container" id="deneme1">

            <div class="col-xl-6 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/exproof.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/exproof.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Exproof Ekipman Bakım, Montaj ve Denetim Eğitimi</a></h4>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-6 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/patla.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/patla.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio_details.html" title="More Details">Patlamadan Korunma Dökümanı Hazırlama Eğitimi</a></h4>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

           

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <section id="gallery" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Fotoğraf Galerisi</h2>
          <p>Eğitim ve muayene fotoğraflarımıza göz atmayı unutmayın</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          

          <div class="row gy-4 portfolio-container" id="deneme1">

            <div class="col-xl-6 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/5.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/11.jpg" class="img-fluid" alt=""></a>
                <a href="assets/img/portfolio/1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/6.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/7.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/8.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/9.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/10.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/11.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/12.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/portfolio/13.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>



                

               

                <div class="portfolio-info">
                  <h4><a href="muayene.php" title="More Details">Muayene Fotoğrafları</a></h4>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-6 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/Eğitim/1.JPG" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/WhatsApp Image 2022-10-29 at 17.17.14.jpeg" class="img-fluid" alt=""></a>
                <a href="assets/img/Eğitim/2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/5.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/6.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/7.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/8.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/9.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/10.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/11.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/12.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/13.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
                <a href="assets/img/Eğitim/14.jpg" data-gallery="portfolio-gallery-app" class="glightbox"></a>
               

                
                <div class="portfolio-info">
                  <h4><a href="eğitim.php" title="More Details">Eğitim Fotoğrafları</a></h4>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            

           

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>İletişim</h2>
          <p>Teklif talepleriniz soru, görüş ve önerileriniz için bize ulaşabilirsiniz

          </p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div class="konum">
                  <h4>Konum:</h4>
                  <p>
                    <span>
                      Marmara Bölgesi Ofisi
                    </span>
                    <p></p>
                    Aşağıdudullu Mah. Ramazan Sk. No:1573 34773, Ümraniye/İSTANBUL
                    <p></p>
                    <span>
                      Doğu Böl. Ofisi
                    </span>
                    <p></p>
                    Şehit Mustafa Gündoğdu Mh. Filiz Sk. No:8/8A, Merkez/BİNGÖL
                  </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@kariyermuhendislik.com.tr</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telefon:</h4>
                  <p>+90 544 585 68 14</p>
                </div>
              </div><!-- End Info Item -->

            
            </div>

          </div>

          <div class="col-lg-8">
          <form method="POST" class="formm" action="#contact" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" name="name" type="text" placeholder="Adınızı ve Soyadınızı Giriniz..." data-sb-validations="required" />
                                    <label for="name">Ad Soyad</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Adınızı ve Soyadınızı Giriniz.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="email" type="email" placeholder="Emailinizi giriniz..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Emailinizi giriniz.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email mevcut değil.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="phone" type="tel" placeholder="Tel no giriniz..." data-sb-validations="required" />
                                    <label for="phone">Telefon Numarası </label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Tel no giriniz.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Mesajınızı Giriniz..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Mesaj</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Mesajınızı Giriniz.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                    <!--   <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>-->
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                               
                          <!-- <div id="bildiri"></div> -->
                          <?php      
                            if(@$_GET["i"] == "ok"){
                                echo '<p class ="text-center text-success alert alert-success">Mesaj başarıyla gönderildi!</p>';


                            }elseif(@$_GET["i"] == "hata"){
                                echo '<p class ="text-center text-danger alert alert-danger">Mesaj gönderilemedi!</p>';

                            }
                            ?>

                            </form>
                            <input type="submit" name="submit"  class="btn btn-primary" value="Gönder">
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
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
            <li><a href="#services">Patlamadan Korunma Dökümanı Hizmeti</a></li>
            <li><a href="#services">Exproof Ekipman Muayene Hizmeti</a></li>
            
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