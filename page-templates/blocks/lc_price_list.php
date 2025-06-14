<?php


?>
<div class="price-list">
	<?php
	while (have_rows('prices')) {
		the_row();
		?>
  <div class="price-item">
    <span class="name"><?= esc_html( get_sub_field( 'item' ) ); ?></span>
    <span class="price"><?= esc_html( get_sub_field( 'price' ) ); ?></span>
  </div>
		<?php
	}
	?>
</div>
