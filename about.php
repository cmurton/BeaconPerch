<?php include('perch/runtime.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beacon Academy</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
      <div class="top-bar">
        <div class="row">
          <div class="top-bar-title">Beacon Academy</div>
          <div class="top-bar-left">
            <?php
                perch_pages_navigation(array(
                    'from-path' => '/about',
                    'from-level' => 1,
                    'levels'    => 3,
                    'template' => 'topbar.html'
                ));
            ?>
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

    <section id="welcome" data-magellan-target="welcome">
      <div class="row">
        <div class="large-7 columns">
          <h1>About Us</h1>
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
