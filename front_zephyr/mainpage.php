<?php
include "linc.php";
// to count and update the total number of views
$qv="update view set v=v+1 where id=1;";
$qr=mysqli_query($mysqli,$qv);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>ZEPHYR!</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
  

  <body>
    <header class="site-header">
      <div class="header-bar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-10 col-lg-4">
              <h1 class="site-branding flex ">
              <!-- to go to SE website -->
                <a href="https://www.jnu.ac.in/se">School of Engineering,JNU 
                    presents</a>
                
            </div>

            <div class="col-2 col-lg-8">
              <nav class="site-navigation">
                <div class="hamburger-menu d-lg-none">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <!-- .hamburger-menu -->

                <ul>
                <!-- nav bar URLS to go to different pages -->
                  <li><a href="danceindex.php">Dance Events</a></li>
                  <li><a href="musicindex.php">Music Events</a></li>
                  <li><a href="dramaindex.php">Drama Events</a></li>
                  <li><a href="literaryindex.php">Literary Events</a></li>
                  <li><a href="plogin.php">You in ZEPHYR</a></li>
                  <li><a href="#sponsor">SPONSORS</a></li>
                  <li><a href="adminlogin.php">ADMIN</a></li>
                </ul>
              </nav>
              <!-- .site-navigation -->
            </div>
            <!-- .col-12 -->
          </div>
          <!-- .row -->
        </div>
        <!-- container-fluid -->
      </div>
      <!-- header-bar -->
    </header>
    <div id="particles-js"></div>
    <!-- adding particles to make it look better -->
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="col-12 offset-lg-2 col-lg-10">
            <div class="entry-header">
              <h2>Zephyr!</h2>

              <div class="entry-meta-date">
                FIRST TIME EVER
              </div>
              <!-- .entry-meta-date -->
            </div>
            <!-- .entry-header -->
            <div
              class="countdown flex flex-wrap justify-content-between"
              data-date="2018/06/06"
            >
            <!-- COUNTDOWNER -->
              <div class="countdown-holder">
                <div class="dday" id="dday"></div>
                <label>Days</label>
              </div>
              <!-- .countdown-holder -->

              <div class="countdown-holder">
                <div class="dhour" id="dhour"></div>
                <label>Hours</label>
              </div>
              <!-- .countdown-holder -->

              <div class="countdown-holder">
                <div class="dmin" id="dmin"></div>
                <label>Minutes</label>
              </div>
              <!-- .countdown-holder -->

              <div class="countdown-holder">
                <div class="dsec" id="dsec"></div>
                <label>Seconds</label>
              </div>
              <!-- .countdown-holder -->
            </div>
            <!-- .countdown -->
          </div>
          <!-- .col-12 -->
        </div>
        <!-- row -->

        <div class="row">
          <div class="col-12">
            <div class="entry-footer">
              <!-- link to register one in fest -->
              <a href="participantformnew.php" class="btn current"
                >Register youself!!!</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- .container -->
    </div>
    <!-- .hero-content -->

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="lineup-artists-headline">
            <div class="entry-title">
              <p>JUST THE BEST</p>
              <h2>The Lineup Artists-Headliners</h2>
            </div>
            <!-- entry-title -->

            <div class="lineup-artists">
              <div class="lineup-artists-wrap flex flex-wrap">
                <figure class="featured-image">
                  <a href="#">
                    <img src="images/black-chick.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <div class="lineup-artists-description">
                  <div class="lineup-artists-description-container">
                    <div class="entry-title">
                      Jamila Williams
                    </div>
                    <!-- entry-title -->

                    <div class="entry-content">
                      <p>
                        Quisque at erat eu libero consequat tempus. Quisque mole
                        stie convallis tempus. Ut semper purus metus, a euismod
                        sapien sodales ac. Duis viverra eleifend fermentum.
                      </p>
                    </div>
                    <!-- entry-content -->

                    <div class="box-link">
                      <a href=""><img src="images/box.jpg" alt="" /></a>
                    </div>
                    <!-- box-link -->
                  </div>
                  <!-- lineup-artists-description-container -->
                </div>
                <!-- lineup-artists-description -->
              </div>
              <!-- lineup-artists-wrap -->

              <div class="lineup-artists-wrap flex flex-wrap">
                <div class="lineup-artists-description">
                  <figure class="featured-image d-md-none">
                    <a href="#">
                      <img src="images/mathew-kane.jpg" alt="" />
                    </a>
                  </figure>
                  <!-- featured-image -->

                  <div class="lineup-artists-description-container">
                    <div class="entry-title">
                      Sandra Superstar
                    </div>
                    <!-- entry-title -->

                    <div class="entry-content">
                      <p>
                        Quisque at erat eu libero consequat tempus. Quisque mole
                        stie convallis tempus. Ut semper purus metus, a euismod
                        sapien sodales ac. Duis viverra eleifend fermentum.
                      </p>
                    </div>
                    <!-- entry-content -->

                    <div class="box-link">
                      <a href="#"><img src="images/box.jpg" alt="" /></a>
                    </div>
                    <!-- box-link -->
                  </div>
                  <!-- lineup-artists-description-container -->
                </div>
                <!-- lineup-artists-description -->

                <figure class="featured-image d-none d-md-block">
                  <a href="#">
                    <img src="images/mathew-kane.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->
              </div>
              <!-- lineup-artists-wrap -->

              <div class="lineup-artists-wrap flex flex-wrap">
                <figure class="featured-image">
                  <a href="#"> <img src="images/eric-ward.jpg" alt="" /> </a>
                </figure>
                <!-- featured-image -->

                <div class="lineup-artists-description">
                  <div class="lineup-artists-description-container">
                    <div class="entry-title">
                      DJ Crazyhead
                    </div>
                    <!-- entry-title -->

                    <div class="entry-content">
                      <p>
                        Quisque at erat eu libero consequat tempus. Quisque mole
                        stie convallis tempus. Ut semper purus metus, a euismod
                        sapien sodales ac. Duis viverra eleifend fermentum.
                      </p>
                    </div>
                    <!-- entry-content -->

                    <div class="box-link">
                      <a href="#"> <img src="images/box.jpg" alt="" /></a>
                    </div>
                    <!-- box-link -->
                  </div>
                  <!-- lineup-artists-description-container -->
                </div>
                <!-- lineup-artists-description -->
              </div>
              <!-- lineup-artists-wrap -->
            </div>
            <!-- lineup-artists -->
          </div>
          <!-- lineup-artists-headline -->
        </div>
        <!-- col-12 -->
      </div>
      <!-- row -->

      <div class="row">
        <div class="col-12">
          <div class="the-complete-lineup">
            <div class="entry-title">
              <p>JUST THE BEST</p>
              <h2>The Complete Lineup</h2>
            </div>
            <!-- entry-title -->

            <div class="row the-complete-lineup-artists">
              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-1.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>Miska Smith</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-2.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>Hayley Down</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-3.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>The Band Song</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-4.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>Pink Machine</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-5.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>Brasil Band</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-6.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>Mickey</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-7.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>DJ Girl</h2>
              </div>
              <!-- artist-single -->

              <div class="col-6 col-md-4 col-lg-3 artist-single">
                <figure class="featured-image">
                  <a href="#"> <img src="images/image-8.jpg" alt="" /> </a>
                  <a href="#" class="box-link">
                    <img src="images/box.jpg" alt="" />
                  </a>
                </figure>
                <!-- featured-image -->

                <h2>Stan Smith</h2>
              </div>
              <!-- artist-single -->
            </div>
            <!-- the-complete-lineup-artists -->
          </div>
          <!-- the-complete-lineup -->
        </div>
        <!-- col-12 -->
      </div>
      <!-- row -->
