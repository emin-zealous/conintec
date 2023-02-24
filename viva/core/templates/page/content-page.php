<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package viva
 * by KeyDesign
 */

?>

<section id="single-page" class="section <?php echo esc_attr($post->post_name);?>">
    <div class="container">
			<?php do_action( 'viva_page_before_main_content' ); ?>
			<div class="row single-page-content">
				<?php if ( is_active_sidebar( 'bbpress-sidebar' ) && class_exists( 'bbPress' ) && is_bbpress() ) : ?>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<?php endif; ?>
							<?php the_content(); ?>
							<?php wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'viva' ),
									'after'  => '</div>',
								)
							); ?>
						<?php if ( is_active_sidebar( 'bbpress-sidebar' ) && class_exists( 'bbPress' ) && is_bbpress() ) : ?>
					</div>
			    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			      <div class="right-sidebar">
					     <?php dynamic_sidebar( 'bbpress-sidebar' ); ?>
			      </div>
					</div>
			  <?php endif; ?>
			</div>
			<?php do_action( 'viva_page_after_main_content' ); ?>
    </div>
</section>
