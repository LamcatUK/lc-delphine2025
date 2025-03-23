<section class="three_image_cta<?= in_array('Yes', (array) get_field('has_background')) ? ' has-gradient-background' : '' ?>">
    <div class="container-xl py-5">
        <div class="three_image_cta__grid mb-5">
            <div class="three_image_cta__image" data-aos="fade-right" data-aos-delay="0">
                <?= wp_get_attachment_image(get_field('images')[0], 'large') ?>
            </div>
            <div class="three_image_cta__image" data-aos="fade-up" data-aos-delay="200">
                <?= wp_get_attachment_image(get_field('images')[1], 'large') ?>
            </div>
            <div class="three_image_cta__image" data-aos="fade-left" data-aos-delay="400">
                <?= wp_get_attachment_image(get_field('images')[2], 'large') ?>
            </div>
        </div>
        <div class="three_image_cta__ctas d-flex justify-content-center flex-wrap gap-4">
            <?php
            if (!empty(get_field('cta_link_1'))) {
                $l = get_field('cta_link_1');
            ?>
                <a href=" <?= $l['url'] ?>" class="button" target="<?= $l['target'] ?>"><?= $l['title'] ?></a>
            <?php
            }
            if (!empty(get_field('cta_link_2'))) {
                $l = get_field('cta_link_2');
            ?>
                <a href=" <?= $l['url'] ?>" class="button" target="<?= $l['target'] ?>"><?= $l['title'] ?></a>
            <?php
            }
            ?>
        </div>
    </div>
</section>