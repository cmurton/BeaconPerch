<div data-sticky-container >
  <div class="top-bar" data-sticky data-options="marginTop:0;" style="width:100%">
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
</div>
