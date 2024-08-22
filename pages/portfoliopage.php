<?php

/*
	
@package rdcirclestheme
Template name: Portfolio Page

*/

get_header(); ?> 

	<div class="container portfolios-header pt-5">
		<div class="row page-banner align-items-center pb-5">
			<div class="col-md-7 align-items-center">
				<p>A few highlights of my work as a frontend developer. I'm doing this for the last five years and developed many websites, email templates, and web applications. I would like to share some of my works here:</p>
				<ul>
					<li>Open-source projects <a href="https://github.com/RajonDey" target="_blank">on GitHub</a>.</li>
					<li>My pens <a href="https://codepen.io/Rajon" target="_blank">on Codepen</a>.</li>
				</ul>
			</div>
		</div>
		<div class="page-section row">
			<div class="col-md-12 books item">
				<h2 class="section-title">My Works</h2>
			</div>
		</div>
	</div>

	<section id="portfolios" class="portfolios">
        <div class="container pt-3">
			<div class="row justify-content-center">
				<!-- <ul class="portfolios-header nav"> -->
				<ul class="portfolio-tabs nav">
				<!-- <ul class="tabs nav"> -->
				  <li class="websites">
				    <a class="nav-link active" data-bs-toggle="tab" href="#websites">Websites</a>
				  </li>
				  <li class="email-templates">
				    <a class="nav-link" data-bs-toggle="tab" href="#email-templates">Email Templates</a>
				  </li>
				</ul>
			</div>
		</div>

		<div class="py-5 background-color-primary spacing-bottom-150">
			<div class="container">
				<div class="tab-content">

					<div class="tab-pane fade show active" id="websites">

						<!-- Single Project -->
						<?php 
							$portfolioList = new WP_Query(array(
								'post_type' => 'portfolios',
								'post_per_page' => -1,
								'category_name' => 'website',
							));
						?>
						<div class="row justify-content-center">
							<?php $fn = 1; ?>
							<?php while( $portfolioList->have_posts()) : $portfolioList->the_post(); ?>
								<!-- Project Item Thumb -->
								<div class="col-md-5" id="<?php echo $fn; ?>">
									<div class="project-container">
										<div class="project" style="background:url('<?php the_post_thumbnail_url(); ?>')">
											<div class="item-link">
												<a onclick="openModal();currentSlide(<?php echo $fn; ?>)" data-toggle="modal"><i class="bi bi-play-circle"></i></a>
											</div>
										</div>
										<!-- project info-->
										<div class="project-info">
											<a onclick="openModal();currentSlide(<?php echo $fn; ?>)" data-toggle="modal"><h4 class="project-info--title"><?php the_title(); ?></h4></a>
											
											<div class="project-info--tag">
												<?php the_category(', '); ?>
											</div>
											<div class="project-info--link">
												<a class="button-icon" href="<?php echo get_post_meta($post->ID, 'Portfolio_live_url', true); ?>" target="_blank"><i class="bi bi-link-45deg"></i></a>	
											</div>
										</div>
									</div>
								</div> 
							<?php $fn++; endwhile; ?>

							<div id="portfolioModal" class="portfolio-modal">

								<span class="close cursor" onclick="closeModal()">×</span>
								<div class="portfolio-modal-content">
									<!-- Full Project Details -->
									<?php while( $portfolioList->have_posts()) : $portfolioList->the_post(); ?>
										<div class="projectSlides item-slides">
											<div class="project-info">
												<div class="project-info--title">
													<h2><?php echo get_the_title(); ?></h2>
													<?php the_excerpt(); ?>
												</div>
												<div class="project-info--features project-info--tag">
													<?php the_tags('FEATURES: ', $sep = ' ', $after = ''); ?>
												</div>
												<div class="project-info--categories">
													CATEGORY: <?php the_category(', '); ?>
												</div>
												<div class="project-info--link">
													<a href="<?php echo get_post_meta($post->ID, 'Portfolio_live_url', true); ?>" target="_blank">Visit Website <i class="bi bi-send-fill"></i></a>	
												</div>
											</div>
											<div class="project-image">
												<?php the_content(); ?>
											</div>
										</div>
									<?php endwhile; ?>

									<!-- Next/previous controls -->
									<a class="prev" onclick="plusSlides(-1)">❮</a>
									<a class="next" onclick="plusSlides(1)">❯</a>

								</div>
							</div>
						</div>		
				  	</div><!-- End Frontend Tab Contents -->




					<!--
						EMAIL TAB STARTS HERE
					-->  
				  	<div class="tab-pane fade" id="email-templates">
					  	<!-- Single Project -->
						<?php 
							$portfolioList = new WP_Query(array(
								'post_type' => 'portfolios',
								'post_per_page' => -1,
								'category_name' => 'email-templates',
							));
						?>
						<div class=" row justify-content-center">
							<?php $fn = 1; ?>
							<?php while( $portfolioList->have_posts()) : $portfolioList->the_post(); ?>
								<!-- Project Item Thumb -->
								<div class="col-md-5" id="<?php echo $fn; ?>">
									<div class="project-container">
										<div class="project" style="background:url('<?php the_post_thumbnail_url(); ?>')">
											<div class="item-link">
												<a onclick="openModalEmails();currentSlideEmails(<?php echo $fn; ?>)" data-toggle="modal"><i class="bi bi-play-circle"></i></a>
											</div>
										</div>
										<!-- project info-->
										<div class="project-info">
											<a onclick="openModalEmails();currentSlideEmails(<?php echo $fn; ?>)" data-toggle="modal"><h4 class="project-info--title"><?php the_title(); ?></h4></a>
											
											<div class="project-info--tag">
												<?php the_category(', '); ?>
											</div>
											<div class="project-info--link">
												<a class="button-icon" href="<?php echo get_post_meta($post->ID, 'Portfolio_live_url', true); ?>" target="_blank"><i class="bi bi-link-45deg"></i></a>	
											</div>
										</div>
									</div>
								</div> 
							<?php $fn++; endwhile; ?>

							<div id="portfolioModalEmails" class="portfolio-modal">

								<span class="close cursor" onclick="closeModalEmails()">×</span>
								<div class="portfolio-modal-content">
									<!-- Full Project Details -->
									<?php while( $portfolioList->have_posts()) : $portfolioList->the_post(); ?>
										<div class="projectSlidesEmails item-slides">
											<div class="project-info">
												<div class="project-info--title">
													<h2><?php echo get_the_title(); ?></h2>
													<p><?php the_excerpt(); ?></p>
												</div>

												<div class="project-info--features project-info--tag">
													<?php the_tags('FEATURES: ', $sep = ' ', $after = ''); ?>
												</div>

												<div class="project-info--categories">
													CATEGORY: <?php the_category(', '); ?>
												</div>

												<div class="project-info--link">
													<a href="<?php echo get_post_meta($post->ID, 'Portfolio_live_url', true); ?>" target="_blank">View live <i class="bi bi-send-fill"></i></a>	
												</div>
											</div>
											<div class="project-image">
												<?php the_content(); ?>
											</div>
										</div>
									<?php endwhile; ?>

									<!-- Next/previous controls -->
									<a class="prev" onclick="plusSlides(-1)">❮</a>
									<a class="next" onclick="plusSlides(1)">❯</a>

								</div>
							</div>
						</div>	
					</div><!-- End CMS Tab Contents -->

				</div>
			</div>
		</div>
		<!-- The Portfolio Modal/Lightbox -->
    </section><!-- End Section -->

<?php get_footer(); ?>