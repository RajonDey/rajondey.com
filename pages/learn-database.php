<?php /*
	
@package rdcircles
Template name: Learn Database

*/

get_header(); ?>
	
<section class="learn-section">
	<div class="container">
		<div class="row">
            <div class="col-12 text-start d-lg-none">
                <div id="list-toggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>

            <?php 
                $wq = new WP_Query(array(
                    'post_type' => 'learning',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'category_name' => 'database',
                    'orderby' => 'publish_date',
                    'order' => 'ASC',
                )); 
            ?>

            <div class="col-lg-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $link = 0; ?>
                    <h4 class="nav-title"><a href="#">Database</a></h4>
                    <?php if ($wq->have_posts()) : ?>
                        <?php while ($wq->have_posts()) : $wq->the_post(); ?>	
                            <li class="nav-item">
                                <a class="nav-link <?php if ($link == 0) echo 'active'; ?>" data-bs-toggle="tab" href="#exercise-<?php the_ID(); ?>" role="tab"><?php the_title(); ?></a>
                            </li>
                            <?php $link++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="tab-content">
                    <?php $tab = 0; ?>
                    <?php if ($wq->have_posts()) : ?>
                        <?php while ($wq->have_posts()) : $wq->the_post(); ?>
                            <div class="tab-pane <?php if ($tab == 0) echo 'active'; ?>" id="exercise-<?php the_ID(); ?>" role="tabpanel">
                                <?php the_content(); ?> </br>
                                <?php the_post_thumbnail();?>
                            </div>
                            <?php $tab++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php wp_reset_postdata(); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>