<?php 
/*
@package rdcircles
*/

get_header(); ?>

	<div class="container rdc-main-container rdc-articlespage">

		<div class="row justify-content-center">
			<div class="col-md-12">
				
				<div class="row page-banner align-items-center">
					<div class="col-md-7 align-items-center">
						<p>I don't have any schedule or order to write, but I often do it whenever I'm in mode to do so! There are varieties of posts, tutorials, notes, musings, and many more things. It's an archive of everything exciting I've done, hopefully, you'll find some of it interesting and exciting too. </p>
					</div>
				</div>



		<div class="row justify-content-center">
			<div class="col-md-8">

				<?php if( is_paged() ): ?>
					
					<div class="text-center container-load-previous">
						<a class="btn-rdcircles-load rdcircles-load-more" data-prev="1" data-page="<?php echo rdcircles_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
							<span class="rdcircles-icon rdcircles-loading"></span>
							<span class="text">Load Previous</span>
						</a>
					</div><!-- .container -->
					
				<?php endif; ?>
				
				<div class="rdcircles-posts-container pt-0">
					
					<h1 class="section-title">All Articles.</h1>
			
					<?php 
						
						if( have_posts() ):
							
							echo '<div class="page-limit" data-page="/' . rdcircles_check_paged() . '">';

								
								
								while( have_posts() ): the_post();
									
									/*
									$class = 'reveal';
									set_query_var( 'post-class', $class );
									*/
									get_template_part( 'template-parts/content/content', get_post_format() );
								
								endwhile;
									
									
							echo '</div>';
							
						endif;
					
					?>
				</div><!-- .container -->
				
				<div class="text-center">
					<div class="row MBottom50">
						<a class="btn-rdcircles-load rdcircles-load-more" data-page="<?php echo rdcircles_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
							<span class="rdcircles-icon rdcircles-loading"></span><br>
							<span class="text">Load More</span>
						</a>
					</div><!-- .row -->
				</div><!-- .container -->

			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div class="listpage-sidebar">
					<div class="categories">
						<h2 class="section-title">Categories</h2>
						<ul>
							<?php
							$categories = get_categories();

							foreach ($categories as $category) {
								$category_link = get_category_link($category->cat_ID);
								$category_name = $category->name;
								$post_count = $category->count;
								echo "<li><a href='{$category_link}'><div class='name'>{$category_name}</div> <div class='count'>{$post_count}</div></a></li>";
							}
							?>
						</ul>
					</div>
					
					<div>
						<h2 class="section-title">Tags</h2>
						<ul class="tags">
							<?php
								$args = array(
									'orderby' => 'count',   // Sort by tag count
									'order' => 'DESC',     // Descending order (most popular tags first)
									'number' => 30,        // Limit the number of tags to display
								);

								$tags = get_tags($args);

								foreach ($tags as $tag) {
									$tag_link = get_tag_link($tag->term_id);
									$tag_name = $tag->name;
									$post_count = $tag->count;
									echo "<li><a class='tag' href='{$tag_link}'>{$tag_name}</a></li>";
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- main container -->


<?php get_footer(); ?>