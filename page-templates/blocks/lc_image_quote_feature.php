<section class="image_quote_feature">
    <div class="container-xl my-5">
        <div class="image_quote_feature__grid">
            <?= wp_get_attachment_image(get_field('left_image'), 'full', false, [
                'class' => 'image_quote_feature__left img-fluid',
                'data-aos' => 'fade-right'
            ]) ?>
            <div class="image_quote_feature__quote bg-white p-4" data-aos="fade">
                <blockquote class="blockquote mb-0">
                    "<?= get_field('quote') ?>"
                </blockquote>
            </div>
            <?= wp_get_attachment_image(get_field('right_image'), 'full', false, [
                'class' => 'image_quote_feature__right img-fluid',
                'data-aos' => 'fade-left'
            ]) ?>
        </div>
    </div>
</section>