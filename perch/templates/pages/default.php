<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_content_create('Page Content', array(
    'template' => 'blocks.html',
));
?>
</div>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<title><?php perch_pages_title(); ?></title>
	<?php perch_page_attributes(); ?>
</head>
<body>
  <?php perch_layout('global.topbar'); ?>
  <section class="hero" style="background: url(images/_DSC2193.jpg) no-repeat; background-size: cover;">

  </section>
  <div class="row">
    <div class="large-3 columns">


    <?php perch_pages_navigation(array(
      'from-path'  => '/about-us',
      'from-level' => 2


  )); ?>
    </div>
    <div class="large-9 columns">
      <?php perch_pages_breadcrumbs(); ?>
      <div class="row">
        <div class="columns large-12">
          <h1><?php perch_pages_title(); ?></h1>
        </div>
      </div>

      <?php
        perch_content_custom('Page Content', array());
      ?>
  </div>

    <script src="beacon_theme/bower_components/jquery/dist/jquery.js"></script>
    <script src="beacon_theme/bower_components/what-input/dist/what-input.js"></script>
    <script src="beacon_theme/bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="beacon_theme/js/app.js"></script>
</body>
</html>
