<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

require_once LC_THEME_DIR . '/inc/lc-utility.php';
require_once LC_THEME_DIR . '/inc/lc-brides.php';
require_once LC_THEME_DIR . '/inc/lc-blocks.php';

// Remove unwanted SVG filter injection WP
// remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');


// Remove comment-reply.min.js from footer
function remove_comment_reply_header_hook()
{
    wp_deregister_script('comment-reply');
}
add_action('init', 'remove_comment_reply_header_hook');

add_action('admin_menu', 'remove_comments_menu');
function remove_comments_menu()
{
    remove_menu_page('edit-comments.php');
}

add_filter('theme_page_templates', 'child_theme_remove_page_template');
function child_theme_remove_page_template($page_templates)
{
    // unset($page_templates['page-templates/blank.php'],$page_templates['page-templates/empty.php'], $page_templates['page-templates/fullwidthpage.php'], $page_templates['page-templates/left-sidebarpage.php'], $page_templates['page-templates/right-sidebarpage.php'], $page_templates['page-templates/both-sidebarspage.php']);
    unset($page_templates['page-templates/blank.php'], $page_templates['page-templates/empty.php'], $page_templates['page-templates/left-sidebarpage.php'], $page_templates['page-templates/right-sidebarpage.php'], $page_templates['page-templates/both-sidebarspage.php']);
    return $page_templates;
}
add_action('after_setup_theme', 'remove_understrap_post_formats', 11);
function remove_understrap_post_formats()
{
    remove_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title'     => 'Site-Wide Settings',
            'menu_title'    => 'Site-Wide Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
        )
    );
}

function widgets_init()
{

    register_nav_menus(array(
        'primary_nav' => __('Primary Nav', 'lc-delphine2025'),
        'footer_menu1' => __('Footer Nav 1', 'lc-delphine2025'),
        'footer_menu2' => __('Footer Nav 2', 'lc-delphine2025'),
    ));

    unregister_sidebar('hero');
    unregister_sidebar('herocanvas');
    unregister_sidebar('statichero');
    unregister_sidebar('left-sidebar');
    unregister_sidebar('right-sidebar');
    unregister_sidebar('footerfull');
    unregister_nav_menu('primary');

    add_theme_support('disable-custom-colors');
    add_theme_support(
        'editor-color-palette',
        'align-wide',
        array(
            array(
                'name'  => 'Dark',
                'slug'  => 'dark',
                'color' => '#333333',
            ),
            array(
                'name'  => 'Light',
                'slug'  => 'light',
                'color' => '#f9f9f9',
            ),
        )
    );
}
add_action('widgets_init', 'widgets_init', 11);

// remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

//Custom Dashboard Widget
add_action('wp_dashboard_setup', 'register_cb_dashboard_widget');
function register_cb_dashboard_widget()
{
    wp_add_dashboard_widget(
        'cb_dashboard_widget',
        'Lamcat',
        'cb_dashboard_widget_display'
    );
}

function cb_dashboard_widget_display()
{
?>
    <div style="display: flex; align-items: center; justify-content: space-around;">
        <img style="width: 50%;"
            src="<?= get_stylesheet_directory_uri() . '/img/lc-full.jpg'; ?>">
        <a class="button button-primary" target="_blank" rel="noopener nofollow noreferrer"
            href="mailto:hello@lamcat.co.uk/">Contact</a>
    </div>
    <div>
        <p><strong>Thanks for choosing Lamcat!</strong></p>
        <hr>
        <p>Got a problem with your site, or want to make some changes & need us to take a look for you?</p>
        <p>Use the link above to get in touch and we'll get back to you ASAP.</p>
    </div>
<?php
}


// add_filter('wpseo_breadcrumb_links', function( $links ) {
//     global $post;
//     if ( is_singular( 'post' ) ) {
//         $t = get_the_category($post->ID);
//         $breadcrumb[] = array(
//             'url' => '/guides/',
//             'text' => 'Guides',
//         );

//         array_splice( $links, 1, -2, $breadcrumb );
//     }
//     return $links;
// }
// );

