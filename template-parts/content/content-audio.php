<?php

/*
	
@package rdcirclestheme
-- Audio Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rdcircles-format-audio' ); ?>>

	<header class="post-header">
		<?php the_title( '<h2 class="section-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		<div class="post-meta">
			<?php echo rdcircles_posted_meta(); ?>
		</div>
	</header>
	
	<div class="post-content">
		<?php echo rdcircles_get_embedded_media( array('audio','iframe') ); ?>
	</div>
	
	<footer class="post-footer">
		<div class="row align-items-center">
			<div class="col-8">
				<a href="<?php the_permalink(); ?>" class="btn rdc-btn">
					Listen the audio <i class="bi bi-music-note-list"></i>
				</a>
			</div>
			<div class="col-4 text-end">
				<?php echo rdcircles_posted_footer(); ?>
			</div>
		</div>
	</footer>
	
</article>