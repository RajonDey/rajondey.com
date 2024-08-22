<?php

/*
	
@package rdcirclestheme
-- Video Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rdcircles-format-video' ); ?>>
	
	<header class="post-header">
		<?php the_title( '<h2 class="section-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		
		<div class="post-meta">
			<?php echo rdcircles_posted_meta(); ?>
		</div>
	</header>
	
	<div class="post-content">
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>
	
	<footer class="post-footer">
		<div class="row align-items-center">
			<div class="col-8">
				<a href="<?php the_permalink(); ?>" class="btn rdc-btn">
					Watch the video <i class="bi bi-play-circle"></i>
				</a>
			</div>
			<div class="col-4 text-end">
				<?php echo rdcircles_posted_footer(); ?>
			</div>
		</div>
	</footer>
	
</article>