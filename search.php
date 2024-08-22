<?php
/**
 * Search results page
 * @package rdcirclestheme
 */
get_header(); ?>

<section class="rdc-search-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()): ?>
                    <h2 class="section-title">Search Results for '<?php echo get_search_query(); ?>'</h2>
                    <ul class="search-items">
                        <?php
                        // Specify the number of search results to display (e.g., 10)
//                         query_posts('posts_per_page=2');

                        while (have_posts()): the_post(); ?>
                            <li>
                                <article>
                                    <div class="item-title">
                                        <h3><a href="<?php esc_url(the_permalink()); ?>"
                                               title="Permalink to <?php the_title(); ?>"
                                               rel="bookmark"><?php the_title(); ?></a></h3>
                                        <time datetime="<?php the_time('Y-m-d'); ?>"
                                              pubdate><?php the_date(); ?> <?php the_time(); ?></time>
                                    </div>
                                    <?php the_excerpt(); ?>
                                </article>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else: ?>
                    <div class="no-result">
                        <i class="bi bi-exclamation-lg"></i>
                        <h2>No results found for '<?php echo get_search_query(); ?>'</h2>
                        <p>Nothing was found on this page. But we still have other interesting stuff for you!</p>
                        <form role="search" method="get" class="search-form" action="">
                            <input type="search" class="search-field" placeholder="Search by keyword..." name="s"
                                   title="Search for">
                            <button type="submit" class="btn rdc-btn-fill">Search <i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
