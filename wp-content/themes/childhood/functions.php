<?php
    add_action('wp_enqueue_scripts', 'childhood_styles');
    add_action('wp_enqueue_scripts', 'childhood_scripts');

    function childhood_styles() {
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
    };

    function childhood_scripts() {
        wp_enqueue_script('childhood-script', get_template_directory_uri() . '/js/script.js', 
            array(), null, true);

        wp_deregister_script('jquery');
        wp_register_script('jquery','https://code.jquery.com/jquery-3.7.1.min.js');
        wp_enqueue_script('jquery');
    };

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    // add class for each <li>
    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    // 10-priority, 3-number of arguments
    function filter_nav_menu_link_attributes($atts,$item,$args) {
        if($args->menu === 'Main') {
            $atts['class'] = 'header__nav-item';
            if($item->current) {
                $atts['class'] .= ' header__nav-item-active';
            }
            // print_r($item);   // to know ID
            if($item->ID === 176 && (in_category('soft_toys') || in_category('education_toys'))) {
                $atts['class'] .= ' header__nav-item-active';
            }       
        }
        return $atts;
    };
?>