
<?php

add_theme_support('title-tag');
add_theme_support('wp-block-styles');


//Thumbnail Image Support

add_theme_support('post-thumbnails', array('post', 'page', 'service'));
add_image_size('post_thumbnails', 970, 350, true);

function ali_excerpt_more($more)
{
    global $post;
    return '<br> <br> <a  class="read-more" href="' . get_permalink($post->ID) . '">' . 'Read More' . '</a>';
}

add_filter('excerpt_more', 'ali_excerpt_more');

function ali_excerpt_length($length)
{
    return 100;
}
add_filter('excerpt_length', 'ali_excerpt_length');


//pagination 

function ali_pagenav()
{
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1; //1 - display the text "Page N of N", 0 - not display
    $args['prev_text'] = '&laquo; Previous'; //text of the "Previous page" link
    $args['next_text'] = 'Next &raquo;'; //text of the "Next page" link
    if ($max > 1) echo '</pre><div class="wp_pagenav">';
    if ($total == 1 && $max > 1) $pages = '<p class="pages">Page ' . $current . ' of ' . $max . '</p>' . "\r\n";
    echo $pages . paginate_links($args);
    if ($max > 1) echo '</div></pre>';
};
