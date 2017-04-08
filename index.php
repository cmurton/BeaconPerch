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
    <?php perch_layout('global.topbar'); ?>
    <?php perch_content("Homepage Slider"); ?>

    <section id="welcome" data-magellan-target="welcome"  >
      <div class="row">
        <div class="large-7 columns">
          <h1></h1>
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
            <?php perch_content_create('News', array(
                'template' => 'content/text.html',
            ));
            ?>
          </p>
        </div>
        <div class="large-5 columns">

        </div>
      </div>
    </section>
    <section>
      <?php perch_content('Test'); ?>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/4.1.1/what-input.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js" integrity="sha256-Nd2xznOkrE9HkrAMi4xWy/hXkQraXioBg9iYsBrcFrs=" crossorigin="anonymous"></script>
    <script src="beacon_theme/js/app.js"></script>
  </body>
</html>
