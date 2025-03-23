<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5 py-4">
    <div class="container-xl">
        <div class="row g-5 pb-5">
            <div class="col-md-3 text-center text-md-start">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/delphine-logo.png" alt="Delphine Couture" class="w-75">
            </div>
            <div class="col-md-3">
                <?= wp_nav_menu(array('theme_location' => 'footer_menu1', 'container_class' => 'footer__menu')) ?>
            </div>
            <div class="col-md-2">
                <?= wp_nav_menu(array('theme_location' => 'footer_menu2', 'container_class' => 'footer__menu')) ?>
            </div>
            <div class="col-md-4">
                <ul class="fa-ul">
                    <?php
                    if (get_field('footer_opening_times', 'option') ?? null) {
                    ?>
                        <li class="mb-1"><span class="fa-li"><i class="fal fa-clock"></i></span> <?= get_field('footer_opening_times', 'option') ?></li>
                    <?php
                    }
                    ?>
                    <li class="mb-1"><span class="fa-li"><i class="fal fa-phone-alt"></i></span> <?= do_shortcode('[contact_phone]') ?></li>
                    <li class="mb-3"><span class="fa-li"><i class="fal fa-envelope"></i></span> <?= do_shortcode('[contact_email]') ?></li>
                    <li class="mb-1"><?= do_shortcode('[social_icons class="d-flex justify-content-start gap-4"]') ?></li>
                </ul>
            </div>
        </div>

        <div class="colophon d-flex justify-content-between align-items-center flex-wrap">
            <div>
                &copy; <?= date('Y') ?> Delphine Couture
            </div>
            <div>
                Site by <a href="https://www.lamcat.co.uk/" rel="nofollow noopener" target="_blank" class="lc" title="Site by Lamcat">Lamcat</a>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>