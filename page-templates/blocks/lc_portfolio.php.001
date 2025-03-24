<section class="portfolio">
    <div class="container-xl py-5">
        <div class="portfolio__grid">
            <?php
            foreach (get_field('portfolio') as $i) {
            ?>
                <div class="portfolio__item">
                    <a href="<?= wp_get_attachment_image_url($i, 'full') ?>"
                        class="glightbox" data-gallery="gallery1"
                        data-glightbox="description:<?= wp_get_attachment_caption($i) ?: '' ?>">
                        <img src="<?= wp_get_attachment_image_url($i, 'full') ?>"
                            alt="image" class="d-block w-100" />
                        <?php
                        if (wp_get_attachment_caption($i)) {
                        ?>
                            <div class="portfolio__caption"><?= wp_get_attachment_caption($i) ?></div>
                        <?php
                        }
                        ?>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
    <script type="text/javascript">
        const lightbox = GLightbox();
    </script>
<?php
}, 9999);
