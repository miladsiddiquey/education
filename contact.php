<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- pop font  -->
    <link rel="stylesheet" href="font/pop-font.css" />
    <!-- css link  -->
    <link rel="stylesheet" href="icon/css/all.min.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <!-- <link rel="stylesheet" href="/css/tom-select.default.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
    <script>
      if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </head>

  <body>
    <!-- preloader  -->
    <div class="preloader">
      <img src="icon/loader.gif" alt="loader" />
    </div>

    <!-- preloader end -->

    <!-- ==================== header ======================== -->

    <header>
      <div class="main-header">
        <div class="container">
          <div
            class="main-header-content d-flex align-items-center justify-content-between"
          >
            <h1 class="logo">
              <a href="Home.php"><img src="img/logo.png" alt="logo" /></a>
            </h1>
            <ul
              class="main-header-content-nav d-flex align-items-center justify-content-between"
            >
              <li><a href="Home.php" class="active">Home</a></li>
              <li><a href="about.php">About Us </a></li>
              <li>
                <a href="#">Service </a>
                <ul class="drop-down">
                  <li><a href="service.php">Service</a></li>
                  <li>
                    <a href="Complete-Education-Profile-Assessment.php"
                      >Complete Education Profile</a
                    >
                  </li>
                  <li><a href="transfer-money.php">Transfer money </a></li>
                  <li><a href="visa-pro.php">Visa pro </a></li>
                </ul>
              </li>
              <li>
                <a href="#">University</a>
                <ul class="drop-down">
                  <li>
                    <a href="canada-university.php">Canada university</a>
                  </li>
                  <li><a href="university-page.php">University Page </a></li>
                </ul>
              </li>
              <li>
                <a href="#">Find Destination </a>
                <ul class="drop-down">
                  <li><a href="Find-Destination.php">Find Destination </a></li>
                  <li>
                    <a href="Find-Occomentdation.php">Find Occomentdation</a>
                  </li>
                  <li>
                    <a href="destination-details.php">Destination Details</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Support</a>
                <ul class="drop-down">
                  <li>
                    <a href="admission-support.php">Addmission Support</a>
                  </li>
                  <li><a href="student-banking.php">Student Banking</a></li>
                  <li>
                    <a href="student-health-cover.php">Student Healthcover</a>
                  </li>
                  <li>
                    <a href="Student-Esentials.php">Student Esentials</a>
                  </li>
                  <li><a href="post-dep-support.php">post Dep</a></li>
                  <li>
                    <a href="schlorship&finsupport.php">SchlorShip & Fin</a>
                  </li>
                </ul>
              </li>
              <li><a href="contact.php" class="contact-btn">Contact</a></li>
            </ul>

            <i class="fa-solid fa-bars" id="menu-bar"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- ==================== header end======================== -->

    <!-- =================== top banner ======================= -->

    <main
      class="top-banner top-banner-mini"
      style="background: url(./img/top-banner.png)"
    >
      <div class="container">
        <div class="top-banner-header text-center">
          <h2>Contact Us</h2>
          <p class="mx-auto">
            Education 2 Success is one of the best student consultancy firms in
            Sylhet for Bangladeshi students and also a leading student services
            provider.
          </p>
        </div>
      </div>
    </main>

    <!-- =================== top banner ewnd======================= -->

    <!-- ========================= home contact ============================ -->
    <?php
    include "./database/database.php";
