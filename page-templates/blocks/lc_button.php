<?php
$l = get_field('link');
?>
<section>
    <div class="container-xl text-center">
        <a href="<?= $l['url'] ?>" target="<?= $l['target'] ?>" class="button"><?= $l['title'] ?></a>
    </div>
</section>