<?php
$id = !empty($block['anchor']) ? esc_attr($block['anchor']) : $block['id'];
?>
<section id="<?php echo $id; ?>" class="title_text">
    <div class="container-xl">
        <div class="row g-5">
            <div class="col-md-4">
                <h2><?= get_field('title') ?></h2>
            </div>
            <div class="col-md-8">
                <?= get_field('text') ?>
            </div>
        </div>
    </div>
</section>