<?php /*
	
@package rdcircles
Template name: Learn CSS

*/

get_header(); ?>
	


<section class="learn-section">
	<div class="container">
		<div class="row">

				<?php 
				    $wq = new WP_Query(array(
			    		'post_type' => 'learning',
			    		'post_status' => 'publish',
			    		'posts_per_page' => -1,
			    		'category_name' => 'css',
			    		'orderby' => 'publish_date',
			    		'order' => 'ASC',
			    	)); 
				?>
				

				<div class="col-lg-3 col-md-4">
				  	<ul class="nav nav-tabs" id="myTab" role="tablist">
                      <?php $link = 0; ?>
				  	  <h4 class="nav-title"><a href="#">CSS</a></h4>
				  	  <?php if ($wq->have_posts()) : ?><?php while ($wq->have_posts()) : $wq->the_post(); ?>	
						  <li class="nav-item">
						    <a class="nav-link <?php if ($link == 0) echo 'active'; ?>" data-toggle="tab" href="#exercise-<?php the_ID(); ?>" role="tab"><?php the_title(); ?></a>
						  </li>
					  <?php $link++; ?>
					  <?php endwhile; ?>
					  <?php endif; ?>
				</div>

				<div class="col-lg-9 col-md-8">
					<div class="tab-content">
                    <?php $tab = 0; ?>
					  <?php if ($wq->have_posts()) : ?><?php while ($wq->have_posts()) : $wq->the_post(); ?>
					  	<div class="tab-pane <?php if ($tab == 0) echo 'active'; ?>" id="exercise-<?php the_ID(); ?>" role="tabpanel">
					  	    <?php the_content(); ?> </br>
					  	    <?php the_post_thumbnail();?>
					  	</div>
					  <?php $tab++; ?>
					  <?php endwhile; ?>
					  <?php endif; ?>
					</div>
				</div>




		</div>
	</div>
</section>


<?php get_footer(); ?>