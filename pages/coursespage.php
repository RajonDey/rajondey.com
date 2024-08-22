<?php

/*
	
@package rdcircles
Template name: Coursespage

*/

get_header(); ?>

<div class="container rdc-main-container rdc-page">
	<div class="row justify-content-center">
		<div class="col-md-12">
			
            <div class="row page-banner align-items-center">
                <div class="col-md-7 align-items-center">

                    I like to do online courses frequently. As I believe, almost everything we want to learn exists online. Online courses are one of the best sources to get quick & structured learning, obviously if you can pick the best one. I've done a few cool and outstanding courses which I happily recommend to anyone with the same interest.

                </div>
            </div>

            <div class="row books page-section">
            <div class="col-md-12">
            <h2 class="section-title">Favourite Courses</h2>
            </div>

            

                <?php 
				    $books = new WP_Query(array(
			    		'post_type' => 'courses',
			    		'post_status' => 'publish',
			    		'posts_per_page' => -1,
			    		'orderby' => 'publish_date',
			    		'order' => 'ASC',
			    	)); 
				?>

                <?php if ($books->have_posts()) : ?><?php while ($books->have_posts()) : $books->the_post(); ?>
                <div class="col-md-6">
                <div class="course item">
                    <div class="course-cover">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="course-info">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <div class="tags"><?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                            foreach($posttags as $tag) {
                                echo '<span>' . $tag->name . '</span> '; 
                            }
                            }
                            ?>
                        </div>
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