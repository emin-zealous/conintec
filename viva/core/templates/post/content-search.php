<?php
/**
 * Template part for displaying posts with excerpts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package viva
 * by KeyDesign
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php get_template_part( 'core/templates/post/partials/content', 'meta' ); ?>
	<h2 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php if ( has_excerpt() ) {
			the_excerpt();
		} ?>
		<a class="tt_button tt_primary_button btn_primary_color hover_solid_secondary post_button" href="<?php esc_url(the_permalink()); ?>" data-text="<?php echo apply_filters( 'blog-readmore-text', esc_html__("Read more", "viva") ); ?>">
			<span class="prim_text"><?php echo apply_filters( 'blog-readmore-text', esc_html__("Read more", "viva") ); ?></span>
		</a>
	</div>
</article>
