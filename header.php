<?php
/**
 * Site header.
 *
 * @package LSIT_Agency
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">LSIT <span>Agency</span></a>
			<?php endif; ?>
		</div>
		<button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'lsit-agency' ); ?>" aria-expanded="false">&#9776;</button>
		<nav class="main-nav" aria-label="<?php esc_attr_e( 'Primary', 'lsit-agency' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => 'lsit_fallback_menu',
				)
			);
			?>
		</nav>
	</div>
</header>
<main id="content">
