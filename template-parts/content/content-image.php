<?php

/*
	
@package rdcirclestheme
-- Image Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rdcircles-format-image' ); ?>>
	
	<header class="post-header background-image" style="background-image: url(<?php echo rdcircles_get_attachment(); ?>);">
		<?php the_title( '<h2 class="section-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		<div class="post-meta">
			<?php echo rdcircles_posted_meta(); ?>
		</div>
	</header>

	<div class="post-content image-caption">
		<?php the_excerpt(); ?>
	</div>
	
	<footer class="post-footer">
		<div class="row align-items-center">
			<div class="col-8">
				<a href="<?php the_permalink(); ?>" class="btn rdc-btn">
					See the image <i class="bi bi-images"></i>
				</a>
			</div>
			<div class="col-4 text-end">
				<?php echo rdcircles_posted_footer(); ?>
			</div>
		</div>
	</footer>
	
</article>