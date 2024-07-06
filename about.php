<?php
include "./database/database.php";
$obj = new Database();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>

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
            <a href="./university-page.php" class="btn-main">View University</a>
            <a href="./contact.php" class="btn-white">Contact Our Team</a>
          </div>
        </div>
      </div>
    </main>

    <!-- =================== top banner ewnd======================= -->

    <!--======================== what we do =============================  -->

    <div class="what-we-do">
      <div class="container">
        <div class="section-header">
          <h2>What We Do</h2>
          <h4>
            We offer tailor-made options to students with end-to-end assistance
            for admissions.
          </h4>
          <p style="max-width: 100%">
            We understand their requirements and ambitions intently so they
            receive the best guidance. Education 2 Successes is a one-stop
            destination with on ground and cloud presence for all its services.
            We ensure students also get online access to updated program
            information, applications status, and manage their profile.
          </p>
        </div>

        <div class="what-we-do-content grid-4">
          <div class="what-we-do-box">
            <div class="what-we-do-box-icon">
              <i class="fa-solid fa-filter"></i>
            </div>
            <h3>Range of Filters</h3>
            <p>
              Program and institute search made easy with extensive filters for
              eligibility, tuition fee, field of interest, choice of region and
              more
            </p>
          </div>
          <div class="what-we-do-box">
            <div class="what-we-do-box-icon">
              <i class="fa-regular fa-square-check"></i>
            </div>
            <h3>Range of Filters</h3>
            <p>
              Program and institute search made easy with extensive filters for
              eligibility, tuition fee, field of interest, choice of region and
              more
            </p>
          </div>
          <div class="what-we-do-box">
            <div class="what-we-do-box-icon">
              <i class="fa-solid fa-headphones-simple"></i>
            </div>
            <h3>Range of Filters</h3>
            <p>
              Program and institute search made easy with extensive filters for
              eligibility, tuition fee, field of interest, choice of region and
              more
            </p>
          </div>
          <div class="what-we-do-box">
            <div class="what-we-do-box-icon">
              <i class="fa-regular fa-lightbulb"></i>
            </div>
            <h3>Range of Filters</h3>
            <p>
              Program and institute search made easy with extensive filters for
              eligibility, tuition fee, field of interest, choice of region and
              more
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--======================== what we do end=============================  -->

    <!-- ====================== leader ship================================ -->

    <div class="leadership">
      <div class="container">
        <div class="section-header">
          <h2>Our Leadership</h2>
          <p class="mx-0">Leading ideas to action</p>
        </div>

        <div class="leadership-content grid-4">
          <div class="leadership-content-box">
            <img src="img/big-profile.png" alt="img" />
            <h3>Mohammad Ismail Khan</h3>
            <small>Position Name Here</small>
            <ul class="leader-ship-social">
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #000"
                  ><i class="fa-brands fa-x-twitter"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #8d134b"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="leadership-content-box">
            <img src="img/big-profile.png" alt="img" />
            <h3>Mohammad Ismail Khan</h3>
            <small>Position Name Here</small>
            <ul class="leader-ship-social">
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #000"
                  ><i class="fa-brands fa-x-twitter"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #8d134b"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="leadership-content-box">
            <img src="img/big-profile.png" alt="img" />
            <h3>Mohammad Ismail Khan</h3>
            <small>Position Name Here</small>
            <ul class="leader-ship-social">
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #000"
                  ><i class="fa-brands fa-x-twitter"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #8d134b"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="leadership-content-box">
            <img src="img/big-profile.png" alt="img" />
            <h3>Mohammad Ismail Khan</h3>
            <small>Position Name Here</small>
            <ul class="leader-ship-social">
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #118cd1"
                  ><i class="fa-brands fa-linkedin-in"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #000"
                  ><i class="fa-brands fa-x-twitter"></i
                ></a>
              </li>
              <li>
                <a href="#" style="--l-color: #8d134b"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- ====================== leader ship edn================================ -->

    <div class="simple-grid">
      <div class="container">
        <div class="simple-grid-content grid-2">
          <div class="simple-grid-content-img">
            <img src="img/Rectangle 292.png" alt="img" />
          </div>
          <div class="simple-grid-content-text">
            <h3>Our Infrastructure</h3>
            <p>
              Study Canada is providing all services pertaining to your
              immigration and student visa needs at all its branches. Our
              infrastructures are embedded with the modernized equipment
              required to serve the clients with a feel of comfort and help them
              to grow in a better way. Our meticulous behavior and disciplined
              work culture support people from all anges of interest and
              experience and grant them an enjoyable and stimulating spirit. We
              not just value the dreams of our clients, in fact, we celebrate
              them. Our execution of motivational activities and events in a
              variety of disciplines is powerful to give wings to young talents
              to fly to a new world.
            </p>

            <div class="simple-grid-content-rate">
              <div class="simple-grid-content-rate-box">
                <h5>20k+</h5>
                <h6>
                  STUDENT <br />
                  COUNSELED
                </h6>
              </div>
              <div class="simple-grid-content-rate-box">
                <h5>20k+</h5>
                <h6>
                  STUDENT <br />
                  COUNSELED
                </h6>
              </div>
              <div class="simple-grid-content-rate-box">
                <h5>20k+</h5>
                <h6>
                  STUDENT <br />
                  COUNSELED
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===================== way think ============================== -->

    <div class="way-think">
      <div class="container">
        <div class="section-header">
          <h2>Our Way of Thinking</h2>
          <p class="mx-0 mw-100">
            We are committed to the seekers who have a dream of immigrating to
            an overseas country or pursuing education over there. The
            appropriate and suitable aptitude of our student visa and
            immigration consultant team is promising to encourage the talented
            youths to cross the borders of their home country and explore a
            future overseas.
          </p>
        </div>

        <div class="way-think-content">
          <div class="way-think-box">
            <i class="fa-solid fa-bullseye"></i>
            <h3>Our Aim</h3>
            <p>
              Our aim is to present the highest-quality immigration, student
              visa, and coaching services and help the aspirants to attain an
              immense level of satisfaction while seeking to realize their
              overseas dream.
            </p>
          </div>
          <div class="way-think-box">
            <i class="fa-solid fa-gem"></i>
            <h3>Our Goal</h3>
            <p>
              Our goal is to become the largest immigration and student visa
              consultancy not only in Dhaka but across Bangladesh.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- ===================== way think  end============================== -->

    <div class="simple-grid">
      <div class="container">
        <div class="simple-grid-content grid-2">
          <div class="simple-grid-content-img">
            <img src="img/Rectangle 292.png" alt="img" />
          </div>
          <div class="simple-grid-content-text">
            <h3>Our <span class="color-main">Branches</span></h3>
            <p>
              We have branches in almost all major parts of Dhaka. Continuous
              efforts, sincere work and dedicated vision of our ambitious team
              have helped us to establish ourselves in Sylhet, Chittagong city.
              With a core focus on providing assured quality services, we strive
              to serve the best immigration, student visa and coaching services
              close to patrons and help them reach their needs and aspirations
              easily.
            </p>

            <div class="simple-grid-loction">
              <h4>Current <span class="color-main">Location</span></h4>
              <div class="simple-grid-loction-content">
                <div class="simple-grid-loction-box">
                  <i class="fa-solid fa-location-dot"></i>
                  <span>Dhaka</span>
                </div>
                <div class="simple-grid-loction-box">
                  <i class="fa-solid fa-location-dot"></i>
                  <span>Chittagong</span>
                </div>
                <div class="simple-grid-loction-box">
                  <i class="fa-solid fa-location-dot"></i>
                  <span>Sylhet</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================ home team -=========================== -->

    <div class="home-team">
      <div class="container">
        <div class="section-header">
          <h2>Meet Our Professional Team</h2>
        </div>
        <div class="home-team-content grid-4">
        <?php 
    
          $obj->select('team', '*', null, null, null, null);
          $result = $obj->getResult();

            foreach ($result as $row) {
            ?>
        <div class="home-team-box">
            <div class="home-team-img">
              <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="" />
            </div>
            <div class="home-team-text">
              <h4><?php echo $row['name']; ?></h4>
              <small><?php echo $row['description']; ?></small>
              <a href="#">Read More <i class="fa-solid fa-arrow-right"></i> </a>
            </div>
          </div>

          <?php } ?>

         </div>
      </div>
    </div>

    <!-- ================ home team end-=========================== -->

    <!-- ======================= home review ======================== -->

    <div class="home-review">
      <div class="container">
        <div
          class="section-header d-flex justify-content-between align-items-center"
        >
          <div>
            <h2>What Our Client Say’s</h2>
          </div>
          <div class="destination-control" id="review-control">
            <div class="control-left" id="hr-left">
              <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="control-right" id="hr-right">
              <i class="fa-solid fa-chevron-right"></i>
            </div>
          </div>
        </div>

        <div class="home-review-content">
        <?php 
    
    $obj->select('review', '*', null, null, null, null);
    $result = $obj->getResult();
   

      foreach ($result as $row) {
      ?>

          <div class="home-review-slide">
            <div class="home-review-box"> 
              <div class="review-star">

              <?php
               $start = 1;
                while ($start <= 5) {
                  if($row['stars'] < $start){
                    ?>
                        <i class="fa-regular fa-star"></i>
                    <?php
                  }else{
                    ?>
                      <i class="fa-solid fa-star"></i>
                    <?php
                  }
                  $start++;
                }
              ?> 
              </div>
                <p><?php echo $row['description'];?></p>
              <div class="home-review-box-profile d-flex align-items-center">
                <div class="home-review-box-profile-left">
                  <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="img" />
                </div>
                <div class="home-review-box-profile-right">
                  <h5><?php echo $row['name'];?></h5>
                  <small><?php echo $row['date'];?></small>
                </div>
              </div>
            </div>
          </div>
<?php }?>

          </div>
        </div>
      </div>
    </div>

    <!-- ======================= home review end======================== -->

    <!-- ====================== home partner ========================= -->

    <div class="home-partner">
      <div class="container">
        <div
          class="section-header d-flex justify-content-between align-items-center"
        >
          <h2>Partnership</h2>

          <div class="partner-control">
            <div class="partner-control-left">
              <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="partner-control-right">
              <i class="fa-solid fa-chevron-right"></i>
            </div>
          </div>
        </div>

        <div class="home-partner-content">
                <?php 
                $obj->select('partner_admission', '*', null, null, null, null);
                $result = $obj->getResult();
                $first = true;
                foreach ($result as $row) {
                ?>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="img" />
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- ====================== home partner end========================= -->

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
      });
    </script>
  </body>
</html>
