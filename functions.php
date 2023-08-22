<?php

/*
My Theme Function
*/

add_theme_support('title-tag');

// Theme css and js file

function ali_css_js_file_calling(){

    wp_enqueue_style( 'ali-style', get_stylesheet_uri(  ) );
    wp_register_style( 'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_register_style( 'custom', get_template_directory_uri(  ).'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ).'/js/bootstrap.js', array('jquery'), '5.0.2', true );
    wp_enqueue_script( 'main', get_template_directory_uri(  ).'/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ali_css_js_file_calling' );

function ali_add_google_fonts(){
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'ali_add_google_fonts');

// Theme Function 

function ali_customizer_register($wp_customize){

    $wp_customize->add_section( 'ali_header_area', array(
        'title' => __( 'Header Section', 'alihossain' ),
        'description' => "This is header section",
     
    ) );
    $wp_customize->add_setting( 'ali_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ali_logo', array(
        'label' => 'logo upload',
        'description' => 'Upload your logo',
        'settings' => 'ali_logo',
        'section' => 'ali_header_area',
    ) ) );

}

add_action( 'customize_register', 'ali_customizer_register' );
//Menu Register
register_nav_menu ('main_menu', __('Main Menu','alihossain'));