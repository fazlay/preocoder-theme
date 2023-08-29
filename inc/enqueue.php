<?php

function jquery_mumbo_jumbo()
{
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');
    wp_enqueue_script('jquery', false, array(), false, true);
    wp_enqueue_script('jquery-core', false, array(), false, true);
    wp_enqueue_script('jquery-migrate', false, array(), false, true);
}
add_action('wp_enqueue_scripts', 'jquery_mumbo_jumbo');
function ali_css_js_file_calling()
{

    wp_enqueue_style('ali-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('owl_carousel_css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_register_style('owl_carousel_theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
    wp_enqueue_style('owl_carousel_css');
    wp_enqueue_style('owl_carousel_theme');

    // wp_enqueue_script('jquery');
    // wp_enqueue_script('jquery', '', array(), true); //true for footer
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', true);
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '2.3.4', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ali_css_js_file_calling');

function ali_add_google_fonts()
{
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ali_add_google_fonts');
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) {
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');
