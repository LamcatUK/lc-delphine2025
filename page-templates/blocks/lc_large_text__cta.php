<section class="large_text__cta">
    <div class="container-xl py-5">
        <div class="row g-5">
            <div class="col-md-8 text-center fs-600">
                <?= get_field('large_text') ?>
            </div>
            <div class="col-md-4">
                <div class="large_text__cta__card">
                    <div class="large_text__cta__title"><?= get_field('cta_title') ?></div>
                    <?php
                    $l = get_field('cta_link');
                    ?>
                    <div>
                        <a href="<?= $l['url'] ?>" class="button" target="<?= $l['target'] ?>"><?= $l['title'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>