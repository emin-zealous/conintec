<?php
/**
 * The template for displaying portfolio category pages.
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="posts-content" class="container blog-minimal-grid" >
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 BlogFullWidth">
    <?php
	  	if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'core/templates/portfolio/project', 'minimal-grid' );
			endwhile;

      		/* Numeric posts pagination */
			viva_numeric_posts_nav();
		else :
			get_template_part( 'core/templates/post/content', 'none' );
		endif;
	?>
	</div>
</div>

<?php get_footer();?>
