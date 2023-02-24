<?php
/**
 * Template part for displaying portfolio item boxes
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
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-image">
			<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('keydesign-grid-image'); ?></a>
		</div>
	<?php endif; ?>
	<div class="entry-categories">
		<ul class="post-categories">
			<?php
				$terms = get_the_terms( $post->ID, 'portfolio-category' );
				foreach ( $terms as $term ) {
        	$term_link = get_term_link( $term, 'portfolio-category' );
          if ( is_wp_error( $term_link ) ) {
            continue;
					} else {
						echo '<li><a href="' . $term_link . '" rel="category tag">' . $term->name . '</a></li>';
					}
        }
			?>
		</ul>
	</div>
	<div class="entry-wrapper <?php echo esc_attr( $without_image_class ); ?>">
		<h5 class="blog-single-title"><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
		<div class="post-button-wrapper">
			<a class="post-grid-button" href="<?php esc_url( the_permalink() ); ?>"><?php echo apply_filters( 'portfolio_related_grid_text', esc_html__("View project", "viva") ); ?></a>
		</div>
	</div>
</article>
