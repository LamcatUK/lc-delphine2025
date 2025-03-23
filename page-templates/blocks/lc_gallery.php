<section class="gallery py-5">
    <div class="container-xl">
        <div class="gallery__container" id="masonry-grid">
            <?php
            foreach (get_field('gallery') as $img) {
            ?>
                <div class="gallery__item">
                    <a href="<?= wp_get_attachment_image_url($img, 'full') ?>" class="glightbox" data-gallery="gallery1">
                        <?= wp_get_attachment_image($img, 'large', false, array('class' => 'gallery__img')) ?>
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
    <script>
        var elem = document.querySelector('#masonry-grid');
        var msnry = new Masonry(elem, {
            itemSelector: '.gallery__item', // Select the grid items
            columnWidth: '.gallery__item', // Base column width on the size of the items
            percentPosition: true, // Enable percentage-based positioning for responsiveness
            gutter: 10 // Add space between the items (in pixels)
        });

        imagesLoaded(elem, function() {
            msnry.layout();
        });

        const lightbox = GLightbox({
            selector: '.glightbox', // Target all links with this class
            touchNavigation: true, // Touch support for mobile devices
            loop: true, // Loop through the images
            zoomable: true // Allow zooming on images
        });
    </script>
<?php
}, 9999);
