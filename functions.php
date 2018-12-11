<?php

// Add TGM Plugin Activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Add Theme Customizer Support
require_once get_template_directory() . '/inc/customizer.php';

if ( function_exists( 'add_theme_support' ) )
{
    // Enable Menu Support
    add_theme_support( 'menus' );

    // Enable Custom Header Support
    add_theme_support( 'custom-header', array('height' => 225, 'width' => 1920) );

    // Enable Custom Logo Support
    add_theme_support( 'custom-logo', array('height' => 78, 'width' => 105) );

    // Enable WordPress management for document title
    add_theme_support( 'title-tag' );

    // Enable Gutenberg Support
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );

    // Enable Thumbnail Support
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'large', 700, '', true ); // Large Thumbnail
    add_image_size( 'medium', 250, '', true ); // Medium Thumbnail
    add_image_size( 'small', 120, '', true ); // Small Thumbnail
    add_image_size( 'custom-size', 150, 290, true ); // Custom Thumbnail Size

    // Enables post and comment RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Enable support for Post Formats
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video'
    ) );

    // Enable Localisation Support
    load_theme_textdomain( 'draft', get_template_directory() . '/languages/' );

    // Switch default core markup for search form, comment form, and comments
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
}

// Create WP Nav Menus
register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'draft' ),
        'social' => __( 'Social Links Menu', 'draft' )
    )
);

if ( function_exists( 'register_sidebar' ) )
{
    // Define Sidebar 1
    register_sidebar( array(
        'name' => __( 'Sidebar 1' ),
        'id' => 'sidebar-1',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );

    // Define Sidebar 2
    register_sidebar( array(
        'name' => __( 'Sidebar 2' ),
        'id' => 'sidebar-2',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
}

if ( ! current_user_can( 'manage_options' ) )
{
    show_admin_bar( false );
}

?>