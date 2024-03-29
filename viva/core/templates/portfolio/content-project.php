<?php
/**
 * Template part for displaying the portfolio page content
 *
 * @package viva
 * by KeyDesign
 */

?>

<?php
	$load_nav = $load_related = $load_comments = '';
	$page_bgcolor = get_post_meta( get_the_ID(), 'keydesign_page_bgcolor', true );
	$page_background_color = ' background-color:'.$page_bgcolor.';';
	$top_padding = get_post_meta( get_the_ID(), 'keydesign_page_top_padding', true );
	$bottom_padding = get_post_meta( get_the_ID(), 'keydesign_page_bottom_padding', true );
	if ( viva_get_option( 'tek-portfolio-single-nav' ) == true ) {
		$load_nav = true;
	}
	if ( viva_get_option( 'tek-portfolio-related-posts' ) == true ) {
		$load_related = true;
	}
	if ( viva_get_option( 'tek-portfolio-comments' ) == true ) {
		$load_comments = true;
	}
?>

<section id="single-page" class="section portfolio-wrapper <?php echo esc_attr( $post->post_name );?>" style="
	<?php echo ( !empty( $page_bgcolor ) ? esc_attr( $page_background_color ) : '' ); ?>
	<?php echo ( !empty( $top_padding ) ? ' padding-top:'. esc_attr( $top_padding ) .';' : '' );?>
	<?php echo ( !empty( $bottom_padding ) ? ' padding-bottom:'. esc_attr( $bottom_padding ) .';' : '' );?> ">
    <div class="container">
			<div class="row single-page-content portfolio-single">
				<?php the_content(); ?>
			</div>
    </div>
</section>
<?php if ( $load_nav ) : ?>
	<?php get_template_part( 'core/templates/portfolio/content', 'project-nav' ); ?>
<?php endif; ?>

<?php if ( $load_related ) : ?>
	<?php get_template_part( 'core/templates/portfolio/content', 'project-related' ); ?>
<?php endif; ?>

<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( $load_comments ) :
		if ( comments_open() || get_comments_number() ) : ?>
			<div class="page-content comments-content container">
				<?php comments_template(); ?>
			</div>
		<?php endif;
	endif;
?>
