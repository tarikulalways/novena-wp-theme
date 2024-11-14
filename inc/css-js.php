<?php 
    if(!function_exists('novena_css_js_enqueue')){
        function novena_css_js_enqueue() {
            // css enqueue
        
            // Favicon
            echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/images/favicon.ico" />';
            // Bootstrap CSS
            wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', array(), '4.6.0', 'all');
            // Icon Font CSS
            wp_enqueue_style('icofont', get_template_directory_uri() . '/plugins/icofont/icofont.min.css', array(), '1.0.1', 'all');
            // Slick Slider CSS
            wp_enqueue_style('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.css', array(), '1.8.1', 'all');
            wp_enqueue_style('slick-theme', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick-theme.css', array(), '1.8.1', 'all');
            // Main Stylesheet
            wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
            // custom style
            wp_enqueue_style('custom-style', get_stylesheet_uri());
        
        
        
            // js enqueue
        
            // Bootstrap
            wp_enqueue_script('popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.js', array('jquery'), '4.3.2', true);
            wp_enqueue_script('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), '4.3.2', true);
            // Counterup dependencies
            wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/plugins/counterup/jquery.easing.js', array('jquery'), '1.4.1', true);
            wp_enqueue_script('waypoints', get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.min.js', array('jquery'), '4.0.1', true);
            wp_enqueue_script('counterup', get_template_directory_uri() . '/plugins/counterup/jquery.counterup.min.js', array('jquery'), '2.1.0', true);
            // Slick Slider
            wp_enqueue_script('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.min.js', array('jquery'), '1.8.1', true);
            // Shuffle.js
            wp_enqueue_script('shuffle', get_template_directory_uri() . '/plugins/shuffle/shuffle.min.js', array(), '5.0.0', true);
            // Google Map
            wp_enqueue_script('google-map', get_template_directory_uri() . '/plugins/google-map/map.js', array(), '1.0', true);
            wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap', array(), null, true);
            // Custom scripts
            wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
            wp_enqueue_script('contact-script', get_template_directory_uri() . '/js/contact.js', array('jquery'), '1.0', true);
        }
    }
    add_action('wp_enqueue_scripts', 'novena_css_js_enqueue');

?>