<!-- sponsors begin -->
      <div id="sponsor">
      <div class="row">
        <div class="col-12">
          <div class="the-complete-lineup">
            <div class="entry-title" style="margin-bottom: 40px; text-align: center;">
              <p>Diamond</p>
              <h2>SPONSORS</h2>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="images/google.jpg"
                      alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="images/facebook.png"
                      alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="images/tesla.png"
                      alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- entry-title -->
          </div>
          <!-- the-complete-lineup -->
        </div>
        <!-- col-12 -->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="the-complete-lineup">
            <div class="entry-title" style="margin-bottom: 40px; text-align: center;">
              <p>Platinum</p>
              <h2>SPONSORS</h2>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                     class="card-img-top"
                     src="images/microsoft.png"
                     alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                    class="card-img-top"
                     src="images/iphone.png"
                     alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                    class="card-img-top"
                     src="images/adobe.png"
                     alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- entry-title -->
          </div>
          <!-- the-complete-lineup -->
        </div>
        <!-- col-12 -->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="the-complete-lineup">
            <div class="entry-title" style="margin-bottom: 40px; text-align: center;">
              <p>Gold</p>
              <h2>SPONSORS</h2>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                    class="card-img-top"
                     src="images/tcs.jpg"
                     alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                    class="card-img-top"
                     src="images/wipro.jpg"
                     alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img
                    class="card-img-top"
                     src="images/samsung.jpg"
                     alt="Card image cap"
                    />
                    <div class="card-body">
                      <p class="card-text">
                        Some detailed text of sponsor.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- entry-title -->
          </div>
          <!-- the-complete-lineup -->
        </div>
        <!-- col-12 -->
      </div></div>
    </div>
    <!-- container -->
    <!-- sponsors end -->

    <footer class="site-footer">
      <div
        class="footer-cover-title flex justify-content-center align-items-center"
      >
        <h2>ZEPHYR</h2>
      </div>

      <div class="footer-content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="entry-title">
                <a href="#">ZEPHYR</a>
              </div>

              <div class="entry-mail">
                <a href="#">SAYHELLO@zephyr.COM</a>
              </div>

              <div class="copyright-info">
                
                <script>
                  document.write(new Date().getFullYear());
                </script>
                
                <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="mainpage.php" target="_blank">RITIKA and DANESHWARI</a>
              </div>

              <div class="footer-social">
                <ul class="flex justify-content-center align-items-center">
                  <li>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-behance"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/circle-progress.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
    // script for countdown
      // Set the date we're counting down to
      var countDownDate = new Date("July 30, 2020 23:59:59").getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("dday").innerHTML = days;
        document.getElementById("dhour").innerHTML = hours;
        document.getElementById("dmin").innerHTML = minutes;
        document.getElementById("dsec").innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>
    <script>
    // script for particle js
      particlesJS("particles-js", {
        particles: {
          number: { value: 80, density: { enable: true, value_area: 800 } },
          color: { value: "#25ffbf" },
          shape: {
            type: "star",
            stroke: { width: 0, color: "#25ffbf" },
            polygon: { nb_sides: 5 },
            image: { src: "img/github.svg", width: 100, height: 100 },
          },
          opacity: {
            value: 0.7,
            random: false,
            anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
          },
          size: {
            value: 2,
            random: true,
            anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
          },
          line_linked: {
            enable: true,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1,
          },
          move: {
            enable: true,
            speed: 6,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: { enable: false, rotateX: 600, rotateY: 1200 },
          },
        },
        interactivity: {
          detect_on: "canvas",
          events: {
            onhover: { enable: true, mode: "grab" },
            onclick: { enable: true, mode: "push" },
            resize: true,
          },
          modes: {
            grab: { distance: 400, line_linked: { opacity: 1 } },
            bubble: {
              distance: 400,
              size: 40,
              duration: 2,
              opacity: 8,
              speed: 3,
            },
            repulse: { distance: 200, duration: 0.4 },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
          },
        },
        retina_detect: true,
      });
      var count_particles, stats, update;
      stats = new Stats();
      stats.setMode(0);
      stats.domElement.style.position = "absolute";
      stats.domElement.style.left = "0px";
      stats.domElement.style.top = "0px";
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector(".js-count-particles");
      update = function () {
        stats.begin();
        stats.end();
        if (
          window.pJSDom[0].pJS.particles &&
          window.pJSDom[0].pJS.particles.array
        ) {
          count_particles.innerText =
            window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>
  </body>
</html>
