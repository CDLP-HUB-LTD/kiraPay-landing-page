<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
require_once $document_root . "/includes/all_includes.php";

$android_link = $settings_instance->setting('android_link');
$ios_link = $settings_instance->setting('ios_link');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?=$_SESSION['webpath']; ?>/" target="_self">
<!-- PWA Meta Tags -->
<meta name="theme-color" content="#02A39F">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="KiraPay">
<meta name="mobile-web-app-capable" content="yes">
<meta name="description" content="Nigeria's Top Bill Payment platform: Unlimited Possibilities, One Click">

<!-- PWA Manifest -->
<link rel="manifest" href="manifest.json">

<!-- Apple Touch Icons -->
<link rel="apple-touch-icon" href="img/LogoIcon.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/LogoIcon.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/LogoIcon.png">
<link rel="apple-touch-icon" sizes="167x167" href="img/LogoIcon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="shortcut icon" href="img/LogoIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src="https://kit.fontawesome.com/2cb29d167e.js" crossorigin="anonymous"></script>
    <title>KiraPay </title>
</head>
<body>
    <header class="header">
        <!-- <a href="<?=$whatsappLink;?>" class="float" target="_blank">
          <i class="fa-brands fa-whatsapp my-float"></i>
        </a> -->
        <nav>
          <a href="#hero"><img src="img/kiraLogo.png" alt="logo" class="logo"></a>
          
          <ul class="nav-list">
            <li class="nav-item"><a href="//<?=SITE;?>/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="//<?=SITE;?>/#service" class="nav-link">Our Services</a></li>
            <li class="nav-item"><a href="//<?=SITE;?>/#testimonial" class="nav-link">Testimonials</a></li>
            <li class="nav-item"><a href="//<?=SITE;?>/#faq" class="nav-link">FAQs</a></li>
          </ul>
          <div class="nav-cta">
            <a href="/v/login" class="link">Login</a>
            <a href="/v/register" class="link active">Sign Up</a>
          </div>

          <div class="openMenu"><img src="img/menu.png" alt=""></i></div>
          <!-- <div class="openMenu"><i class="fa fa-bars"></i></div> -->
          <ul class="menu-list">
            <li><a href="//<?=SITE;?>/#service" class="linkk">Services</a></li>
            <li><a href="//<?=SITE;?>/#price" class="linkk">Pricing</a></li>
            <li><a href="//<?=SITE;?>/#about" class="linkk">About us</a></li>
            <li><a href="//<?=SITE;?>/#faq" class="linkk">FAQ</a></li>
            <div class="cta">
              <a href="/v/login" class="login">Login</a>
              <a href="/v/register" class="login act">Register</a>              
            </div>

            <!-- <div class="closeMenu"><i class="fa fa-times"></i></div> -->
            </div>
          </ul>
        </nav>

          <!-- <div class="button">
            <a href="/v/login" class="link">Login</a>
            <a href="/v/register" class="link active">Sign Up</a>
          </div> -->

          <!-- mobile view -->

        </nav>





        <div class="hero" id="home">
          <div class="hero-text">
            <h1  data-aos="fade-up"><span>Budget</span>-Friendly <br>
              <span>Data</span> Available <span>24/7!</span>
            </h1>
            <p  data-aos="fade-up" data-aos-delay="400">Nigeria’s Top <span>Bill Payment</span> <br> platform: <span>Unlimited </span>Possibilities, <br> <span>One Click</span></p>

            <a href="/v/register"   data-aos="fade-up" data-aos-delay="600"><button class="hero-btn">Get Started Now</button></a>
          </div>

          <div class="hero-tabs_container">
            <img src="img/service.png" alt="">
          </div>
        </div>
      </header>

      <section id="enjoy">
        <div class="enjoy-img-container">
          <img src="img/enjoyImg.png" alt="">
        </div>
        <div class="enjoy-desc">
          <h1>
            Enjoy Discounted  Rates on Data, Airtime and Bills.
          </h1>

          <p>KIRAPAY- your go-to platform for staying connected and managing bill payment with ease.</p>
          <a href="/v/register" class="link active"><button class="enjoy-btn">Get Started Now</button></a>

        </div>

      </section>

      <section id="partner">
        <div class="trust">
          <!-- <h2 class="head-h2"data-aos="fade-down" data-aos-delay="400">Our<span class="orange"> Partners</span></h2> -->
          <div class="slider">
            <div class="slider-track">
              <div class="slide">
                <img src="img/mtn.png">
              </div>
              <div class="slide">
                <img src="img/glo.png">
              </div>
              <div class="slide">
                <img src="img/airtel.png">
              </div>
              <div class="slide">
                <img src="img/9mobile.png">
              </div>
              <div class="slide">
                <img src="img/cool.png">
              </div>
              <div class="slide">
                <img src="img/ipnx.png">
              </div>
              <div class="slide">
                <img src="img/dstv.png">
              </div>
              <div class="slide">
                <img src="img/gotv.png">
              </div>
              <div class="slide">
                <img src="img/aedc.png">
              </div>
  
              <!-- repeat -->
              <div class="slide">
                <img src="img/mtn.png">
              </div>
              <div class="slide">
                <img src="img/glo.png">
              </div>
              <div class="slide">
                <img src="img/airtel.png">
              </div>
              <div class="slide">
                <img src="img/9mobile.png">
              </div>
              <div class="slide">
                <img src="img/cool.png">
              </div>
              <div class="slide">
                <img src="img/ipnx.png">
              </div>
              <div class="slide">
                <img src="img/dstv.png">
              </div>
              <div class="slide">
                <img src="img/gotv.png">
              </div>
              <div class="slide">
                <img src="img/aedc.png">
              </div>
            </div>
          </div>
          <div class="slider2">
            <div class="slider-track">
              <div class="slide">
                <img src="img/mtn.png">
              </div>
              <div class="slide">
                <img src="img/glo.png">
              </div>
              <div class="slide">
                <img src="img/airtel.png">
              </div>
              <div class="slide">
                <img src="img/9mobile.png">
              </div>
              <div class="slide">
                <img src="img/cool.png">
              </div>
              <div class="slide">
                <img src="img/ipnx.png">
              </div>
              <div class="slide">
                <img src="img/dstv.png">
              </div>
              <div class="slide">
                <img src="img/gotv.png">
              </div>
              <div class="slide">
                <img src="img/aedc.png">
              </div>
  
              <!-- repeat -->
              <div class="slide">
                <img src="img/mtn.png">
              </div>
              <div class="slide">
                <img src="img/glo.png">
              </div>
              <div class="slide">
                <img src="img/airtel.png">
              </div>
              <div class="slide">
                <img src="img/9mobile.png">
              </div>
              <div class="slide">
                <img src="img/cool.png">
              </div>
              <div class="slide">
                <img src="img/ipnx.png">
              </div>
              <div class="slide">
                <img src="img/dstv.png">
              </div>
              <div class="slide">
                <img src="img/gotv.png">
              </div>
              <div class="slide">
                <img src="img/aedc.png">
              </div>
            </div>
          </div>
        </div>
      </section>


      <section id="download">
        <img class="download-vector" src="img/downloadVector.png" alt="">
        <div class="download-img-container">
          <img src="img/downloadPhone.png" alt="">
        </div>
        <div class="download-desc">
          <h1>
            Download the
            Kirapay Mobile App
          </h1>

          <p>Buy airtime and data; pay electricity, water, cable TV subscription, government bills and more without hassle. </p>
          <div class="play">
            <a target="_blank" href="<?=$android_link;?>"><img src="img/play.png"></a>
            <a target="_blank" href="<?=$ios_link;?>"><img src="img/app.png"></a>
           </div>

        </div>

      </section>


      <section id="testimonial" class="container">

        <h1>Testimonials</h1>
        <p>WHAT OUR CUSTOMERS ARE SAYING</p>

        <div class="test-tab-container">
          <div class="test-tab">
            <h3>Umar Ibrahim</h3>
            <p>Best platform for reselling of vtu service i have ever seen. Thumbs up for them for their great services , I recommend this platform it's fast.</p>
          </div>
          <div class="test-tab">
            <h3>Hikmah Ibrahim</h3>
            <p>I love the quick response to issues. We might just get along well. So far so good. There's no star here but I give</p>
          </div>
          <div class="test-tab">
            <h3>Aminat Musa</h3>
            <p>Best platform for reselling of vtu service i have ever seen. Thumbs up for them for their great services , I recommend this platform it's fast.</p>
          </div>
          <div class="test-tab">
            <h3>Danjuma Kano</h3>
            <p>I love the quick response to issues. We might just get along well. So far so good. There's no star here but I give</p>
          </div>
          <div class="test-tab">
            <h3>Ismael Babangida</h3>
            <p>Best platform for reselling of vtu service i have ever seen. Thumbs up for them for their great services , I recommend this platform it's fast.</p>
          </div>
          <div class="test-tab">
            <h3>Umar Ibrahim</h3>
            <p>Best platform for reselling of vtu service i have ever seen. Thumbs up for them for their great services , I recommend this platform it's fast.</p>
          </div>
        </div>
      </section>

      <section id="refer">
        <div class="refer-img-container">
          <img src="img/blackmen.png" alt="">
        </div>
        <div class="refer-desc">
          <p><span style="color: #0F5A5F;">Refer</span> to your <span>Friends</span> <br>and Families and earn <br>on Every <span>Transaction</span></p>
          <a href="/v/register" class="link active"><button class="hero-btn">Get Started Now</button></a>

        </div>

      </section>

      <section id="faq">
        <div class="faq-container">
          <h2 class="faq-container-h2 head-h2" data-aos="fade-up">Frequently Asked Questions</h2>
          <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class="accordion-item"  data-aos="fade-up" data-aos-delay="150">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Which button between SIGN UP and LOGIN will I click to get started? 
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  Kindly click on <a href="/v/register">Sign up</a> to <a href="/v/register">GET STARTED</a> and <a href="/v/login">login</a> button to access your dashboard after activating your
                  account.
  
                </div>
              </div>
            </div>
            <div class="accordion-item"  data-aos="fade-up" data-aos-delay="250">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseTwo">
                  How secure is my transaction history and can I access them anytime? 
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                Your transaction history is 100% secure with Hazaabu. You can access your transaction details anytime, ensuring you stay informed and in control.
  
                </div>
              </div>
            </div>
            <div class="accordion-item"  data-aos="fade-up" data-aos-delay="350">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseThree">
                  How do I buy airtime, data or pay my bills?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                Once you register and activate your account, simply log in to your dashboard. Locate the Services section to purchase airtime, data, or pay your bills with ease..
                </div>
              </div>
            </div>
            <div class="accordion-item"  data-aos="fade-up" data-aos-delay="450">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseFour">
                  What do I do after registration?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                After registering, you need to fund your wallet to perform successful transactions. Once your wallet is funded, you can start using all our services.
  
                </div>
              </div>
            </div>
          </div>
          <p class="faq-review">Get more questions? We’ve got you covered. Contact Us on <?= $website_details['reseller_phone'];?>!
          </p>
        </div>
      </section>



    <footer>
      
      <div class="footer-box"  data-aos="fade-up" data-aos-delay="150">
        <ul>
          <h3>Contact</h3>
          <li>KiraPay Solution Limited <br><a style="color: #02A39F;" href="//<?=SITE;?>">support@kirapay.ng </a></li>
          <li style="margin: 2rem 0;"><a href="//<?=SITE;?>">Address: SF 20, Anafaara Plaza, <br>
            1st Avenue, Gwarimpa, Abuja.</a></li>
          <li><a style="text-decoration: underline;" href="">Phone: 08061155907</a></li>
        </ul>

        <div class="footer-about">
          <h3>Connect with us</h3>
          <ul style="margin: 2rem auto;">
            
            <li >              <a target="_blank" href="<?=$android_link;?>"><img src="img/Link - instagram page.png"></a></li>
            <li>
            <li>              <a target="_blank" href="<?=$android_link;?>"><img src="img/Link - twitter page.png"></a></li>
            <li>
            <li>              <a target="_blank" href="<?=$android_link;?>"><img src="img/Link - facebook page.png"></a></li>
            <li>
            <li>              <a target="_blank" href="<?=$android_link;?>"><img src="img/Link - linkedin page.png"></a></li>
            <li>
          </ul>
            <div class="play">
              <a target="_blank" href="<?=$android_link;?>"><img src="img/googlestore.svg.png"></a>
              <a target="_blank" href="<?=$ios_link;?>"><img src="img/Link - apple app store remita page.png"></a>
             </div>
        </div>

      </div>
      <div class="copy">
        <p><span style="font-weight: bold;">Privacy Policy | Terms & Conditions</span></p>
      </div>
    </footer>

