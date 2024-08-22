<?php

/*
	
@package rdcircles
-- Single Post Template

*/

?>
<style>

	.post-cover-img {
		margin-top: 0px;
		margin-bottom: 0px;
		width: 100%;
		height: auto;
		max-height: 400px;
		object-fit: contain;
		background: #eee;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header text-center">
		<?php the_title( '<h1 class="post-title">', '</h1>'); ?>
		<div class="post-meta">
			<?php echo rdcircles_posted_meta(); ?>
		</div>
	</header>
	
	<div class="post-content clearfix text-justify">
		<?php the_content(); ?>
		<div class="tags">
			<?php the_tags( '', ', ', '<br />' ); ?> 
		</div>
	</div>
	

</article>