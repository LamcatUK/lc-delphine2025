<section class="testimonial_slider">
    <div class="container-xl py-5">
        <div class="row gy-4">
            <div class="col-md-4 pe-md-0">
                <div class="testimonial_slider__feature">
                    <?= wp_get_attachment_image(get_field('image'), 'full', false, ['class' => 'img-fluid', 'data-aos' => 'fade']) ?>
                </div>
            </div>
            <div class="col-md-8 ps-md-0 d-flex align-items-center">
                <div class="testimonial_slider__inner p-5" data-aos="fade">
                    <h2 class="h3">Testimonials</h2>

                    <div class="splide" id="testimonialSplide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php
                                $q = new WP_Query([
                                    'post_type' => 'testimonial',
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand'
                                ]);
                                if ($q->have_posts()) {
                                    while ($q->have_posts()) {
                                        $q->the_post();
                                ?>
                                        <li class="splide__slide testimonial_slider__item">
                                            <div class="testimonial_slider__item__content">
                                                <p><?= get_the_content() ?></p>
                                            </div>
                                            <div class="testimonial_slider__item__author">
                                                <?= get_the_post_thumbnail(get_the_ID(), 'thumbnail', ['class' => 'img-fluid']) ?>
                                                <h3><?= get_the_title() ?></h3>
                                            </div>
                                        </li>
                                <?php
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#testimonialSplide', {
                type: 'loop',
                autoplay: true,
                pauseOnHover: false,
                arrows: false,
                pagination: false,
                perPage: 1,
                speed: 600
            }).mount();
        });
    </script>
<?php
});