// remove discussion metabox
// function cc_gutenberg_register_files()
// {
//     // script file
//     wp_register_script(
//         'cc-block-script',
//         get_stylesheet_directory_uri() . '/js/block-script.js', // adjust the path to the JS file
//         array('wp-blocks', 'wp-edit-post')
//     );
//     // register block editor script
//     register_block_type('cc/ma-block-files', array(
//         'editor_script' => 'cc-block-script'
//     ));
// }
// add_action('init', 'cc_gutenberg_register_files');

function understrap_all_excerpts_get_more_link($post_excerpt)
{
    if (is_admin() || ! get_the_ID()) {
        return $post_excerpt;
    }
    return $post_excerpt;
}

//* Remove Yoast SEO breadcrumbs from Revelanssi's search results
add_filter('the_content', 'wpdocs_remove_shortcode_from_index');
function wpdocs_remove_shortcode_from_index($content)
{
    if (is_search()) {
        $content = strip_shortcodes($content);
    }
    return $content;
}

function cb_theme_enqueue()
{
    $the_theme = wp_get_theme();
    wp_enqueue_style('lightbox-stylesheet', "https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css", array(), $the_theme->get('Version'));
    wp_enqueue_script('lightbox-scripts', "https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js", array(), $the_theme->get('Version'), true);
    wp_enqueue_script('masonry-scripts', "https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js", array(), $the_theme->get('Version'), true);
    wp_enqueue_script('imagesloaded-scripts', "https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js", array(), $the_theme->get('Version'), true);
    // wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    // wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_style('aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array());
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
    wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css', array(), '4.1.3');
    wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js', array(), '4.1.3', true);
    wp_deregister_script('jquery');
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.3.min.js', array(), null, true);
    // wp_enqueue_script('parallax', get_stylesheet_directory_uri() . '/js/parallax.min.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'cb_theme_enqueue');


function add_custom_menu_item($items, $args)
{
    if ($args->theme_location == 'primary_nav') {
        $new_item = '<li class="d-lg-none menu-item menu-item-type-post_type menu-item-object-page nav-item mt-4 mb-3 fw-600"><i class="fal fa-phone-alt"></i> ' . do_shortcode('[contact_phone]') . '</li>';
        $new_item .= '<li class="d-lg-none menu-item menu-item-type-post_type menu-item-object-page nav-item mb-4 fw-600"><i class="fal fa-envelope"></i> ' . do_shortcode('[contact_email]') . '</li>';
        $items .= $new_item;
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'add_custom_menu_item', 10, 2);


add_filter( 'show_admin_bar', function( $show ) {
    if ( current_user_can( 'wpamelia-customer' ) ) {
        return false;
    }
    return $show;
});

add_action( 'admin_init', function() {
    if ( current_user_can( 'wpamelia-customer' ) && ! defined( 'DOING_AJAX' ) ) {
        wp_redirect( home_url( '/my-account/' ) );
        exit;
    }
});
// add_action( 'wp_footer', function () {
//     if ( is_user_logged_in() ) {
//         $user = wp_get_current_user();
//         echo '<pre>'; print_r( $user->roles ); echo '</pre>';
//     }
// });

add_action( 'wp_footer', 'custom_set_default_amelia_phone_country' );
function custom_set_default_amelia_phone_country() {
    if ( ! is_page( 'book-appointment' ) ) {
        return;
    }
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // console.log('Amelia phone country script loaded');
        const checkInterval = setInterval(() => {
            // Look for the Amelia country selector
            const countrySelector = document.querySelector('.am-selected-flag');
            const ukOption = document.querySelector('.el-select-dropdown__item .am-flag-gb');
            
            // console.log('Country selector:', countrySelector);
            // console.log('UK option:', ukOption);

            if (countrySelector && ukOption) {
                clearInterval(checkInterval);
                
                // Click the selector to open dropdown
                countrySelector.click();
                
                // Wait a moment for dropdown to open, then click UK option
                setTimeout(() => {
                    ukOption.closest('.el-select-dropdown__item').click();
                    // console.log('Country set to United Kingdom');
                }, 100);
            }
        }, 300);
    });
    </script>
    <?php
}
