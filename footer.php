<?php
/**
 * Site footer.
 *
 * @package LSIT_Agency
 */
?>
</main>
<footer class="site-footer">
	<div class="container">
		<div class="social">
			<?php if ( get_theme_mod( 'facebook_url' ) ) : ?>
				<a href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) ); ?>" target="_blank" rel="noopener">Facebook</a>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'contact_email', 'info@lsitagency.com' ) ) : ?>
				<a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email', 'info@lsitagency.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'contact_email', 'info@lsitagency.com' ) ); ?></a>
			<?php endif; ?>
		</div>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container'      => false,
				'depth'          => 1,
				'fallback_cb'    => false,
			)
		);
		?>
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'lsit-agency' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
