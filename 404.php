<?php get_header(); ?>

<div class="no-content">
    <div class="container">
        <div id="content-area" class="clearfix">
            <div class="text-center">
                <article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
                    <h1><?php esc_html_e('404','Rajon'); ?></h1>
                    <h2><?php esc_html_e('Oops! Page Not Found.','Rajon'); ?></h2>
                    <p>The page you were looking for does not exist.<br/> You may have mistyped the address or the page may have moved.</p>
                    <div class="et_pb_button_module_wrapper et_pb_module">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="et_pb_promo_button et_pb_button">
                            <?php esc_html_e('Go to the home page','Rajon'); ?>
                        </a>
                    </div>
                </article> <!-- .et_pb_post -->
            </div> <!-- #left-area -->
        </div> <!-- #content-area -->
    </div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>