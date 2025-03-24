<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option('page_for_posts');
$bg = get_the_post_thumbnail_url($page_for_posts, 'full');

get_header();
?>
<main id="main" class="main">
    <section class="hero mb-5">
        <div class="container-xl">
            <div class="hero__inner">
                <h1 class="mb-0">Delphine's Portfolio</h1>
                <div class="fs-600">My Latest Creations</div>
                <?php
                include __DIR__ . '/page-templates/blocks/lc_divider.php';
                ?>
                <div class="hero__cta">
                    <a href="/book-appointment/" class="button">Book Your Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl py-5 brides">
        <section class="portfolio">
            <div class="container-xl py-5">
                <div class="portfolio__grid">
                    <?php
                    $q = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => -1
                    ]);
                    if ($q->have_posts()) {
                        $d = 0;
                        while ($q->have_posts()) {
                            $q->the_post();
                    ?>
                            <div class="portfolio__item">
                                <a href="<?= get_the_permalink() ?>">
                                    <?= get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'img-fluid d-block w-100', 'alt' => get_the_title()]) ?>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
    </div>
    <section class="quote_cta has-gradient-background">
        <div class="container-xl text-center py-5">
            <div class="quote_cta__quote pb-5">Turn your ideas into your dream dress</div>
            <a href="/book-appointment/" class="button">Book Your Appointment</a>
        </div>
    </section>
</main>
<?php

get_footer();
?>