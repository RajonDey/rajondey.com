<?php

/*
	
@package rdcircles
-- Single Post Template

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header text-center">
        <?php the_title( '<h1 class="post-title">', '</h1>'); ?>
        <div class="post-meta">
            <?php echo rdcircles_posted_meta(); ?>
            <?php echo rdcircles_share_this(''); ?>
        </div>
    </header>
    
    <div class="post-content clearfix text-justify">
        <?php the_content(); ?>
    </div>
    
    <!-- Branding Box -->
    <Div class="d-flex brand-boxes">
        <div class="branding-box flex-2">
            <h3>About Me</h3>
            <p>Hello and thanks for visiting! My name is Rajon Dey, and this is my website and digital space.</p>
            <p>I'm a software developer who loves creating softwares, digital contents, and moments in life!. Explore web development tips, life hacks, and my journey in tech and beyond.</p>
            <ul class="social-list d-flex">
                <li class="instagram"><a href="https://www.instagram.com/rajjon.dey/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li class="twitter"><a href="https://twitter.com/rajjon_dey" target="_blank"><i class="bi bi-twitter"></i></a></li>
                <li class="linkedin"><a href="https://www.linkedin.com/in/rajondey/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="branding-box flex-1">
            <div class="post-details mb-4">
                <h3>Post Details</h3>
                <ul>
                    <li><b>Published</b>: <?php echo get_the_date('F Y'); ?></li>
                    <li><b>Category</b>: <?php echo get_the_category_list(', '); ?></li>
                </ul>
            </div>
            <!-- <h3>Tags</h3>
            <div class="tags">
                <?php the_tags( '', ', ', '<br />' ); ?> 
            </div> -->
            <h3>Newsletter</h3>
            <a href="https://join.rajondey.com/" target="_blank" rel="noopener noreferrer">Subscribe to the Newsletter</a>
            
        </div>
    </Div>

</article>