<?php
/**
 * Template part for displaying standard posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package viva
 * by KeyDesign
 */

?>

<?php
	$without_image_class = '';

	if ( !has_post_thumbnail() ) {
		$without_image_class = 'without-image';
	}

	$global_post_meta = viva_get_option( 'tek-post-meta' );
	$post_meta_categories = viva_get_option( 'tek-post-meta-categories' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if (has_post_thumbnail()) : ?>
		<div class="entry-image">
			<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('keydesign-grid-image'); ?></a>
		</div>
	<?php endif; ?>
	<?php if ( $global_post_meta == true && $post_meta_categories == true ) : ?>
		<div class="entry-categories">
			<?php the_category(); ?>
		</div>
	<?php endif; ?>
	<div class="entry-wrapper <?php echo esc_attr( $without_image_class ); ?>">
		<h5 class="blog-single-title"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
		<?php get_template_part( 'core/templates/post/partials/content', 'meta' ); ?>
		<div class="entry-content">
			<p class="post-grid-excerpt"><?php echo apply_filters( 'viva_blog_detailed_grid_excerpt', get_the_excerpt() ); ?></p>
			<?php wp_link_pages(); ?>
		</div>
		<div class="post-button-wrapper">
			<a class="post-grid-button" href="<?php esc_url( the_permalink() ); ?>"><?php echo apply_filters( 'blog-readmore-text', esc_html__("Read more", "viva") ); ?></a>
		</div>
	</div>
</article>
