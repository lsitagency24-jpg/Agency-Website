<?php
/**
 * Single posts and pages.
 *
 * @package LSIT_Agency
 */

get_header();
?>
<div class="content-area">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if ( is_single() ) : ?>
					<div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
				<?php endif; ?>
				<?php the_post_thumbnail( 'large' ); ?>
				<div class="entry-content"><?php the_content(); ?></div>
			</article>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</div>
</div>
<?php
get_footer();
