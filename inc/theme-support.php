<?php

/*

@package rdcirclestheme

========================
THEME SUPPORT OPTIONS
========================
*/
	
// Post formats
add_action( 'after_setup_theme', 'rdc_posts_formats', 11 );
function rdc_posts_formats(){
 add_theme_support( 'post-formats', array(
    'aside',
    'audio',
    'image',
    'link',
    'quote',
    'status',
    'video',
    ) );
}

// Post Thumbnaill
add_theme_support('post-thumbnails');

// Activate Nav Menu Option
function rdcircles_register_nav_menu()
{
    register_nav_menu('primary', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'rdcircles_register_nav_menu');

// Activate HTML5 features
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));


/*
SIDEBAR FUNCTIONS
========================
*/
function rdcircles_sidebar_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('rdcircles Sidebar', 'rdcirclestheme'),
            'id' => 'rdcircles-sidebar',
            'description' => 'Dynamic Right Sidebar',
            'before_widget' => '<section id="%1$s" class="rdcircles-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="rdcircles-widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'rdcircles_sidebar_init');


/*
BLOG LOOP CUSTOM FUNCTIONS
===========================
*/

function rdcircles_posted_meta()
{
    $posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));

    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    $i = 1;

    if (!empty($categories)):
        foreach ($categories as $category):
            if ($i > 1): $output .= $separator;
    endif;
    $output .= '<a href="'.esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr('View all posts in%s', $category->name).'">'.esc_html($category->name).'</a>';
    ++$i;
    endforeach;
    endif;

    return '<span class="posted-on">Posted <a href="'.esc_url(get_permalink()).'">'.$posted_on.'</a> ago</span> / <span class="posted-in">'.$output.'</span>';
}

function rdcircles_posted_footer($onlyComments = false)
{
    $comments_num = get_comments_number();
    if (comments_open()) {
        if ($comments_num == 0) {
            $comments = __('');
        } elseif ($comments_num > 1) {
            $comments = $comments_num.__(' ');
        } else {
            $comments = __('1 ');
        }
        $comments = '<a class="comments-link small text-caps" href="'.get_comments_link().'">'.$comments.' <span class="rdcircles-icon rajondey.comment"></span></a>';
    } else {
        $comments = __('Comments are closed');
    }

    if ($onlyComments) {
        return $comments;
    }

    return '<div>'.$comments.'</div>';
}

function rdcircles_get_attachment($num = 1)
{
    $output = '';
    if (has_post_thumbnail() && $num == 1):
        $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); else:
        $attachments = get_posts(array(
            'post_type' => 'attachment',
            'posts_per_page' => $num,
            'post_parent' => get_the_ID(),
        ));
    if ($attachments && $num == 1):
            foreach ($attachments as $attachment):
                $output = wp_get_attachment_url($attachment->ID);
    endforeach; elseif ($attachments && $num > 1):
            $output = $attachments;
    endif;

    wp_reset_postdata();

    endif;

    return $output;
}

function rdcircles_get_embedded_media($type = array())
{
    $content = do_shortcode(apply_filters('the_content', get_the_content()));
    $embed = get_media_embedded_in_content($content, $type);

    if (in_array('audio', $type)):
        $output = str_replace('?visual=true', '?visual=false', $embed[0]); else:
        $output = $embed[0];
    endif;

    return $output;
}

function rdcircles_grab_url()
{
    if (!preg_match('/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links)) {
        return false;
    }

    return esc_url_raw($links[1]);
}

function rdcircles_grab_current_uri()
{
    $http = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://');
    $referer = $http.$_SERVER['HTTP_HOST'];
    $archive_url = $referer.$_SERVER['REQUEST_URI'];

    return $archive_url;
}


/*
SINGLE POST CUSTOM FUNCTIONS
================================
*/
function rdcircles_post_navigation()
{
    $nav = '<div class="row post-navigation">';

    $prev = get_previous_post_link('<div class="post-link-nav"><span class="rdcircles-icon rdcircles-chevron-left" aria-hidden="true"></span> %link</div>', '%title');
    $nav .= '<div class="col-6 prev">'.$prev.'</div>';

    $next = get_next_post_link('<div class="post-link-nav">%link <span class="rdcircles-icon rdcircles-chevron-right" aria-hidden="true"></span></div>', '%title');
    $nav .= '<div class="col-6 next text-end">'.$next.'</div>';

    $nav .= '</div>';

    return $nav;
}

function rdcircles_share_this($content)
{
    if (is_single()) {
        $title = urlencode(get_the_title());
        $permalink = urlencode(get_permalink());
        $twitterHandler = (get_option('twitter_handler') ? '&amp;via='.esc_attr(get_option('twitter_handler')) : '');

        $x = 'https://twitter.com/intent/tweet?text=Hey! Read this: '.$title.'&amp;url='.$permalink.$twitterHandler.'';
        $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink;
        $linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url='.$permalink.'&title='.$title;

        $share_links = [
            'copy' => [
                'url' => get_permalink(),
                'icon' => 'bi-clipboard',
                'text' => 'Copy link'
            ],
            'x' => [
                'url' => $x,
                'icon' => 'bi-twitter',
                'text' => 'Share on X'
            ],
            'facebook' => [
                'url' => $facebook,
                'icon' => 'bi-facebook',
                'text' => 'Share on Facebook'
            ],
            'linkedin' => [
                'url' => $linkedin,
                'icon' => 'bi-linkedin',
                'text' => 'Share on LinkedIn'
            ]
        ];

        $share_html = '<div class="rdcircles-shareThis">';
        $share_html .= '<span class="share-icon"><i class="bi bi-box-arrow-up"></i> Share</span>';
        $share_html .= '<div class="share-dropdown">';
        $share_html .= '<ul>';
        foreach ($share_links as $network => $data) {
            if ($network === 'copy') {
                $share_html .= '<li><a href="#" class="copy-link" data-link="'.$data['url'].'"><i class="bi '.$data['icon'].'"></i>'.$data['text'].'</a></li>';
            } else {
                $share_html .= '<li><a href="'.$data['url'].'" target="_blank" rel="nofollow"><i class="bi '.$data['icon'].'"></i>'.$data['text'].'</a></li>';
            }
        }
        $share_html .= '</ul>';
        $share_html .= '</div>';
        $share_html .= '</div>';

        return $content . $share_html;
    } else {
        return $content;
    }
}
add_filter('the_content', 'rdcircles_share_this');


function rdcircles_get_post_navigation()
{
    if (get_comment_pages_count() > 1 && get_option('page_comments')):

        require get_template_directory().'/inc/templates/rajondey.comment-nav.php';

    endif;
}



