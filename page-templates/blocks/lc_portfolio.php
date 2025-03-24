<section class="portfolio">
    <div class="container-xl py-5">
        <div class="portfolio__grid">
            <?php
            $q = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => -1
            ]);
            if ($q->have_posts()) {
                echo '<div class="row g-5 mb-5">';
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
                echo '</div>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>