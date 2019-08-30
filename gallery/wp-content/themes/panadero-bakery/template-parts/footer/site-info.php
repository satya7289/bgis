<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage panadero-bakery
 * @since 1.0
 * @version 1.4
 */

?>

<div class="site-info">
	<p><?php echo esc_html(get_theme_mod('panadero_bakery_footer_copy',__('Bakery WordPress Theme By','panadero-bakery'))); ?> <?php panadero_bakery_credit(); ?></p>
</div>