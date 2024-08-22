<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="<?php echo get_post_meta($post->ID, 'meta_description', true); ?>">
    <meta name="keywords" content="Rajon Dey, Web Development, Personal Development, Health and Wellness, Wealth Empowerment, Happiness Pursuit, Fulfilling Life">
    <meta name="author" content="Rajon Dey">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- umami for analytics -->
	<script defer src="https://cloud.umami.is/script.js" data-website-id="7e60ee33-6219-4aec-a246-c6057c6e387d"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BDY1PW5J3W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BDY1PW5J3W');
</script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.25.0"></script>
<script>
  // Apply Prism.js highlighting to code blocks
  document.addEventListener('DOMContentLoaded', function() {
    Prism.highlightAll();
  });
</script>
<body <?php body_class(); ?> > 
	
	<!-- Sidebar Section -->
	<div class="rdcircles-sidebar sidebar-closed">
		<div class="rdcircles-sidebar-container">
			<a class="js-toggleSidebar sidebar-close">
				<div class="sidebar-close-icon">
					<span class="rdcircles-icon rdcircles-close"></span>
				</div>
			</a>
		
			<div class="sidebar-scroll">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	<!-- Sidebar Overlay -->
	<div class="sidebar-overlay js-toggleSidebar"></div>

	<!-- Header Section -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">

				<!-- Logo Section -->
				<div class="col-md-12">
					<div class="logo text-center">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/dist/images/logo/gradient-logo.png" alt="Logo"></a>
					</div>
				</div>

				<!-- Navbar Section -->
				<div class="col-md-12" >
					<nav class="navbar">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'nav navbar-nav d-none d-lg-block',
								'link_class'   => 'nav-link m-2 menu-item nav-active',
								'walker' => new rdcircles_Walker_Nav_Primary()
							) );	
						?>

						<!-- Search Form -->
						<div class="d-flex align-items-center">
						   <form role="search" method="get" class="search" action="<?php echo esc_url(home_url('/')); ?>">
								<input class="inputsearch" type="search" placeholder="Hit enter to search!" aria-label="Search" name="s" title="Search for">
								<span type="submit" class="rdcircles-icon rdcircles-search"></span>
							    <input type="hidden" name="post_type" value="post"> 
							</form>
							
							<a class="js-toggleSidebar sidebar-open">
								<div class="sidebar-open-icon">
									<span class="rdcircles-icon rdcircles-menu"></span>
								</div>
							</a>
						</div>
					</nav>
				</div>

				<!-- Sticky Navbar Section -->				
				<nav class="navbar" id="sticky-navbar">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'nav navbar-nav d-none d-lg-block',
							'link_class'   => 'nav-link m-2 menu-item nav-active',
							'walker' => new rdcircles_Walker_Nav_Primary()
						) );	
					?>
					<!-- Search Form -->
					<div class="d-flex align-items-center icons">
						<form role="search" method="get" class="search" action="<?php echo esc_url(home_url('/')); ?>">
								<input class="inputsearch" type="search" placeholder="Hit enter to search!" aria-label="Search" name="s" title="Search for">
								<span type="submit" class="rdcircles-icon rdcircles-search"></span>
							    <input type="hidden" name="post_type" value="post"> 
							</form>	
	

						<a class="js-toggleSidebar sidebar-open">
							<div class="sidebar-open-icon">
								<span class="rdcircles-icon rdcircles-menu"></span>
							</div>
						</a>
					</div>
				</nav>

			</div>
			
		</div>
	</header>