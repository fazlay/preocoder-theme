<?php


function enqueue_login_scripts()
{

    wp_enqueue_style('login_screen_css', get_template_directory_uri() . '/css/login_enqueue.css', array(), '1.0.0', 'all');
};

add_action('login_enqueue_scripts', 'enqueue_login_scripts');

//Change the login Log 

function ali_login_logo()
{
    echo '<style type="text/css">
    h1 a {background-image: url(' . get_bloginfo('template_directory') . '/img/logo.png) !important;
    
    background-size: 100% !important;}
    </style>';
}
add_action('login_head', 'ali_login_logo');
