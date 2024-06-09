<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Banking</title>

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

    <div class="simple-grid">
      <div class="container">
        <div class="simple-grid-content grid-2">
          <div class="simple-grid-content-img">
            <img src="img/Rectangle 292.png" alt="img" />
          </div>

          <div class="simple-grid-content-text">
            <h3 style="font-size: var(--big-font)">
              Easy Money Transfer for International Students
            </h3>
            <p>
              Money transfers are a necessity for most international students.
              But there are so many options, it can be confusing. If you don’t
              want to worry about direct bank transfers with high exchange
              rates, or if you don’t want to pay by credit card, we have the
              solution.
            </p>

            <h4 class="text-dark my-3" style="font-size: var(--normal-font)">
              Why do I need it?
            </h4>
            <p>
              Money transfers are a fast and convenient way to securely pay for
              tuition, living expenses, and accommodation. Plus all the fun
              stuff, like travel and entertainment!
            </p>
            <p>
              For your study expenses, funds from your home country can be paid
              in local currency and transferred in your destination country
              currency to each recipient, such as your university or
              accommodation provider.
            </p>
            <p>
              For some countries, your living expenses can be transferred
              directly into your bank account – in your local currency. You can
              withdraw your money at ATMs when you reach.
            </p>

            <h4 class="text-dark my-3" style="font-size: var(--normal-font)">
              Tell me more
            </h4>
            <p>
              We’ve teamed up with Flywire to make it easy for you to set up
              your money transfer. It’s quick and easy to get started online.
              Your IDP counsellor can guide on how to set up your money
              transfers.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="faq-sample-grid">
      <div class="container">
        <div class="section-header">
          <h2>Use Flywire with us in Canada</h2>
          <p class="mx-0 mw-100">
            Trusted by millions of students around the globe, Flywire is the
            safest, most convenient way to make your education payment to more
            than 5,000 institutions. Flywire is a different type of payment
            partner. We have been solving complex payment problems for students
            and education institutions since 2011. Today, we continue to remove
            boundaries by connecting millions of students with thousands of
            institutions to improve the payment experience worldwide.
          </p>
        </div>
        <div class="faq-sample-grid-content grid-2 align-items-baseline">
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
          <div class="faq-sample-grid-box">
            <h3>What is Simplii Financial?</h3>
            <p>
              Simplii Financial™, a division of CIBC, is a digital banking brand
              offering great rates and free daily banking. Bank securely
              whenever and wherever you like with 24/7 access to online, mobile
              and telephone banking as well as access to one of the largest
              national ATM networks in Canada through CIBC. Simplified banking
              is our promise to you! With Simplii Financial, you get chequing,
              savings, mortgage, borrowing, investment and credit cards all in
              one simple place.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="demo-text">
      <div class="container">
        <div class="section-header pb-4">
          <h2>FAQ on Using Flywire with ..</h2>
        </div>

        <div class="sample-text-box">
          <h3>Can a family member, friend, or third party pay on my behalf?</h3>
          <p>
            Definitely! Simply include the personal information of the family
            member or friend who will be making your payment in the “Payer
            Information” section during the booking process. If you are paying
            through a third party, you can include the information of the person
            who instructs them to transfer the funds. The sender or the payer is
            the person who holds the account where the money will be sent from.
            If a family member, friend, or third party is paying for you, the
            name you include in the request must be the one stated on their bank
            records or card. A mismatch between the sender name provided to us
            and the account holder name stated in the bank records may cause
            delays in the processing of your payment. If you are paying by loan
            from your bank in India, you can either provide the loan
            signer/borrower details or include your loan provider details on the
            sender information; both are equally acceptable.
          </p>
        </div>
        <div class="sample-text-box">
          <h3>Can a family member, friend, or third party pay on my behalf?</h3>
          <p>
            Definitely! Simply include the personal information of the family
            member or friend who will be making your payment in the “Payer
            Information” section during the booking process. If you are paying
            through a third party, you can include the information of the person
            who instructs them to transfer the funds. The sender or the payer is
            the person who holds the account where the money will be sent from.
            If a family member, friend, or third party is paying for you, the
            name you include in the request must be the one stated on their bank
            records or card. A mismatch between the sender name provided to us
            and the account holder name stated in the bank records may cause
            delays in the processing of your payment. If you are paying by loan
            from your bank in India, you can either provide the loan
            signer/borrower details or include your loan provider details on the
            sender information; both are equally acceptable.
          </p>
        </div>
        <div class="sample-text-box">
          <h3>Can a family member, friend, or third party pay on my behalf?</h3>
          <p>
            Definitely! Simply include the personal information of the family
            member or friend who will be making your payment in the “Payer
            Information” section during the booking process. If you are paying
            through a third party, you can include the information of the person
            who instructs them to transfer the funds. The sender or the payer is
            the person who holds the account where the money will be sent from.
            If a family member, friend, or third party is paying for you, the
            name you include in the request must be the one stated on their bank
            records or card. A mismatch between the sender name provided to us
            and the account holder name stated in the bank records may cause
            delays in the processing of your payment. If you are paying by loan
            from your bank in India, you can either provide the loan
            signer/borrower details or include your loan provider details on the
            sender information; both are equally acceptable.
          </p>
        </div>
        <div class="sample-text-box">
          <h3>Can a family member, friend, or third party pay on my behalf?</h3>
          <p>
            Definitely! Simply include the personal information of the family
            member or friend who will be making your payment in the “Payer
            Information” section during the booking process. If you are paying
            through a third party, you can include the information of the person
            who instructs them to transfer the funds. The sender or the payer is
            the person who holds the account where the money will be sent from.
            If a family member, friend, or third party is paying for you, the
            name you include in the request must be the one stated on their bank
            records or card. A mismatch between the sender name provided to us
            and the account holder name stated in the bank records may cause
            delays in the processing of your payment. If you are paying by loan
            from your bank in India, you can either provide the loan
            signer/borrower details or include your loan provider details on the
            sender information; both are equally acceptable.
          </p>
        </div>
        <div class="sample-text-box">
          <h3>When will my institution receive my payment?</h3>
          <p>
            The time it takes for your payment to reach your institution can
            vary depending on the payment method.
          </p>

          <ul class="list-title-red">
            <li>Bank Transfer</li>
            <p>
              From the moment Flywire receives the funds from your bank, it
              usually takes 2 to 3 business days to process and deliver the
              payment to your institution. After Flywire receives your payment,
              it will automatically be guaranteed to your institution
            </p>
          </ul>
          <ul class="list-title-red">
            <li>Card or other online payment methods</li>
            <p>
              If you have chosen to pay by card or other online payment methods,
              your payment is automatically guaranteed to your institution.
              Typically, funds are delivered within 2 to 3 business days after
              the payment was made.
            </p>
          </ul>
        </div>
        <div class="sample-text-box">
          <h3>Can a family member, friend, or third party pay on my behalf?</h3>
          <p>
            Definitely! Simply include the personal information of the family
            member or friend who will be making your payment in the “Payer
            Information” section during the booking process. If you are paying
            through a third party, you can include the information of the person
            who instructs them to transfer the funds. The sender or the payer is
            the person who holds the account where the money will be sent from.
            If a family member, friend, or third party is paying for you, the
            name you include in the request must be the one stated on their bank
            records or card. A mismatch between the sender name provided to us
            and the account holder name stated in the bank records may cause
            delays in the processing of your payment. If you are paying by loan
            from your bank in India, you can either provide the loan
            signer/borrower details or include your loan provider details on the
            sender information; both are equally acceptable.
          </p>
        </div>
        <div class="sample-text-box">
          <h3>Can a family member, friend, or third party pay on my behalf?</h3>
          <p>
            Definitely! Simply include the personal information of the family
            member or friend who will be making your payment in the “Payer
            Information” section during the booking process. If you are paying
            through a third party, you can include the information of the person
            who instructs them to transfer the funds. The sender or the payer is
            the person who holds the account where the money will be sent from.
            If a family member, friend, or third party is paying for you, the
            name you include in the request must be the one stated on their bank
            records or card. A mismatch between the sender name provided to us
            and the account holder name stated in the bank records may cause
            delays in the processing of your payment. If you are paying by loan
            from your bank in India, you can either provide the loan
            signer/borrower details or include your loan provider details on the
            sender information; both are equally acceptable.
          </p>
        </div>
      </div>
    </div>

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
