<section class="services py-5<?= in_array('Yes', (array) get_field('has_background')) ? ' has-gradient-background' : '' ?>">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
        ?>
            <h2 class="text-center"><?= get_field('title') ?></h2>
        <?php
            include __DIR__ . '/lc_divider.php';
        }
        ?>
        <div class="row justify-content-center">
            <?php
            # get child pages of 'services' page
            $args = array(
                'post_type'      => 'page',
                'post_parent'    => get_page_by_path('services')->ID,
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );
            $services = new WP_Query($args);
            if ($services->have_posts()) {
                $d = 0;
                while ($services->have_posts()) {
                    $services->the_post();
            ?>
                    <div class="col-lg-4">
                        <a class="service_card" href="<?php the_permalink(); ?>" data-aos="fade" data-aos-delay="<?= $d ?>">
                            <?= get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'img-fluid service_card__image')) ?>
                            <div class="service_card__info">
                                <h3><?php the_title(); ?></h3>
                                <div><?= get_field('card_intro', get_the_ID()) ?></div>
                            </div>
                        </a>
                    </div>
            <?php
                    $d += 100;
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
        if (in_array('Yes', (array) get_field('show_cta'))) {
        ?>
            <div class="text-center mt-5">
                <a href="/book-appointment/" class="button">Book Your Appointment</a>
            </div>
        <?php
        }
        ?>
    </div>
</section>