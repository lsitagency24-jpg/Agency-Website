<?php
/**
 * Main template (blog, archives, search).
 *
 * @package LSIT_Agency
 */

get_header();
?>
<div class="content-area">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Nothing found.', 'lsit-agency' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer();
