<?php

/*
	
@package rdcirclestheme
-- Aside Post Format

*/

// $class = get_query_var('post-class');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'rdcircles-format-aside' ) ); ?>>
	
	
	<header class="post-header">	
		<?php the_title( '<h2 class="section-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		<div class="post-meta">
			<?php echo rdcircles_posted_meta(); ?>
		</div>
	</header>
	
	<div class="post-content row">	
		<div class="col-xs-12 col-sm-4 col-md-3">
			<?php if( rdcircles_get_attachment() ): ?>
				<div class="aside-featured background-image" style="background-image: url(<?php echo rdcircles_get_attachment(); ?>);"></div>
			<?php endif; ?>
		</div>
		
		<div class="col-xs-12 col-sm-8 col-md-9">
			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>

	<footer class="post-footer">
		<div class="row align-items-center">
			<div class="col-8">
				<a href="<?php the_permalink(); ?>" class="btn rdc-btn">
					Read the article <i class="bi bi-blockquote-left"></i>
				</a>
			</div>
			<div class="col-4 text-end">
				<?php echo rdcircles_posted_footer(); ?>
			</div>
		</div>
	</footer>
		
	
</article>