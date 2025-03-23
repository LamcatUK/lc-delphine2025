<?php
function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'                => 'lc_portfolio', 
            'title'               => __('LC Portfolio'), 
            'category'            => 'layout',
            'icon'                => 'cover-image', 
            'render_template'    => 'page-templates/blocks/lc_portfolio.php', 
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_three_image_cta', 
            'title'               => __('LC Three Image CTA'), 
            'category'            => 'layout',
            'icon'                => 'cover-image', 
            'render_template'    => 'page-templates/blocks/lc_three_image_cta.php', 
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_pushthrough', 
            'title'               => __('LC Pushthrough'), 
            'category'            => 'layout',
            'icon'                => 'cover-image', 
            'render_template'    => 'page-templates/blocks/lc_pushthrough.php', 
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_large_text__cta', 
            'title'               => __('LC Large Text / CTA'), 
            'category'            => 'layout',
            'icon'                => 'cover-image', 
            'render_template'    => 'page-templates/blocks/lc_large_text__cta.php', 
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_counter',
            'title'               => __('LC Counter'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_counter.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_quote_cta',
            'title'               => __('LC Quote CTA'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_quote_cta.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_divider',
            'title'               => __('LC Divider'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_divider.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_find_us',
            'title'               => __('LC Find Us'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_find_us.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_short_faqs',
            'title'               => __('LC Short FAQs'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_short_faqs.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_testimonial_slider',
            'title'               => __('LC Testimonial Slider'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_testimonial_slider.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_real_brides',
            'title'               => __('LC Real Brides'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_real_brides.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_logo_slider',
            'title'               => __('LC Logo Slider'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_logo_slider.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_image_quote_feature',
            'title'               => __('LC Image Quote Feature'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_image_quote_feature.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_services',
            'title'               => __('LC Services'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_services.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_hero_slider',
            'title'               => __('LC Hero Slider'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_hero_slider.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_text_image',
            'title'               => __('LC Text Image'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_text_image.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false, 'anchor' => true),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_slider',
            'title'               => __('LC Slider'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_slider.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false, 'anchor' => true),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_gallery',
            'title'               => __('LC Gallery'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_gallery.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false, 'anchor' => true),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_title_text',
            'title'               => __('LC Title Text'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_title_text.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false, 'anchor' => true),
        ));


        acf_register_block_type(array(
            'name'                => 'lc_hero',
            'title'               => __('LC Hero'),
            'category'            => 'layout',
            'icon'                => 'cover-image',
            'render_template'    => 'page-templates/blocks/lc_hero.php',
            'mode'                => 'edit',
            'supports'            => array('mode' => false),
        ));
    }
}
add_action('acf/init', 'acf_blocks');


// Gutenburg core modifications
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{

    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }

    return $args;
}

// Helper function to detect if footer.php is being rendered
function is_footer_rendering()
{
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
    foreach ($backtrace as $trace) {
        if (isset($trace['file']) && basename($trace['file']) === 'footer.php') {
            return true;
        }
    }
    return false;
}

function modify_core_add_container($attributes, $content)
{
    if (is_footer_rendering()) {
        return $content;
    }

    ob_start();
    // $class = $block['className'];
?>
    <div class="container-xl">
        <?= $content ?>
    </div>
<?php
    $content = ob_get_clean();
    return $content;
}
