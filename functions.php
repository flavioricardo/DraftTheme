<?php

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Create WP Nav Menus
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'draft'),
        'social' => __('Social Links Menu', 'draft'),
    ) );

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Switch default core markup for search form, comment form, and comments
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    // Enable support for Post Formats
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    // Localisation Support
    load_theme_textdomain(get_template_directory() . '/languages');
}

if (function_exists('register_sidebar'))
{
    // Define Sidebar 1
    register_sidebar(array(
        'name' => __('Sidebar 1'),
        'id' => 'sidebar-1',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar 2
    register_sidebar(array(
        'name' => __('Sidebar 2'),
        'id' => 'sidebar-2',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

if ( ! current_user_can( 'manage_options' ) )
{
    show_admin_bar( false );
}

if ( ! isset( $content_width ) ) $content_width = 900;

?>