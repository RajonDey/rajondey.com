<?php

/*
	
@package rdcircles
Template name: Homepage

*/

get_header(); ?>

<div class="container rdc-main-container rdc-home">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- Intro Section -->
			<div class="row intro">
				<div class="col-lg-7">
					<h1 class="section-title">Hey, I'm Rajon Dey</h1>
					<h2>Web Developer / <span id="life-role" class="highlight">Life Enthusiast</span> / Aspiring Musician</h2>

					<p>I love creating softwares, digital contents, and moments in life!. Welcome to my digital space. Explore web development tips, life hacks, and my journey in tech and beyond.</p>

					<a href="https://join.rajondey.com/" target="_blank" class="rdc-btn">Join the Journey</a>
				</div>
				<div class="col-lg-5 text-center intro-image">
					<div class="video-container">
						<script src="https://fast.wistia.com/embed/medias/os7etyvwn1.jsonp" async></script>
						<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
						<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
							<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
								<span class="wistia_embed wistia_async_os7etyvwn1 popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;position:relative;width:100%">&nbsp;</span>
							</div>
						</div>
						<div class="play-button" id="custom-play-button">
							<i class="bi bi-play-circle-fill"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="row featured-category">
				<div class="col-md-12">
					<h2 class="section-title">Browse the categories</h2>

					<ul class="categories"><li class="life"><a href="/category/life/"><div class="icon"><img alt="RDC Life" src="https://rajondey.com/wp-content/uploads/2023/10/life.png"></div><h3>Life</h3>
				</a></li><li class="web"><a href="/category/web-development/"><div class="icon"><img alt="RDC Web" src="https://rajondey.com/wp-content/uploads/2023/10/web-new.png"></div><h3>Web</h3>
				</a></li><li class="music"><a href="/category/music/"><div class="icon"><img alt="RDC Music" src="https://rajondey.com/wp-content/uploads/2023/10/music.png"></div><h3>Music</h3>
				</a></li></ul>
				</div>
			</div>
			<!-- Latest Post Section -->
			<div class="row latest-post">
				<div class="col-md-12">
					<h2 class="section-title">Latest Posts</h2>
					<?php 
					// the query
					$the_query = new WP_Query( array(
						'posts_per_page' => 3,
					)); 
					?>

					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="single-post">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<?php else : ?>
					<p><?php __('No News'); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<!-- Project Section -->
			<div class="row project-highlight">
				<div class="col-md-12">
					<h2 class="section-title">Projects</h2>
				</div>
				<div class="col-md-12 align-items-center">
					<p>Here's a glimpse of a few recent projects I've been passionately crafting.</p>
					<div class="all-projects row">
						<div class="col-md-6">
							<div class="card mb-3 align-middle justify-content-center">
								<div class="row g-0">
								<div class="col-md-4">
									<img src="https://rajondey.com/wp-content/uploads/2023/10/InspireXcellence-logo.png" class="img-fluid rounded-start" alt="InspireXcellence Logo">
								</div>
								<div class="col-md-8">
									<div class="card-body h-100 justify-content-center d-flex flex-column ">
									<h5 class="card-title">InspireXcellence</h5>
									<p class="card-text">Inspiring individuals to achieve personal growth, health, wealth, and happiness.</p>
									<a class="card-text" href="https://www.instagram.com/inspirexcellences/" style="width: fit-content;"><small class="text-body-secondary">Visit InspireXcellence</small></a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card mb-3 align-middle justify-content-center">
								<div class="row g-0">
								<div class="col-md-4">
									<img src="https://rajondey.com/wp-content/uploads/2023/10/giftlawn-logo.png" class="img-fluid rounded-start" alt="InspireXcellence Logo">
								</div>
								<div class="col-md-8">
									<div class="card-body h-100 justify-content-center d-flex flex-column relative">
									<span class="badge badge-danger">Discontinued</span>
									<h5 class="card-title">Giftlawn</h5>
									<p class="card-text">Making it easy to find the perfect gift for every occasion.</p>
									<a class="card-text" href="https://giftlawn.com/" style="width: fit-content;"><small class="text-body-secondary">Visit Giftlawn</small></a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card mb-3 align-middle justify-content-center">
								<div class="row g-0">
								<div class="col-md-4">
									<!-- Theme color: Teal #28464D #497F7F -->
									<img src="https://rajondey.com/wp-content/uploads/2023/10/codebyrajon.png" class="img-fluid rounded-start" alt="codebyrajon Logo">
								</div>
								<div class="col-md-8">
									<div class="card-body h-100 justify-content-center d-flex flex-column ">
									<h5 class="card-title">CodeByRajon</h5>
									<p class="card-text">My development portfolio!</p>
									<a class="card-text" href="https://portfolio.rajondey.com/" style="width: fit-content;"><small class="text-body-secondary">Visit My Portfolio</small></a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card mb-3 align-middle justify-content-center">
								<div class="row g-0">
								<div class="col-md-4">
									<img src="https://rajondey.com/wp-content/uploads/2023/12/devlife-logo.jpeg" class="img-fluid rounded-start" alt="Devlife Logo">
								</div>
								<div class="col-md-8">
									<div class="card-body h-100 justify-content-center d-flex flex-column ">
									<h5 class="card-title">Devlife</h5>
									<p class="card-text">A shop for developer cloths!</p>
									<a class="card-text" href="https://devlfe.creator-spring.com/" style="width: fit-content;"><small class="text-body-secondary">Visit Devlife</small></a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card mb-3 align-middle justify-content-center" >
								<div class="row g-0">
								<div class="col-md-4 justify-content-center align-items-center d-flex">
									<h2>
										Next<br/> One!
									</h2>
								</div>
								<div class="col-md-8">
									<div class="card-body h-100 justify-content-center d-flex flex-column ">
									<h5 class="card-title">Coming soon...</h5>
									<p class="card-text">I'm a perpetual creator, dedicated to shaping fresh ideas that leave a sketch on the world.</p>
									<a class="card-text" href="https://rajondey.com/" style="width: fit-content;"><small class="text-body-secondary">Working...</small></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- YouTube Video Section -->
			<div class="row youtube-videos">
				<div class="col-md-12">
					<h2 class="section-title">Youtube</h2>
				</div>
				<div class="col-md-4">
					<div class="video">
						<iframe class="responsive-iframe" width="100%" src="https://www.youtube.com/embed/ak62OiA2Pbg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4">
					<div class="video" style="padding-top:0px;border-radius:7px;">
						<a href="https://www.youtube.com/watch?v=kUgFjmXsLws&list=PLumbbTciHe4rw0sewLFR74Jl8cHogKO-L" target="_blank" rel="noopener noreferrer">
							<img src="http://www.rajondey.com/wp-content/uploads/2022/11/YouTube-Thumb-for-7usefulJSprojet-GitHub-profile.png" alt="7 useful JS projects">
						</a>
					</div>
				</div>
					
				<div class="col-md-4">
					<div class="video">
						<iframe class="responsive-iframe" width="100%" height="315" src="https://www.youtube.com/embed/Kw_dKtG-NzE?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-12 subscribe-btn">
					<a href="https://www.youtube.com/channel/UCRKEjqMrb3EoaUtMr0PckZg?sub_confirmation=1" target="_blank" class="youtube-btn rdc-btn" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';"><i class="bi bi-youtube"></i> Subscribe</a>
				</div>
			</div>
			<!-- Newsletter Section -->
			<div class="newsletter-section">
				<div class="row align-items-center">
					<div class="col-md-6 text-center">
						<img src="https://www.rajondey.com/wp-content/uploads/2024/09/dev-tools-book-cover.png" alt="Ultimate Developer Tools" width="360" height="auto">
					</div>
					<div class="col-md-6">
						<h3 class="mb-3">Developer Data!</h3>
						<p class="mb-3">Get 'Ultimate Developer Tools' Today!</p>
						<iframe src="https://embeds.beehiiv.com/664364ea-a049-49b3-82c0-b52fa54eaf2f?slim=true" data-test-id="beehiiv-embed" height="52" width="100%" frameborder="0" scrolling="no" style="margin: 0; border-radius: 0px !important; background-color: transparent;"></iframe>
						<small class="text-muted">We respect your privacy. Unsubscribe at any time.</small>
					</div>
				</div>
			</div>

			<!-- My Story Section -->
			<div class="row intro pt-0">
				<div class="col-lg-12">
					<h2 class="section-title">My Story</h2>
				</div>
				<div class="col-lg-7 bio">
					<p>Welcome to my digital playground!, I'm Rajon! I initially pursued a business education but later found my passion in Software Development. My journey started in 2014, and I freelanced until 2019. Then, I ventured into the corporate world with <a href="https://sjinnovation.com/" target="_blank" rel="noopener noreferrer">SJ Innovation Llc</a>, where I currently hold the position of Module Lead in the Frontend Development team.</p>
					
					<p>As a Software Developer, my passion is crafting smart, meaningful, and professional websites that enhance the online presence of individuals and businesses, making the web a more engaging, effective, and better platform.</p>
					
					<p>Beyond coding, I'm also a Digital Creator, crafting content on the internet, an Investor in various sectors, and a passionate Music Lover.</p>

					<a href="https://www.rajondey.com/about" class="rdc-btn">Full Story</a>
				</div>
				<div class="col-lg-5 text-center intro-image">
					<img src="http://www.rajondey.com/wp-content/uploads/2021/07/rajon-dey.jpg" alt="Rajon" width="80%">
					<ul class="social-list d-flex gap-3 justify-content-center mt-3">
						<li class="instagram"><a href="https://www.instagram.com/rajjon.dey/" target="_blank"><i class="bi bi-instagram"></i></a></li>
						<li class="twitter"><a href="https://twitter.com/rajjon_dey" target="_blank"><i class="bi bi-twitter"></i></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/in/rajondey/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
					</ul> 
				</div>
			</div>

			<!-- <div class="row newsletter">
				<div class="col-md-12">
					<h2 class="section-title">Stay in Touch</h2>
					<p>Subscribe the most caring and compassionate newsletter you can join for, where you will receive at least one useful email, I promise.</p>
					<div class="rdc-subs-form">
						<script async data-uid="3264118d5d" src="https://marvelous-leader-6539.ck.page/3264118d5d/index.js"></script>
					</div>
				</div>
			</div> -->

		</div>
	</div>

	<!-- Newsletter Popup Section -->
	<?php echo get_template_part( 'template-parts/components/newsletter-popup', 'part' ); ?>
</div><!-- main container -->

	


<?php get_footer(); ?>