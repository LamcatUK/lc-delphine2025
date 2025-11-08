<?php

// Rename default 'post' post type to 'Portfolio' using WordPress standard filter
add_filter('post_type_labels_post', 'rename_post_to_portfolio');
function rename_post_to_portfolio($labels)
{
    $labels->name               = 'Portfolio';
    $labels->singular_name      = 'Portfolio Item';
    $labels->add_new            = 'Add New';
    $labels->add_new_item       = 'Add New Item';
    $labels->edit_item          = 'Edit Item';
    $labels->new_item           = 'Item';
    $labels->view_item          = 'View Item';
    $labels->search_items       = 'Search Items';
    $labels->not_found          = 'No items found';
    $labels->not_found_in_trash = 'No items found in Trash';
    $labels->all_items          = 'All Items';
    $labels->menu_name          = 'Portfolio';
    $labels->name_admin_bar     = 'Portfolio Item';

    return $labels;
}

// Register Testimonial custom post type
function register_testimonial_cpt()
{
    $labels = [
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'new_item'           => 'New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'view_item'          => 'View Testimonial',
        'all_items'          => 'All Testimonials',
        'search_items'       => 'Search Testimonials',
        'not_found'          => 'No testimonials found.',
        'not_found_in_trash' => 'No testimonials found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,           // Not publicly accessible
        'publicly_queryable' => false,           // Prevent frontend querying
        'show_ui'            => true,            // Show in admin UI
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => ['title', 'editor', 'thumbnail'],
        'show_in_rest'       => true, // Enable block editor
    ];

    register_post_type('testimonial', $args);
}
add_action('init', 'register_testimonial_cpt');

