<section class="pushthrough py-5<?= in_array('Yes', (array) get_field('has_background')) ? ' has-gradient-background' : '' ?>">
    <div class="container-xl text-center">
        <?php
        if (get_field('title')) {
        ?>
            <h2 class="mb-4"><?= get_field('title') ?></h2>
        <?php
        }
        if (get_field('subtitle')) {
        ?>
            <div class="fs-600 mb-3"><?= get_field('subtitle') ?></div>
        <?php
        }
        if (get_field('content')) {
        ?>
            <div class="w-constrained mb-4"><?= get_field('content') ?></div>
        <?php
        }
        $l = get_field('link');
        ?>
        <a href=" <?= $l['url'] ?>" class="button" target="<?= $l['target'] ?>"><?= $l['title'] ?></a>
    </div>
</section>