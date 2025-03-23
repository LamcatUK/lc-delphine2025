<section class="countup">
    <div class="container-xl py-5">
        <?php
        if (get_field('title')) {
        ?>
            <h2 class="text-center fs-300 ff-body fw-bold text-uppercase"><?= get_field('title') ?></h2>
        <?php
        }
        ?>
        <div class="row justify-content-center">
            <?php
            while (have_rows('numbers')) {
                the_row();
            ?>
                <div class="col-md-4 text-center">
                    <?= do_shortcode('[countup start="0" end="' . get_sub_field('number') . '" duration="4" scroll="true"]') ?>
                    <div class="fs-300 fw-bold mt-2">
                        <?= get_sub_field('title') ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>