<!-- PWA Install Button -->
<button id="pwaInstallBtn" class="pwa-install-button">
  <i class="fa-solid fa-download"></i>
  <span>Install App</span>
</button>

      <script src="index.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="main.js"></script>
<!-- PWA Registration & Install Script -->
<script>
  // Register Service Worker
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js')
        .then(registration => {
          console.log('Service Worker registered successfully:', registration.scope);
        })
        .catch(error => {
          console.log('Service Worker registration failed:', error);
        });
    });
  }

  // PWA Install Prompt Handler
  let deferredPrompt;
  const installBtn = document.getElementById('pwaInstallBtn');

  // Listen for beforeinstallprompt event
  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent the mini-infobar from appearing
    e.preventDefault();
    // Save the event for later use
    deferredPrompt = e;
    // Show the install button
    if (installBtn) {
      installBtn.style.display = 'flex';
    }
    console.log('PWA install prompt is available');
  });

  // Handle install button click
  if (installBtn) {
    installBtn.addEventListener('click', async () => {
      if (!deferredPrompt) {
        console.log('Install prompt not available');
        return;
      }
      
      // Show the install prompt
      deferredPrompt.prompt();
      
      // Wait for the user's response
      const { outcome } = await deferredPrompt.userChoice;
      console.log(`User response to install prompt: ${outcome}`);
      
      // Clear the deferredPrompt
      deferredPrompt = null;
      
      // Hide the install button
      installBtn.style.display = 'none';
    });
  }

  // Track when PWA is installed
  window.addEventListener('appinstalled', () => {
    console.log('PWA was installed successfully');
    deferredPrompt = null;
    if (installBtn) {
      installBtn.style.display = 'none';
    }
  });

  // Check if already running in standalone mode
  if (window.matchMedia('(display-mode: standalone)').matches) {
    console.log('App is already running in standalone mode');
    if (installBtn) {
      installBtn.style.display = 'none';
    }
  }
</script>
    </body>
</html>
