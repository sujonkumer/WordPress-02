
<header>
      <!-- top area -->
      <div class="top-nav">
        <div class="wrapper custome_wrapper">
          <div class="logo">
            <a href="<?=home_url();?>">
              <!-- your logo image -->
              <img src="<?php bloginfo( 'template_url' );?>/img/logo.png" alt="" />
            </a>
          </div>
          <div class="custom_menu"a style="padding-right: 10px;">
          		<?php
  $args = array(
 'theme_location' => 'header-menu',
 'depth' => 4,
 'container' => '',
 'menu_class'  => 'nav nav-pills',
 'walker'  => new BootstrapNavMenuWalker()
);
wp_nav_menu($args);
?>
          	</div>
          <div class="phone">
          	<p>Call &#45; 008 009 172</p>
          </div>
        </div>
      </div>
      <!-- end top area -->
    </header>