<!DOCTYPE html>
<?php
include('dbconn.php');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Johannes Alexander Putra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.6.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Johannes Alexander Putra</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/profile.php?id=100073165925671" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/johannesap_/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/johannes-alexander-putra-044833201/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://johannesalexanderputra.blogspot.com/" class='instagram'> <i class="bx bxl-blogger"></i></a>
        </div>
      </div>

      <nav id=" navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#book" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Books Download</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Johannes Alexander Putra</h1>
      <p>I'm <span class="typed" data-typed-items="Student,Program analysts, Programmer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Johannes Alexander Putra is a student in computer science education at one of the country's public universities. Johannes is currently studying programming. </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>My Profile </h3>
            <p class="fst-italic">
              Below is my profile.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>8 June 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>+6281934172542 <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bandung,Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>Johanesalex774@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Below is the programming language that I can</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"> CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">C<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C++<i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java<i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Below is a little resume on my educational journey from junior high to now </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Johannes Alexander Putra</h4>
              <p><em>Johannes Alexander Putra is a student in computer science education at one of the country's public universities. Johannes is currently studying </em></p>
              <ul>
                <li>Taman Holis Indah G3 no 3</li>
                <li>081934172542</li>
                <li>Johanesalex774@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title"></h3>
            <div>

            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Junior High School</h4>
              <h5>2014 - 2017</h5>
              <p><em>Talenta Junior High School</em></p>
            </div>
            <div class="resume-item">
              <h4>Science Program</h4>
              <h5>2017 - 2020</h5>
              <p><em>Trinity High School</em></p>
            </div>
            <div class="resume-item">
              <h4>Computer Science Education</h4>
              <h5>2020 - Now </h5>
              <p><em>Inddonesia University of Education</em></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->



    <!-- ======= Services Section ======= -->
    <section id="book" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Book Download</h2>
          <p>There are some resources that you can download : </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Computer Book</h4>
            <a href="https://drive.google.com/drive/folders/1eNbIRBoZa-foOPwsakMfEo20ZPuhzjar">Computer Book</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Notes</h4>
            <a href="https://drive.google.com/drive/folders/10tiT6N4oD6pGdVP670qUcKbty-sl8Dh8?usp=sharing">Notes</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Christian Theology</h4>
            <a href="https://drive.google.com/drive/folders/1GhxPFNiMpsYknkY4q2EjT3hgEYphBHJC?usp=sharing">Christian Theology</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Toefl Preparation</h4>
            <a href="https://drive.google.com/drive/folders/1lriPL38lsUBTqqyrk4SygNO89cscIOS6?usp=sharing">Toefl Preparation</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Teaching</h4>
            <a href="https://drive.google.com/drive/folders/1ezyS_rr679OXX2WL5rOiF6obDsu8n3e8">Teaching</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Motivation</h4>
            <a href="https://drive.google.com/drive/folders/12XH8V04R4stMasJXWR4LvY9CWjRGOpfw">Motivation</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title">Bible comic</h4>
            <a href="https://drive.google.com/drive/u/0/folders/1XviBQoBJID1kVKCcrAKD5-s2lbAbdye7">Bible Comic</a>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact me On</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Taman Holis Indah G3 no 3</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Johanesalex774@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 81934172542</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.534201943599!2d107.55931041744383!3d-6.946133699999974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ef461093cf4f%3A0xe40a5ed6deb202c7!2sTaman%20Holis%20Indah%201!5e0!3m2!1sid!2sid!4v1635390075817!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-inline" method="POST">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php
  $nama =  $email =  $subjek = $pesan = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = tes_input($_POST['name']);
    $email = tes_input($_POST['email']);
    $subjek = tes_input($_POST['subject']);
    $pesan = tes_input($_POST['message']);
    $insert = "INSERT into pesan (nama,email,subjek,pesan) VALUE ('$nama','$email','$subjek','$pesan')";

    if ($conn->query($insert) == TRUE) {
      echo "<script>window.alert('Message Sent')</script>";
    } else {
      echo "<script>window.alert('Ada kesalahan')</script>";
    }
  }

  function tes_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



  ?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    </div>
    <div class="credits">

    </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>