<?php

/*
	
@package rdcircles
Template name: Bookspage

*/

get_header(); ?>

<div class="container rdc-main-container rdc-page">
	<div class="row justify-content-center">
		<div class="col-md-12">
			
            <div class="row page-banner align-items-center">
                <div class="col-md-7 align-items-center">

                    I usually didn't read books much, but nowadays I got fascinated and influenced by seeing a few people and started making a habit of reading books. Hence the amount of books I read is less, so I pick a very selective one and share the best one after filtering out all my list. I hope these books will help you to achieve success faster.

                </div>
            </div>

            <div class="row books page-section">
                
                <div class="col-md-12">
                <h2 class="section-title">Favourite Books</h2>
                </div>

                

                    <?php 
                        $books = new WP_Query(array(
                            'post_type' => 'books',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'orderby' => 'publish_date',
                            'order' => 'ASC',
                        )); 
                    ?>

                    <?php if ($books->have_posts()) : ?><?php while ($books->have_posts()) : $books->the_post(); ?>	
					<div class="col-md-6">
						<div class="book item">
							<div class="book-cover">
								<a href="<?php the_permalink(); ?>" rel="noopener" target="_blank"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="book-info">
								<a href="<?php the_permalink(); ?>" rel="noopener" target="_blank"><h3><?php the_title(); ?></h3></a>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                


            </div>

		</div>
	</div>
</div><!-- main container -->

<?php get_footer(); ?>