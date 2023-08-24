
<?php

function ali_widget_register()
{

    register_sidebar(array(

        'name' => __('Main Sidebar', 'alihossain'),
        'id' => 'sidebar-1',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'alihossain'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>'


    ));
};

add_action('widgets_init', 'ali_widget_register');
