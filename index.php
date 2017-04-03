<?php include('perch/runtime.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
      <div class="top-bar" data-sticky-container data-margin-top="0">
        <div class="row">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text"><?php perch_content('Site name'); ?></li>
              <li class="has-submenu">
                <a href="#0">About Us</a>
                <ul class="submenu menu vertical" data-submenu>
                  <li><a href="#0">One</a></li>
                  <li><a href="#0">Two</a></li>
                  <li><a href="#0">Three</a></li>
                </ul>
              </li>
              <li><a href="#0">Join Us</a></li>
              <li><a href="#0">Students</a></li>
              <li><a href="#0">Parents</a></li>
              <li><a href="#0">Sixth Form</a></li>
              <li><a href="#0">Results</a></li>
              <li><a href="#0">Enrichment</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li><input type="search" placeholder="Search"></li>
              <li><button type="button" class="button">Search</button></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
          <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
          <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
          <li class="orbit-slide">
            <div>
              <img src="images/hero_image.jpg" alt="">
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <img src="images/_DSC1986.jpg" alt="">
            </div>
          </li>
          <li class="orbit-slide">
            <div>
                <img src="images/_DSC1996.jpg" alt="">
            </div>
          </li>
          <li class="orbit-slide">
            <div>
              <img src="images/_DSC2018.jpg" alt="">
            </div>
          </li>
        </ul>

       <div class="bottom-bar">
         <div class="row">
           <div class="large-12 column">
             Text
           </div>
         </div>
       </div>
     </div>
     <div class="scrolldown" data-magellan data-bar-offset>
        <a href="#welcome">
          <p>Explore Our School</p>
          <i></i>
        </a>
      </div>

    <section id="welcome" data-magellan-target="welcome">
      <div class="row">
        <div class="large-7 columns">
          <h1><?php perch_content('Welcome title'); ?></h1>
          <p>We are a split site, rural, mixed 11-18 comprehensive converter academy with approximately 1400 students, including over 350 students in our Sixth Form Centre at Green Lane.</p>
          <p>
            Our vision at Beacon Academy is to provide the best possible education for all of our students and to become an exceptional educational establishment,
            locally and nationally. We do this by relentlessly developing a culture that is aspirational and ambitious for excellence in all we do. We achieve this
            by offering a broad and balanced curriculum within a disciplined standards agenda. This enables all staff and students to foster exceptional relationships.
            Our environment is consistently calm, safe and orderly enabling teachers to teach and students to learn.
          </p>
        </div>
        <div class="large-5 columns">

        </div>
      </div>
    </section>
    <section class="alt">
      <div class="row">
        <div class="large-7 columns">

          <p>We are a split site, rural, mixed 11-18 comprehensive converter academy with approximately 1400 students, including over 350 students in our Sixth Form Centre at Green Lane.</p>
          <p>
            Our vision at Beacon Academy is to provide the best possible education for all of our students and to become an exceptional educational establishment,
            locally and nationally. We do this by relentlessly developing a culture that is aspirational and ambitious for excellence in all we do. We achieve this
            by offering a broad and balanced curriculum within a disciplined standards agenda. This enables all staff and students to foster exceptional relationships.
            Our environment is consistently calm, safe and orderly enabling teachers to teach and students to learn.
          </p>
        </div>
        <div class="large-5 columns">

        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="large-7 columns">
          <h1>Welcome to Beacon Academy</h1>
          <p>We are a split site, rural, mixed 11-18 comprehensive converter academy with approximately 1400 students, including over 350 students in our Sixth Form Centre at Green Lane.</p>
          <p>
            Our vision at Beacon Academy is to provide the best possible education for all of our students and to become an exceptional educational establishment,
            locally and nationally. We do this by relentlessly developing a culture that is aspirational and ambitious for excellence in all we do. We achieve this
            by offering a broad and balanced curriculum within a disciplined standards agenda. This enables all staff and students to foster exceptional relationships.
            Our environment is consistently calm, safe and orderly enabling teachers to teach and students to learn.
          </p>
        </div>
        <div class="large-5 columns">

        </div>
      </div>
    </section>

    <script src="beacon_theme/bower_components/jquery/dist/jquery.js"></script>
    <script src="beacon_theme/bower_components/what-input/dist/what-input.js"></script>
    <script src="beacon_theme/bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="beacon_theme/js/app.js"></script>
  </body>
</html>
