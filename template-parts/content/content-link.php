<?php

/*
	
@package rdcirclestheme
-- Link Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rdcircles-format-link' ); ?>>
	
	<header class="post-header">
		<?php 
			$link = rdcircles_grab_url();
			the_title( '<h2 class="section-title"><a href="' . $link . '" target="_blank">', '<div class="link-icon"><span class="rdcircles-icon rdcircles-link"></span></div></a></h2>'); 
		?>
	</header>

	<footer class="post-footer">
		<div class="row align-items-center">
			<div class="col-8">
				<a href="<?php the_permalink(); ?>" class="btn rdc-btn">
					Checkout the links <i class="bi bi-link"></i>
				</a>
			</div>
			<div class="col-4 text-end">
				<?php echo rdcircles_posted_footer(); ?>
			</div>
		</div>
	</footer>

</article>