<?php

function custom_service()
{
    register_post_type('service', array(
        'labels' => array(
            "name" => __("Services", "alihossain"),
            "singular_name" => __("service", "alihossain"),
            "add_new" => __("Add New Service", "alihossain"),
            "add_new_item" => __("Add New Service", "alihossain"),
            "edit_item" => __("Edit Service", "alihossain"),
            'new_item' => __('New Service', 'alihossain'),
            'view_item' => __('View Service', 'alihossain'),
            'not_found' => __('No Service Found', 'alihossain'),


        ),
        'menu_icon' => 'dashicons-admin-tools',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'service'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')

    ));
}

add_action('init', 'custom_service');
