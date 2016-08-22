<?php

////////////////////////////////////////////////////////////////////
// Add admin.css enqueue
////////////////////////////////////////////////////////////////////

    function devdm_theme_style() {
        wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin.css');
        wp_enqueue_script('admin-scripts', get_stylesheet_directory_uri() . '/js/admin.js', array( 'jquery' ),false,true );
    }
    add_action('admin_enqueue_scripts', 'devdm_theme_style');

////////////////////////////////////////////////////////////////////
// Custom header theme support
////////////////////////////////////////////////////////////////////

    register_default_headers( array(
        'wheel' => array(
            'url' => '%s/img/OnTap-logo.png',
            'thumbnail_url' => '%s/img/OnTap-logo.png',
            'description' => __( 'On Tap Theme', 'devdmbootstrap' )
        ))

    );

    $defaults = array(
        'default-image'          => get_template_directory_uri() . '/img/OnTap-logo.png',
        'header-text'            => false,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
    );
    add_theme_support( 'custom-header', $defaults );

?>
