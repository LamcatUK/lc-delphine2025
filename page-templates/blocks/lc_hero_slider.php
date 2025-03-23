<?php
// Get gallery images
$slides = get_field('slides');

if ($slides) { ?>
    <section class="hero_slider">
        <div class="container-xl">
            <div id="heroSliderCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-indicators">
                    <?php
                    $a  = 'class="active" aria-current="true"';
                    $c = 0;
                    foreach ($slides as $index => $slide) {
                    ?>
                        <button type="button" data-bs-target="#heroSliderCarousel" data-bs-slide-to="<?= $c ?>" <?= $a ?> aria-label="Slide <?= $c ?>"></button>
                    <?php
                        $a = '';
                        $c++;
                    }
                    ?>
                </div>

                <div class="carousel-inner">
                    <?php
                    foreach ($slides as $index => $slide) {
                    ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <img src="<?= esc_url($slide['url']); ?>" class="d-block w-100" alt="<?= esc_attr($slide['alt']); ?>">
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>