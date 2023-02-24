<?php
/**
 * The template for displaying Author info box
 */

 if ( false === viva_get_option ( 'tek-author-box' ) ) {
 	return;
 }

 // Initialize needed variables
 global $authordata;
 $author_id = is_object( $authordata ) ? $authordata->ID : -1;
 ?>
  <?php if ('' != get_the_author_meta( 'description', $author_id )) : ?>
    <div class="author-box-separator"></div>
    <div class="author-box-wrapper">
      <figure class="author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), 85 ); ?>
      </figure>
      <div class="author-desc-wrapper">
        <div class="author-name">
          <h6><?php echo apply_filters( 'kd_blog_author_label', __("Author:", "viva") ); ?> <?php the_author_posts_link(); ?></h6>
        </div>
        <?php if ('' != get_the_author_meta( 'user_url', $author_id )) : ?>
          <div class="author-website">
            <p><?php esc_html_e('Website:', 'viva'); ?> <a href="<?php echo get_the_author_meta( 'user_url', $author_id ); ?>"><?php echo get_the_author_meta( 'user_url', $author_id ); ?></a></p>
          </div>
        <?php endif; ?>
        <div class="author-desc">
          <?php echo get_the_author_meta( 'description', $author_id ); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
