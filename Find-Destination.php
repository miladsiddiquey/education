<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find-Destination</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- pop font  --> 
    <link rel="stylesheet" href="font/pop-font.css" />
    <!-- css link  -->
    <link rel="stylesheet" href="icon/css/all.min.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <!-- <link rel="stylesheet" href="/css/tom-select.default.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
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

    <main class="top-banner" style="background: url(./img/top-banner.png)">
      <div class="container">
        <div class="top-banner-header text-center">
          <h3>Welcome to</h3>
          <h2>Education 2 Success</h2>
          <p class="mx-auto">
            Education 2 Success is one of the best student consultancy firms in
            Sylhet for Bangladeshi students and also a leading student services
            provider.
          </p>
        </div>

        <form action="Home.php" class="mx-auto">
          <div class="form-input d-flex gap-2 align-items-center">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input
              type="text"
              name="search"
              id="search"
              placeholder="Search universities"
            />
          </div>
          <div class="form-input">
            <select
              id="select-beast"
              placeholder="Select a person..."
              autocomplete="off"
            >
              <option value="">Select Country</option>
              <option value="4">Thomas Edison</option>
              <option value="1">Nikola</option>
              <option value="3">Nikola Tesla</option>
              <option value="5">Arnold Schwarzenegger</option>
            </select>
          </div>
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

        <div class="top-banner-content text-center">
          <div class="top-banner-btn d-flex gap-4 justify-content-center">
            <a href="#" class="btn-main">Register For IELTS</a>
            <a href="#" class="btn-white">Contact Our Team</a>
          </div>
        </div>
      </div>
    </main>

    <!-- =================== top banner ewnd======================= -->

    <!-- ===================== home destination ==================== -->

    <div class="home-destination">
      <div class="container">
        <div class="section-header"></div>

        <div class="home-destination-content grid-3">
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="img/post1.png" alt="img" />
              </div>
              <div class="card-box-text">
                <h4>Study in AUSTRALIA</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="#"
                  >Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===================== home destination end==================== -->

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
  </body>
</html>
