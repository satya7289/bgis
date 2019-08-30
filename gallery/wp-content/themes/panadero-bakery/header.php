<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage panadero-bakery
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'panadero-bakery' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="container-fluid">
		<div class="row m-0">
			<div class="col-lg-3 col-md-3 logo">
		        <?php if( has_custom_logo() ){ panadero_bakery_the_custom_logo();
		           }else{ ?>
		          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		          <?php $description = get_bloginfo( 'description', 'display' );
		          if ( $description || is_customize_preview() ) : ?> 
		            <p class="site-description"><?php echo esc_html($description); ?></p>
		        <?php endif; }?>
			</div>
			<div class="col-lg-9 col-md-9 menu-top">
				<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','panadero-bakery'); ?></a></div>
				<div class="menu-section">
					<div class="nav">
						<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>