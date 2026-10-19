<?php
/**
 * 404 template.
 *
 * @package LSIT_Agency
 */

get_header();
?>
<section class="hero">
	<div class="container">
		<h1>404</h1>
		<p><?php esc_html_e( 'Sorry, this page could not be found.', 'lsit-agency' ); ?></p>
		<a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'lsit-agency' ); ?></a>
	</div>
</section>
<?php
get_footer();
