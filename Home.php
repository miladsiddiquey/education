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
    <title>Home</title>

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

    <!-- ================== home service ====================== -->

    <section class="home-service">
      <div class="container">
        <div class="section-header text-center">
          <h2>
            Some of Our Special Services <span class="active">For You</span>
          </h2>
          <p>
            Education To Success has been promised to give international
            students with guidance and assistance in all steps of the Method.
          </p>
        </div>

        <div class="home-service-content">
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
          <div class="home-service-box">
            <h3>Admission Support</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- ================== home service end====================== -->

    <!-- ===================== home destination ==================== -->

    <div class="home-destination">
      <div class="container">
        <div
          class="section-header d-flex justify-content-between align-items-center"
        >
          <div>
            <h2>Choose Your Destination</h2>
            <p class="mx-0">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore.
            </p>
          </div>
          <div class="destination-control" id="destination-control">
            <div class="control-left" id="hd-left">
              <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="control-right" id="hd-right">
              <i class="fa-solid fa-chevron-right"></i>
            </div>
          </div>
        </div>

        <div class="home-destination-content">

          <?php
          $obj->select('destinationpost', '*', null, null, null, null);
          $result = $obj->getResult();

            foreach ($result as $row) {
            ?>
          <div class="home-destination-slide">
            <div class="card-box">
              <div class="card-box-img">
                <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="img" />
              </div>
              <div class="card-box-text">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['paragraph']; ?> </p>
                <a href="./university-page.php">Learn More <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <?php } ?>    
        </div>
      </div>
    </div>

    <!-- ===================== home destination end==================== -->

    <!-- =================== home about ============================= -->

    <div class="home-about">
      <div class="container">
        <div class="home-about-content grid-2">
          <div class="home-about-content-left">
            <img src="img/post2.png" alt="img" />
          </div>
          <div class="home-about-content-right">
            <h2><span class="color-main">About</span> Education 2 Successes</h2>
            <h4>
              How do foreign institutions adopt the education system?
              Bangladesh?
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="./about.php" class="btn-main">View Details</a>
          </div>
        </div>
      </div>
    </div>

    <!-- =================== home about end============================= -->

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

    <!-- ======================= top university ==================== -->

    <div class="top-university">
      <div class="container">
        <div class="section-header text-center">
          <h2>Top Ten Colleges & Universities</h2>
        </div>

        <div class="university-tabs-link">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                College
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-profile"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                university
              </button>
            </li>
            <li cl ass="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-contact"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Province
              </button>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
        <div class="top-university-content grid-3">
       
          <?php 
          $obj->select('allcolleges', '*', null, 'category="college"', null, null); 
          $result = $obj->getResult();

            foreach ($result as $row) {
            ?>
              <div class="card-box">
                <div class="card-box-img">
                  <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="img" />
                </div>
                <div class="card-box-text">
                  <h4><?php echo $row['title']; ?></h4>
                  <p>
                  <?php echo $row['paragraph']; ?>
                  </p>
                  <a href="#"
                    >Learn More <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
          <div
            class="tab-pane fade"
            id="pills-profile"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <div class="top-university-content grid-3">
            <!-- university tab -->
            <?php 
          $obj->select('allcolleges', '*', null, 'category="university"', null, null); 
          $result = $obj->getResult();

            foreach ($result as $row) {
            ?>
              <div class="card-box">
                <div class="card-box-img">
                  <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="img" />
                </div>
                <div class="card-box-text">
                  <h4><?php echo $row['title']; ?></h4>
                  <p>
                  <?php echo $row['paragraph']; ?>
                  </p>
                  <a href="#"
                    >Learn More <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <div class="top-university-content grid-3">
            <!-- province tab -->
            <?php 
          $obj->select('allcolleges', '*', null, 'category="province"', null, null); 
          $result = $obj->getResult();

            foreach ($result as $row) {
            ?>
              <div class="card-box">
                <div class="card-box-img">
                  <img src="<?php echo "./uploade-images/" .$row['image']; ?>" alt="img" />
                </div>
                <div class="card-box-text">
                  <h4><?php echo $row['title']; ?></h4>
                  <p>
                  <?php echo $row['paragraph']; ?>
                  </p>
                  <a href="#"
                    >Learn More <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ======================= top university end==================== -->

    <!-- ==================== admission support ==================== -->

    <div class="admission-support">
      <div class="container">
        <div class="admission-support-content">
          <div class="admission-support-header">
            <h2 class="color-main">Admission Support</h2>
            <p>
              Study Canada Education is a trusted consultancy firm with a
              demonstrated track record of guiding Bangladeshi students through
              the overall admission process and enrollment. We offer the
              following services.
            </p>
          </div>
          <div class="admission-support-body">
            <div class="admission-support-box">
              <h3>Extensive Admissions Knowledge</h3>
              <p>
                Selecting the best university and leading program for
                Bangladeshi students may be alluring. As admissions counsellors,
                we can give each student a wealth of information to assist them
                in selecting the best university for them.
              </p>
            </div>
            <div class="admission-support-box">
              <h3>Step-by-Step Instructions</h3>
              <p>
                Selecting the best university and leading program for
                Bangladeshi students may be alluring. As admissions counsellors,
                we can give each student a wealth of information to assist them
                in selecting the best university for them.
              </p>
            </div>
            <div>
              <a href="./contact.php" class="btn-main">Contact Our Experts</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================== admission support end==================== -->

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
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
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
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
          <div class="partner-box-slide">
            <div class="home-partner-box">
              <img src="img/company.png" alt="img" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ====================== home partner end========================= -->

    <!--================================== home faq ====================  -->

    <div class="home-faq">
      <div class="container">
        <div class="section-header text-center">
          <h2>Frequently Asked Questions (FAQ’s)</h2>
        </div>
        <div class="home-faq-content">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading4">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse4"
                  aria-expanded="false"
                  aria-controls="collapse4"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse4"
                class="accordion-collapse collapse"
                aria-labelledby="heading4"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading5">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse5"
                  aria-expanded="false"
                  aria-controls="collapse6"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse6"
                class="accordion-collapse collapse"
                aria-labelledby="heading6"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading7">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse7"
                  aria-expanded="false"
                  aria-controls="collapse7"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse7"
                class="accordion-collapse collapse"
                aria-labelledby="heading7"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading8">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse8"
                  aria-expanded="false"
                  aria-controls="collapse8"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse8"
                class="accordion-collapse collapse"
                aria-labelledby="heading8"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading9">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse9"
                  aria-expanded="false"
                  aria-controls="collapse9"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse9"
                class="accordion-collapse collapse"
                aria-labelledby="heading9"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading10">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse10"
                  aria-expanded="false"
                  aria-controls="collapse10"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse10"
                class="accordion-collapse collapse"
                aria-labelledby="heading10"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading11">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse11"
                  aria-expanded="false"
                  aria-controls="collapse11"
                >
                  Lorem ipsum is placeholder text ?
                </button>
              </h2>
              <div
                id="collapse11"
                class="accordion-collapse collapse"
                aria-labelledby="heading11"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--================================== home faq end====================  -->

    <!-- ========================= home contact ============================ -->

    <div class="home-contact">
      <div class="container">
        <div class="home-contact-content grid-2">
          <div class="home-contact-left">
            <h2>Write Us</h2>
            <form method="post" action="">
              <div class="form-input">
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Your Name* "
                  required
                />
              </div>
              <div class="form-input">
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Your Email* "
                  required
                />
              </div>
              <div class="form-input">
                <input
                  type="text"
                  name="sub"
                  id="sub"
                  placeholder="Subject* "
                  required
                />
              </div>
              <div class="form-input">
                <textarea
                  name="message"
                  id="message"
                  placeholder="Write Your Message"
                ></textarea>
              </div>

              <button type="submit">Submit</button>
            </form>
          </div>
          <div class="home-contact-right">
            <h2>Contact Information</h2>
            <h4>We are open for any suggestions or just a chat</h4>

            <div class="home-contact-right-box">
              <div class="home-contact-right-box-left">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="home-contact-right-box-right">
                <h5>Address</h5>
                <small>Zindabazar Point, Sylhet City, Bangladesh</small>
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
            <div class="home-contact-right-box">
              <div class="home-contact-right-box-left">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="home-contact-right-box-right">
                <h5>Address</h5>
                <small>Zindabazar Point, Sylhet City, Bangladesh</small>
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
