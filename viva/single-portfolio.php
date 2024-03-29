<?php
/**
 * The template for displaying portfolio pages.
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'core/templates/portfolio/content', 'project' );
			endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>
