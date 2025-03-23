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
                <h1 class="mb-0">Real Brides</h1>
                <div class="fs-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, rem!</div>
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
        <?php
        if (get_the_content(null, false, $page_for_posts)) {
            echo '<div class="mb-5">' . get_the_content(null, false, $page_for_posts) . '</div>';
        }
        ?>
        <div class="row g-5">
            <?php
            $postIndex = 0;
            $columnsPerRow = 3;
            $first = true;

            while (have_posts()) {
                the_post();

                $img = get_the_post_thumbnail(get_the_ID(), 'large', ['class' => 'brides__img']) ?: '<img src="' . get_stylesheet_directory_uri() . '/img/default-blog.jpg" class="brides__img">';

                // Set delay for grid items (reset on each row)
                if ($first) {
                    $delay = 0;
                } else {
                    $delay = ($postIndex % $columnsPerRow) * 200;
                }

                // Output the grid item
            ?>
                <div class="col-md-6 col-lg-4<?= $first ? ' brides__item--first' : '' ?>">
                    <a href="<?= get_the_permalink() ?>"
                        class="brides__item"
                        data-aos="fade"
                        data-aos-delay="<?= $delay ?>">
                        <div class="brides__image">
                            <?= $img ?>
                        </div>
                        <div class="brides__inner">
                            <h3><?= get_field('title') ?: get_the_title() ?></h3>
                        </div>
                    </a>
                </div>
            <?php

                if ($first) {
                    $first = false;
                } else {
                    $postIndex++;
                }
            }
            ?>
        </div>

        <div class="mt-5"><?= understrap_pagination() ?></div>
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