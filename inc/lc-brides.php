<?php
function rename_default_post_type()
{
    global $menu, $submenu;

    // Rename "Posts" in the main admin menu
    $menu[5][0] = 'Real Brides';

    // Rename sub-menu items
    if (isset($submenu['edit.php'])) {
        $submenu['edit.php'][5][0] = 'All Brides';
        $submenu['edit.php'][10][0] = 'Add New Bride';
        $submenu['edit.php'][15][0] = 'Categories'; // If you want to keep categories
        $submenu['edit.php'][16][0] = 'Tags'; // If you want to keep tags
    }
}

add_action('admin_menu', 'rename_default_post_type');

function rename_post_object_labels($args)
{
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Real Brides';
    $labels->singular_name = 'Bride';
    $labels->add_new = 'Add New Bride';
    $labels->add_new_item = 'Add New Bride';
    $labels->edit_item = 'Edit Bride';
    $labels->new_item = 'New Bride';
    $labels->view_item = 'View Bride';
    $labels->search_items = 'Search Brides';
    $labels->not_found = 'No brides found';
    $labels->not_found_in_trash = 'No brides found in Trash';
    $labels->all_items = 'All Brides';
    $labels->menu_name = 'Real Brides';
    $labels->name_admin_bar = 'Bride';
}

add_action('init', 'rename_post_object_labels');


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
