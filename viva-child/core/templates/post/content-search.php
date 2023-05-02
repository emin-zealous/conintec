<?php

/**
 * Template part for displaying posts with excerpts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package viva
 * by KeyDesign
 */

$lang = array(
	'en_US' => 'Read more',
	'de_DE' => 'Weiteres',
);
$locale = get_locale();
$read_more_text = isset($lang[$locale]) ? $lang[$locale] : 'Read more';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php if (has_excerpt()) {
			the_excerpt();
		} ?>
		<a class="search-button-text" href="<?php esc_url(the_permalink()); ?>" data-text="<?php echo apply_filters('blog-readmore-text', esc_html__($read_more_text, 'viva')); ?>">
			<span class="prim_text"><?php echo apply_filters('blog-readmore-text', esc_html__($read_more_text, 'viva')); ?></span>
		</a>
	</div>
</article>
