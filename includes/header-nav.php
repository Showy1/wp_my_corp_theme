<div id="top">
  <i class="fas fa-chevron-up fa-2x" id="top-icon"></i>
</div>
<header>
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo">
    <i class="fas fa-bicycle fa-2x"></i>
    <h1>レナクル</h1>
    <h4><span>新宿の</span>レンタルサイクル<span>・</span><br>中古自転車販売</h4>
  </a>
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
