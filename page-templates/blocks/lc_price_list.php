<?php
/**
 * Price List Block Template
 *
 * Displays a list of prices and items.
 *
 * @package lc-delphine2025
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="container">
	<div class="price-list mx-auto">
		<?php
		while ( have_rows( 'prices' ) ) {
			the_row();
			?>
		<div class="price-list__item">
			<span class="name"><?= esc_html( get_sub_field( 'item' ) ); ?></span>
			<span class="price"><?= esc_html( get_sub_field( 'price' ) ); ?></span>
		</div>
			<?php
		}
		?>
	</div>
</div>
