<?php
/**
 * Homepage template.
 *
 * @package LSIT_Agency
 */

get_header();

$services = array(
	array( '📈', __( 'Digital Marketing', 'lsit-agency' ), __( 'Facebook, Instagram and Google ads that bring real customers, not just clicks.', 'lsit-agency' ) ),
	array( '💻', __( 'Web Development', 'lsit-agency' ), __( 'Fast, mobile-friendly WordPress and custom websites built to convert.', 'lsit-agency' ) ),
	array( '🔍', __( 'SEO', 'lsit-agency' ), __( 'Rank higher on Google and get steady organic traffic.', 'lsit-agency' ) ),
	array( '🎨', __( 'Branding & Design', 'lsit-agency' ), __( 'Logos, social media creatives and a brand identity people remember.', 'lsit-agency' ) ),
);

$stats = array(
	array( '150+', __( 'Happy Clients', 'lsit-agency' ) ),
	array( '300+', __( 'Projects Done', 'lsit-agency' ) ),
	array( '5+', __( 'Years Experience', 'lsit-agency' ) ),
	array( '24/7', __( 'Support', 'lsit-agency' ) ),
);

$email = get_theme_mod( 'contact_email', 'info@lsitagency.com' );
$phone = get_theme_mod( 'contact_phone' );
?>

<section class="hero">
	<div class="container">
		<h1><?php echo esc_html( get_theme_mod( 'hero_title', 'Grow Your Business With Digital Power' ) ); ?></h1>
		<p><?php echo esc_html( get_theme_mod( 'hero_text', 'We help brands grow with digital marketing, web development and creative design that delivers real results.' ) ); ?></p>
		<div class="actions">
			<a class="btn" href="<?php echo esc_url( get_theme_mod( 'hero_btn_url', '#contact' ) ); ?>"><?php echo esc_html( get_theme_mod( 'hero_btn_text', 'Get Started' ) ); ?></a>
			<a class="btn btn-outline" href="#services"><?php esc_html_e( 'Our Services', 'lsit-agency' ); ?></a>
		</div>
	</div>
</section>

<section id="services">
	<div class="container">
		<h2 class="section-title"><?php esc_html_e( 'Our Services', 'lsit-agency' ); ?></h2>
		<p class="section-sub"><?php esc_html_e( 'Everything your business needs to grow online, under one roof.', 'lsit-agency' ); ?></p>
		<div class="grid">
			<?php foreach ( $services as $service ) : ?>
				<div class="card">
					<div class="icon"><?php echo esc_html( $service[0] ); ?></div>
					<h3><?php echo esc_html( $service[1] ); ?></h3>
					<p><?php echo esc_html( $service[2] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="stats" id="about">
	<div class="container">
		<div class="grid">
			<?php foreach ( $stats as $stat ) : ?>
				<div>
					<div class="stat-num"><?php echo esc_html( $stat[0] ); ?></div>
					<div class="stat-label"><?php echo esc_html( $stat[1] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
// Content written on the page set as the static homepage appears here.
while ( have_posts() ) :
	the_post();
	if ( get_the_content() ) :
		?>
		<section>
			<div class="container entry-content"><?php the_content(); ?></div>
		</section>
		<?php
	endif;
endwhile;
?>

<section class="cta" id="contact">
	<div class="container">
		<div class="cta-box">
			<h2><?php esc_html_e( 'Ready to grow your business?', 'lsit-agency' ); ?></h2>
			<p><?php esc_html_e( "Tell us about your project and we'll get back to you within 24 hours.", 'lsit-agency' ); ?></p>
			<div class="actions">
				<?php if ( $email ) : ?>
					<a class="btn btn-outline" href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
				<?php endif; ?>
				<?php if ( $phone ) : ?>
					<a class="btn btn-outline" href="https://wa.me/<?php echo esc_attr( preg_replace( '/\D/', '', $phone ) ); ?>" target="_blank" rel="noopener">WhatsApp: <?php echo esc_html( $phone ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
