<a id="menuToggle">MENU <i class="fa fa-bars"></i></a>
<ul id="primary-menu" class="flat-menu main-navigation" role="navigation">
  <?php wp_nav_menu( array( 
    'theme_location'  => 'primary',
    'container'       => false,
    'items_wrap'      => '%3$s',
    ) ); ?>
    <li class="social-icons">
      <?php get_template_part( 'partials/social', 'icons' ); ?>
    </li>
    <li class="hashtag">
      #FrockRock
    </li>
</ul>