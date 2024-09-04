<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Index - Impact Bootstrap Template</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Favicons -->
  <link href="assets/img/logo-favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link
    href="assets/vendor/bootstrap/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link
    href="assets/vendor/glightbox/css/glightbox.min.css"
    rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- font awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body class="index-page">
  <?php include 'includes/navbar.html' ?>

  <main class="main">
    <!-- Hero Section -->

    <section id="hero" class="hero section accent-background">
      <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div
            class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <div
              class="row d-flex align-items-center justify-content-between flex-nowrap">
              <div class="col-auto d-flex align-items-center">
                <img src="assets/img/logo-tm.png" alt="" height="30px" />
                <img
                  src="assets/img/logo-maxis.png"
                  alt=""
                  height="30px"
                  class="ms-2" />
                <div class="mt-3">
                  <h5 style="color: black; white-space: nowrap">
                    <span style="color: #ffa500">|</span> Authorised Reseller
                  </h5>
                </div>
              </div>
            </div>
            <h2 style="color: #ffa500">
              <span>For your </span><span style="color: #7df21d">home</span>
            </h2>
            <p></p>
            <div class="d-flex">
              <a href="#contact" class="btn-get-started">Get Started</a>
             
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img
              src="assets/img/hero-banner.gif"
              class="img-fluid"
              alt=""
              height="300px" />
          </div>
        </div>
      </div>
    </section>

    <!-- /Hero Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sign Up UNIFI or Maxis and Get 6 Months Free Internet</h2>
        <p>Submit your interest and let our consultant contact you.</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-4">
            <div
              class="info-container d-flex flex-column align-items-center justify-content-center">
              <!-- End Info Item -->

              <div
                class="info-item d-flex"
                data-aos="fade-up"
                data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+60147968981</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form
              id="whatsappForm"

              class="php-email-form"
              data-aos="fade"
              data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    placeholder="Full Name"
                    required="" />
                </div>
                <div class="col-md-6">
                  <input
                    type="email"
                    id="email"
                    class="form-control"
                    name="email"
                    placeholder="Your Email"
                    required="" />
                </div>
                <div class="col-md-6">
                  <input
                    type="text"
                    id="phone"
                    class="form-control"
                    name="phone_number"
                    placeholder="Phone Number"
                    required="" />
                </div>

                <div class="col-md-6">
                  <input
                    type="text"
                    id="address"
                    class="form-control"
                    name="address"
                    placeholder="Your Address"
                    required="" />
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit">Get Offer Now</button>
                </div>
                <div class="col-md-12 text-center">
                  <p style="color: gray">or connect with</p>

                  <a
                    href="https://api.whatsapp.com/send/?phone=60147968981&text&type=phone_number&app_absent=0"
                    target="_blank"
                    class="contact-btn"><i class="fa-brands fa-whatsapp"></i> Sales Assistance</a>
                </div>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- /Contact Section -->
  </main>

  <?php include 'includes/footer.html' ?>

  <!-- Scroll Top -->
  <a
    href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script>
    // JavaScript to set the active page
    document.addEventListener("DOMContentLoaded", function() {
      const currentLocation = location.href;
      const menuItems = document.querySelectorAll('.navmenu a');

      menuItems.forEach(item => {
        if (item.href === currentLocation) {
          item.classList.add('active');
        }
      });
    });
  </script>
  <script>
    document.getElementById("whatsappForm").addEventListener("submit", function(event) {
      event.preventDefault();

      // Collect values from the form fields
      var name = document.getElementById("name").value.toUpperCase();
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var address = document.getElementById("address").value.toUpperCase();

      // Format the message for WhatsApp
      var whatsappMessage =
        `Hi, I'm interested in the WiFi package! 😊` + // Added an emoji for a friendly touch
        `%0A%0A` + // Extra line break for spacing
        `📋 *Here are my details:*` + // Bullet point and bold for the section title
        `%0A` +
        `%0A*NAME:* ${name}` + // Bold for labels
        `%0A*EMAIL:* ${email}` +
        `%0A*PHONE:* ${phone}` +
        `%0A*ADDRESS:* ${address}`;


      // WhatsApp URL with your phone number
      var whatsappURL = `https://api.whatsapp.com/send?phone=601137465063&text=${whatsappMessage}&app_absent=0`;

      // Open WhatsApp with the pre-filled message
      window.open(whatsappURL, '_blank');
    });
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>