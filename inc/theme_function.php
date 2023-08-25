<?php
function ali_customizer_register($wp_customize)
{

    $wp_customize->add_section('ali_header_area', array(
        'title' => __('Header Section', 'alihossain'),
        'description' => "This is header section",

    ));
    $wp_customize->add_setting('ali_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ali_logo', array(
        'label' => 'logo upload',
        'description' => 'Upload your logo',
        'settings' => 'ali_logo',
        'section' => 'ali_header_area',
    )));

    $wp_customize->add_section('ali_menu_option', array(
        'title' => __('Menu Settings', 'alihossain'),
        'description' => 'This is menu option section',
    ));
    $wp_customize->add_setting('ali_menu_sttings', array(
        'default' => 'right-side',
    ));
    $wp_customize->add_control('ali_menu_sttings', array(
        'label' => __('Menu Settings', 'alihossain'),
        'description' => 'Select your menu settings',
        'section' => 'ali_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left-side' => __('Left Side', 'alihossain'),
            'right-side' => __('Right Side', 'alihossain'),
            'middle-center' => __('Middle Center', 'alihossain'),
        ),

    ));

    //ADD THEME COLOR

    $wp_customize->add_section('ali_color', array(
        'title' => __("Theme Color", "alihossain"),
        'description' => __("This is theme color section", "alihossain"),

    ));
    $wp_customize->add_setting('ali_bg_color_setting', array(
        'default' => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ali_bg_color_setting', array(
        'label' => __("Theme Color", "alihossain"),
        'description' => __("Select your Background color", "alihossain"),
        'section' => 'ali_color',
        'settings' => 'ali_bg_color_setting',
    )));
    $wp_customize->add_setting('ali_theme_color_settings', array(
        'default' => '#ea1a70',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ali_theme_color', array(
        'label' => __("Theme Color", "alihossain"),
        'description' => __("Select your theme color", "alihossain"),
        'section' => 'ali_color',
        'settings' => 'ali_theme_color_settings',
    )));
}

add_action('customize_register', 'ali_customizer_register');


function ali_theme_color_custom()
{

?>
    <style>
        body {
            background-color: <?php echo get_theme_mod('ali_bg_color_setting'); ?>
        }

        :root {
            --pink: <?php echo get_theme_mod('ali_theme_color_settings'); ?>
        }
    </style>
<?php

};
add_action('wp_head', "ali_theme_color_custom");