$obj = new Database();
$show = false;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $obj->insert('contact_info', [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message
    ]);
    $result = $obj->getResult();

    if ($result) {
        $show = true;
       
    } else {
        $error = $obj->getResult();
      
    }
}
?>
    <div class="home-contact">
      <div class="container">
        <div class="home-contact-content grid-2">
        <div class="home-contact-right">
            <h2>Contact Information</h2>
            <h4>We are open for any suggestions or just a chat</h4>

            <div class="home-contact-right-box">
              <div class="home-contact-right-box-left">
              <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="home-contact-right-box-right">
                <h5>Email</h5>
                <small>educationtwosuccess@gmail.com</small>
              </div>
            </div>
            <div class="home-contact-right-box">
              <div class="home-contact-right-box-left">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="home-contact-right-box-right">
                <h5>Phone</h5>
                <small>01788475158</small>
              </div>
            </div>
            <div class="home-contact-right-box">
              <div class="home-contact-right-box-left">
              <i class="fa-solid fa-globe"></i>
              </div>
              <div class="home-contact-right-box-right">
                <h5>Website</h5>
                <small>education.com</small>
              </div>
            </div>
            <div class="home-contact-right-box">
              <div class="home-contact-right-box-left">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="home-contact-right-box-right">
                <h5>Address</h5>
                <small>Zindabazar Point, Sylhet City, Bangladesh</small>
              </div>
            </div>
          </div>


          <div class="home-contact-left">
        <?php if (!$show): ?>
            <h2>Write Us</h2>
            <form method="post" action="contact.php" id="show">
                    <div class="form-input">
                        <input type="text" name="name" id="name" placeholder="Your Name*" required />
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" id="email" placeholder="Your Email*" required />
                    </div>
                    <div class="form-input">
                        <input type="text" name="subject" id="subject" placeholder="Subject*" required />
                    </div>
                    <div class="form-input">
                        <textarea name="message" id="message" placeholder="Write Your Message"></textarea>
                    </div>
                    <button name="submit" type="submit">Submit</button>
              </form>
              <?php else: ?>
                    <div id="thankYouMessage">
                        <h2 style="color:green; text-align:center">Thank you!<br> Your message has been submitted.</h2>
                    </div>
                <?php endif; ?>
        </div>
        </div>
      </div>
    </div>

    <!-- ========================= home contact end============================ -->

    <!-- ============================== footer -----------------------------==== -->

    <footer>
      <div class="container">
        <div class="main-footer">
          <div class="main-footer-box">
            <img src="img/logo.png" alt="img" />

            <p>
              We are leading online marketing agency and web development company
              & we always promised to get the best result on our every project.
            </p>

            <ul class="footer-social">
              <li>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-x"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
              </li>
            </ul>
          </div>
          <div class="main-footer-box">
            <h3>Our Service</h3>
            <ul class="footer-link">
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 1</a></li>
            </ul>
          </div>
          <div class="main-footer-box">
            <h3>Useful links</h3>
            <ul class="footer-link">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Event</a></li>
              <li><a href="#">Service</a></li>
            </ul>
          </div>
          <div class="main-footer-box">
            <h3>Our Phone Number</h3>
            <ul class="footer-link mb-4">
              <li>
                <a href="#"><i class="fa-solid fa-phone"></i> 017 0000 5555</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-phone"></i> 017 0000 5555</a>
              </li>
            </ul>
            <h3>Email or Website</h3>
            <ul class="footer-link">
              <li>
                <a href="#"
                  ><i class="fa-solid fa-phone"></i> studycan@gmail.com</a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="fa-solid fa-phone"></i> studycan@gmail.com</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-copy">
          <p>© 2023 Opstel IT All Rights Reserved</p>
        </div>
      </div>
    </footer>

    <!-- ============================== footer end-----------------------------==== -->

    <!-- js link js  -->
    <script src="js/jq.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <!-- <script src="/js/tom-select.complete.js"></script> -->
    <script src="js/script.js"></script>
    <!-- <script>
      new TomSelect("#select-beast", {
        create: true,
        sortField: {
          field: "text",
          direction: "asc",
        },
      });
    </script> -->

    <script>
      const bannerControl = document.querySelector("#destination-control");

      var slider = tns({
        container: ".home-destination-content",
        items: 3,
        slideBy: "page",
        autoplay: true,
        loop: true,

        autoplayResetOnVisibility: false,
        autoplayButtonOutput: false,
        autoplay: true,
        controls: true,
        nav: false,
        gutter: 20,
        mouseDrag: true,
        controlsContainer: bannerControl,
        prevButton: "#hd-left",
        nextButton: "#hd-right",
        speed: 500,

        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1000: {
            items: 3,
          },
        },
      });

      const bannerControl1 = document.querySelector("#review-control");

      var slider = tns({
        container: ".home-review-content",
        items: 2,
        slideBy: "page",
        autoplay: true,
        loop: true,

        autoplayResetOnVisibility: false,
        autoplayButtonOutput: false,
        autoplay: true,
        controls: true,
        nav: false,
        gutter: 40,
        mouseDrag: true,
        controlsContainer: bannerControl1,
        prevButton: "#hr-left",
        nextButton: "#hr-right",
        speed: 500,

        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
        },
      });

      const bannerControl2 = document.querySelector(".partner-control");

      var slider = tns({
        container: ".home-partner-content",
        items: 5,
        slideBy: "page",
        autoplay: true,
        loop: true,

        autoplayResetOnVisibility: false,
        autoplayButtonOutput: false,
        autoplay: true,
        controls: true,
        nav: false,
        gutter: 40,
        mouseDrag: true,
        controlsContainer: bannerControl2,
        prevButton: ".partner-control-left",
        nextButton: ".partner-control-right",
        speed: 500,

        responsive: {
          0: {
            items: 1,
          },
          450: {
            items: 2,
          },
          768: {
            items: 4,
          },
          1200: {
            items: 5,
          },
        },
      });
    </script>
  </body>
</html>
