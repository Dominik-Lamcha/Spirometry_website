<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nova Bootstrap Template - Services</title>
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
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.0.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo (2).png" alt="">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="#services-list">Sprawdź się</a></li>
          <li><a href="#testimonials">Autorzy</a></li>
          <li><a href="#contact">Kontakt</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/spirometria.webp');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Sprawdź swoje wyniki!</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Sprawdź swoje wyniki!</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">
        <div class="section-header justify-content-center">
          <h2>Wypełnij krótki formularz</h2>
        </div>
      </div>
      <div class="container position-relative" data-aos="fade-up">
        <div class="container position-relative d-flex flex-column align-items-center">
          <h3>Podaj informacje o sobie</h3>
        </div>
        <div class="row gy-4 d-flex ">
        <form role="form">
            <div class="row justify-content-center">
              <div class="col-2">
                <!-- <input type="text" name="name" class="form-control" id="name" placeholder="płeć" required> -->
                <select name="plec" class="form-control"  id="plec">
                  <option>Płeć</option>
                  <option>Mężczyzna</option>
                  <option>Kobieta</option>
                </select>
              </div>
              <div class="col-2">
                <!-- <input type="text" name="name" class="form-control" id="name" placeholder="wiek" required> -->
                <input type="number" name="wiek" class="form-control" id="wiek" min="1" max="120" placeholder="wiek w latach">
              </div>
              <div class="col-2">
                <input type="number" name="wzrost" class="form-control" id="wzrost" min="100" max="250" placeholder="wzrost w cm">
              </div>
            </div>
            <div class="form-group mt-3">
              <div class="container position-relative d-flex flex-column align-items-center">
                <h3>Wprowadź wyniki swojego badania</h3>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-2 form-group">
                  <input type="number" name="FEV1L" class="form-control" id="FEV1L" placeholder="FEV1 L" min="1" max="10" step="0.01">
                </div>
                <div class="col-md-2 form-group">
                  <input type="number" name="FEV1P" class="form-control" id="FEV1P" placeholder="FEV1 %"  min="30" max="200" required>
                </div>
                <div class="col-md-2 form-group">
                  <input type="number" name="VCmaxL" class="form-control" id="VCmaxL" placeholder="VCmax L" min="1" max="10" step="0.01">
                </div>
                <div class="col-md-2 form-group">
                  <input type="number" name="VCmaxP" class="form-control" id="VCmaxP" placeholder="VCmax %" min="30" max="200" required>
                </div>
                <div class="col-md-2 form-group">
                  <input type="number" name="Tiffenmax" class="form-control" id="Tiffenmax" placeholder="Tiffen/max" min="20" max="120">
                </div>
              </div>
              <div class="form-group mt-3">
                <div class="row ">
                  <div class="col-md-2 form-group">
                    <input type="number" name="PEFL" class="form-control" id="PEFL" placeholder="PEF L" min="2" max="20" step="0.1">
                  </div>
                  <div class="col-md-2 form-group">
                    <input type="number" name="PEFP" class="form-control" id="PEFP" placeholder="PEF %" min="30" max="200" required>
                  </div>
                  <div class="col-md-2 form-group">
                    <input type="number" name="FEF50L" class="form-control" id="FEF50L" placeholder="FEF50 L" min="1" max="10" step="0.01">
                  </div>
                  <div class="col-md-2 form-group ">
                    <input type="number" name="FEF50P" class="form-control" id="FEF50P" placeholder="FEF50 %" min="30" max="200" >
                  </div>
                  <div class="col-md-2 form-group">
                    <input type="number" name="FEF2575L" class="form-control" id="FEF2575L" placeholder="FEF25/75 L" min="1" max="10" step="0.01">
                  </div>
                  <div class="col-md-2 form-group">
                    <input type="number" name="FEF2575P" class="form-control" id="FEF2575P" placeholder="FEF25/75 %" min="30" max="200" >
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <div class="row justify-content-center">
                  <div class="col-md-2 form-group">
                    <div class="text-center"><button type="submit" name="submit" value="submit">Zatwierdź</button></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
                      <div class="form-group mt-3">
          <div class="container position-relative d-flex flex-column align-items-center">
            <?php

              
                if(isset($_GET['submit'])){
                  $plec = $_GET['plec'];
                  $wiek = $_GET['wiek'];
                  $wzrost = $_GET['wzrost'];

                  $FEV1L = $_GET['FEV1L'];
                  $FEV1P = $_GET['FEV1P'];
                  $VCmaxL = $_GET['VCmaxL'];
                  $VCmaxP = $_GET['VCmaxP'];
                  $Tiffenmax = $_GET['Tiffenmax'];

                  $PEFL = $_GET['PEFL'];
                  $PEFP = $_GET['PEFP'];
                  $FEF50L = $_GET['FEF50L'];
                  $FEF50P = $_GET['FEF50P'];
                  $FEF2575L = $_GET['FEF2575L'];
                  $FEF2575P = $_GET['FEF2575P'];

                  if($FEV1P>80 || $PEFP>80)
                  {
                    echo'<p>Twoje drogi oddechowe są drożne</p>';
                    echo'<p>Szczytowy przepływ Twoich płuc jest prawidłowy</p>';
                  }

                  elseif($FEV1P>70 && $PEFP>70)
                  {
                    echo'<p>Wyniki drożności dróg oddechowych są na granicy alarmu.</p>';
                    echo'<p>Szczytowy przepływ Twoich płuc jest dolnej granicy normy.</p>';
                    echo'<p>Kontroluj stan zdrowia, rozważ kontakt z lekarzem.</p>';
                  }
                  else
                  {
                    echo'<p>Prawdopodobnie masz problem z drożnością dróg oddechowych </p>';
                    echo'<p>Skonsultuj  wyniki ze specjalistą</p>';
                  }

                  if($VCmaxP>80)
                  {
                    echo'<p>Objętość Twoich płuc jest w normie</p>';
                  }
                  elseif($VCmaxP<80)
                  {
                    echo'<p> </p>';
                    echo'<p>Twoje płuca są mniejsze niż u przeciętnego pacjęta</p>';
                    echo'<p>Kontroluj saturację krwi oraz rozważ kontakt z lekarzem </p>';
                  }
              }
            ?>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Przygotowali</h2>

        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p><span style="font-family: Brush Script MT;">
                 Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  </span>
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Jakiś Lekarz</h3>
                  <h4>Lekarz</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Student Automatyki Robotyki i Systemów Sterowania z indexem S176112. Pasjonat szeroko pojętej inżynierii spełniający swoje zainteresowania w dziedzinie programowania oraz druku 3D.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Tomasz Downar-Zapolski</h3>
                  <h4>Student debil</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                Student Automatyki Robotyki i Systemów Sterowania z indexem S176326. Wielbiciel szerzenia świadomości historycznej. Fan szeroko pojętej motoryzacji.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Dominik Lamcha</h3>
                  <h4>Student debil</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Jyn dis tutorial aj wjyl szoł ju hał tu prgraaam e sajt jusing Pi EJcz Pi. Zis łil help ju to pas jor egzam łiwałt łorking spajrometri diwajs. Supskrajp ant gif dem sam pozitif grejd mister Doktor  
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Technical Babaji</h3>
                  <h4>Hinduski youtuber</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Lokalizacja:</h4>
                <p><a href="https://goo.gl/maps/FRBPL5wMWbCpEScL8">Jaskinia dziekana sala 304 [GG]</a></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p><a href="mailto:python.zawsze.dziala@gmail.com">python.zawsze.dziala@gmail.com</a></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.7181743489654!2d18.617475507127228!3d54.37432673251638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd7499f81f1717%3A0x7c4025128e94da10!2sPolitechnika%20Gda%C5%84ska.Wydzia%C5%82%20Elektrotechniki%20i%20Automatyki.Katedra%20Mechatroniki%20i%20In%C5%BCynierii%20Wysokich%20Napi%C4%99%C4%87!5e0!3m2!1spl!2spl!4v1655219352907!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Spirometr</span>
            </a>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="index.html">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="#services-list">Sprawdź się</a></li>
              <li><i class="bi bi-dash"></i> <a href="#testimonials">Autorzy</a></li>
              <li><i class="bi bi-dash"></i> <a href="#contact">Kontakt</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <a href="https://goo.gl/maps/FRBPL5wMWbCpEScL8">Jaskinia dziekana sala 304 [GG]</a>
              <strong>Email:</strong> <a href="mailto:python.zawsze.dziala@gmail.com">python.zawsze.dziala@gmail.com</a><br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; <strong><span>Spirometr</span></strong>
        </div>
        
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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>