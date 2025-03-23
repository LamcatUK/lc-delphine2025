<section class="real_brides<?= in_array('Yes', (array) get_field('has_background')) ? ' has-gradient-background' : '' ?>">
    <div class="container-xl py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Real Brides</h2>
            <a href="/real-brides/" class="has-arrow">See More</a>
        </div>
        <?php
        $q = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3
        ]);
        if ($q->have_posts()) {
            echo '<div class="row g-5 mb-5">';
            $d = 0;
            while ($q->have_posts()) {
                $q->the_post();
        ?>
                <div class="col-md-4">
                    <a href="<?= get_the_permalink($q->ID) ?>" class="real_brides__card" data-aos="fade" data-aos-delay="<?= $d ?>">
                        <div class="real_brides__image">
                            <?= get_the_post_thumbnail(null, 'large', ['class' => 'img-fluid']) ?>
                        </div>
                        <h3><?= get_the_title() ?></h3>
                    </a>
                </div>
        <?php
                $d += 100;
            }
            echo '</div>';
        }
        ?>
        <div class="text-center">
            <a href="/book-appointment/" class="button button--light">Book Your Appointment</a>
        </div>
    </div>
</section>