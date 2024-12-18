<?php

// custom post

if(!function_exists('novena_custom_post')){
    function novena_custom_post(){
        // award custom post
        register_post_type('awards', array(
            'labels' => array(
                'name' => esc_html__('Awards', 'novena'),
                'singular_name' => esc_html__('Award', 'novena'),
                'add_new' => esc_html__('Add new award', 'novena'),
                'add_new_item' => esc_html__('Add new award item', 'novena')
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
            'menu_icon' => 'dashicons-awards'
        ));

        // testimonial
        register_post_type('testimonials', array(
            'labels' => array(
                'name' => esc_html__('Testimonial', 'novena'),
                'singular_name' => esc_html__('testimonial', 'novena'),
                'add_new' => esc_html__('Add new testimonial', 'novena'),
                'add_new_item' => esc_html__('Add new testimonial item', 'novena'),
                'featured_image' => esc_html__('Testimonial Image', 'novena'),
                'set_featured_image' => esc_html__('Set testimonial image', 'novena')
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
            'menu_icon' => 'dashicons-testimonial'
        ));
    }
    add_action('init', 'novena_custom_post');
}
