<?php 
	
/*
    This is the template for the footer
    @package rdcircles
*/
	
?>


	<footer id="footer">
		<div class="container clearfix">
			<div class="footer-top row">
				<div class="col-md-4 single-widget">
					<img alt="RD Signature" class="rajon-sign" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/dist/images/signature-2.png"></h4>
					<div class="footer-list">
						<p>Rajon Dey</p>
						<p>Front-end Developer</p>
					</div>
				</div>
				<div class="col-md-4 single-widget">
					<h4 class="footer-title">Reach</h4>
					<ul class="footer-list">
						<p>Sylhet, Bangladesh</p>
						<li><a href="mailto:contact@rajondey.com">contact@rajondey.com</a></li>
						<li class="mt-2"><a href="https://join.rajondey.com/" target="_blank" class="rdc-btn">Stay Close!</a></li>
					</ul>
				</div>
				<div class="col-md-4 single-widget">
					<h4 class="footer-title">Links</h4>
					<ul class="footer-list">
						<li><a href="https://www.rajondey.com/terms">Terms of Use</a></li>
						<li><a href="https://www.rajondey.com/privacy-policy">Privacy Policy</a></li>
						<li><a href="https://www.rajondey.com/sitemap_index.xml">Sitemap</a></li>
					</ul>
				</div>
			</div><!-- End footer-top row -->	
			<div class="copywrite row text-center">
				<div class="col-12">
					<?php echo get_template_part( 'template-parts/components/social-list', 'part' ); ?>
					<p class="mb-0"> &copy; 2020 - <?php echo date('Y'); ?> | Made with ❤️ by Rajon Dey</p>
				</div>
			</div><!-- End footer-top row -->	

		</div><!-- End container -->
	</footer><!-- End Footer -->


<?php wp_footer(); ?>
</body>

</html>
