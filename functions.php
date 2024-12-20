<?php 
// tgm activation
require_once get_template_directory(). '/tgm/active-tgm.php';

// theme option
require_once get_template_directory(). '/theme-options/theme-option.php';

// custom post type
require_once get_template_directory(). '/inc/custom-post.php';

// after setup theme

if(!function_exists('novena_setup_theme')){
    function novena_setup_theme(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', 
            array( 'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script' ) 
        );

        // domain load
        load_theme_textdomain('novena', '/languages');

        // register nav maneu
        register_nav_menus(array(
            'header-menu' => esc_html__('Header Menu', 'novena')
        ));
    }
}
add_action('after_setup_theme', 'novena_setup_theme');


// css js enqueue
get_template_part('inc/css-js');



