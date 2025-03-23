<section class="hero mb-5">
    <?= wp_get_attachment_image(get_field('background'), 'full', false, ['class' => 'hero__bg']) ?>
    <div class="container-xl">
        <div class="hero__inner">
            <h1 class="mb-0"><?= get_field('title') ?></h1>
            <div class="fs-600"><?= get_field('intro') ?></div>
            <?php
            include __DIR__ . '/lc_divider.php';
            ?>
            <div class="hero__cta">
                <?php
                if (get_field('cta') ?? null) {
                    $l = get_field('cta');
                ?>
                    <a href="<?= $l['url'] ?>" target="<?= $l['target'] ?>" class="button"><?= $l['title'] ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>