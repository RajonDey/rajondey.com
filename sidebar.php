<?php /*
	
@package sunsettheme

*/

if ( ! is_active_sidebar( 'rdcircles-sidebar' ) ) {
	return;
}

?>

<aside id="secondary" class="widget-area" role="complementary">
  
  <div class="d-lg-none navbar">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav navbar-nav',
        'link_class'   => 'nav-link m-2 menu-item nav-active',
        'walker' => new rdcircles_Walker_Nav_Primary()
    ) );	
    ?>
  </div>
	
  <?php dynamic_sidebar( 'rdcircles-sidebar' ); ?>
	
</aside>