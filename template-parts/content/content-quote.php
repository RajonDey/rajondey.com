<?php

/*
	
@package rdcirclestheme
-- Quote Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rdcircles-format-quote' ); ?>>

	<header class="post-header">
		<h2 class="section-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark"> Quote </a></h2>
		<div class="post-meta">
			<?php echo rdcircles_posted_meta(); ?>
		</div>
	</header>

	<div class="post-content">
		<h1 class="quote-content"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_content(); ?></a></h1>		
		<?php the_title( '<h2 class="quote-author">- ', '</h2>'); ?>
	</div>
	
	<footer class="post-footer">
		<div class="row align-items-center">
			<div class="col-8">
				<a href="<?php the_permalink(); ?>" class="btn rdc-btn">
					Read the quote <i class="bi bi-chat-quote"></i>
				</a>
			</div>
			<div class="col-4 text-end">
				<?php echo rdcircles_posted_footer(); ?>
			</div>
		</div>
	</footer>
	
</article>