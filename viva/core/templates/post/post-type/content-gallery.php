<?php if ( is_single() ) : ?>
	<?php if ( get_post_gallery() ) : ?>
		<div class="entry-gallery">
			<?php echo get_post_gallery(); ?>
		</div>
	<?php endif; ?>
<?php else: ?>
	<?php if ( '' !== get_the_post_thumbnail() ) : ?>
		<div class="entry-image">
	    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	      <?php the_post_thumbnail('large'); ?>
	    </a>
		</div>
	<?php endif; ?>
<?php endif; ?>
