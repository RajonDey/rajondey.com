<?php /*
	
@package rdcircles

*/

get_header(); ?>
	
			
	<div class="container">
		<div class="row justify-content-center rdcircles-single-post">
			
			<div class="col-md-8">
			
				<?php 
					
					if( have_posts() ):
						
						while( have_posts() ): the_post();
							
							rdcircles_save_post_views( get_the_ID() );
							
							get_template_part( 'template-parts/single', get_post_format() );
							
							echo rdcircles_post_navigation();
							
							if ( comments_open() ):
								comments_template();
								
							endif;
						
						endwhile;
						
					endif;
				
				?>
				<small style="color: #999999;">
				This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
				</small>
			</div>
		
		</div>
	</div>
		
	
<?php get_footer(); ?>