<section class="find_us">
    <div class="container-xl pt-5">
        <h2 class="mb-5" data-aos="fade">Find Us</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <ul class="fa-ul" data-aos="fade" data-aos-delay="100">
                    <li class="mb-3"><span class="fa-li"><i class="fal fa-phone-alt"></i></span> <?= do_shortcode('[contact_phone]') ?></li>
                    <li class="mb-3"><span class="fa-li"><i class="fal fa-envelope"></i></span> <?= do_shortcode('[contact_email]') ?></li>
                    <li class="mb-3"><span class="fa-li"><i class="fal fa-map-marker-alt"></i></span> <?= do_shortcode('[contact_address]') ?></li>
                    <?php
                    if (get_field('directions_link', 'option')) {
                    ?>
                        <li class="mb-3 fw-600"><span class="fa-li"><i class="fal fa-directions"></i></span> <a href="<?= get_field('directions_link', 'option') ?>" target="_blank">Get Directions</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="fa-ul" data-aos="fade" data-aos-delay="200">
                    <li><span class="fa-li"><i class="fal fa-clock"></i></span> <span class="fw-600">Opening Times</span>
                        <div class="mt-3">
                            <?= do_shortcode('[lc_open_ajax]') ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <iframe data-aos="fade" data-aos-delay="200" src="<?= get_field('maps_url', 'options') ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="d-block"></iframe>

    </div>
</section>