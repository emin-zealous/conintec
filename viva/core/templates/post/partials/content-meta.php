<?php
/**
 * The template used for displaying meta information for single Blog posts
 */
 ?>
<?php
  $blog_template = $global_post_meta= $post_content = '';

  $blog_template = apply_filters( 'viva_blog_listing_template', viva_get_option( 'tek-blog-template' ) );
  $global_post_meta = viva_get_option( 'tek-post-meta' );

  $post_meta_date = viva_get_option( 'tek-post-meta-date' );
  $post_meta_author = viva_get_option( 'tek-post-meta-author' );
  $post_meta_categories = viva_get_option( 'tek-post-meta-categories' );
  $post_meta_comments = viva_get_option( 'tek-post-meta-comments' );

  if ( ! class_exists( 'ReduxFramework' ) ) {
    $global_post_meta = $post_meta_date = $post_meta_author = $post_meta_categories = $post_meta_comments = true;
    $blog_template = 'img-top-list';
  }

// Last updated time
$post_published = get_the_time('U');
$post_modified_time = get_the_modified_time('U');
if ( ($post_modified_time >= $post_published + 86400) && viva_get_option( 'tek-post-meta-date-format' ) == 'last-updated' ) {
    $post_date_single = apply_filters( 'last-updated-text', esc_html__("Last updated on ", "viva") ) . get_the_modified_time( get_option('date_format') );
    $post_date_listing = get_the_modified_time( get_option('date_format') );
} else {
    $post_date_single = get_the_time( get_option('date_format') );
    $post_date_listing = get_the_time( get_option('date_format') );
}
?>

<?php if ( $global_post_meta == true ) : ?>
  <?php if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
      <?php if ( is_sticky() ) echo '<span class="sticky-post"><span class="fas fa-thumbtack"></span>' . apply_filters( 'sticky-post-text', esc_html__("Sticky", "viva") ) . '</span>'; ?>

      <?php if ( is_single() && $post_meta_date == true ) : ?>
        <span class="published">
          <span class="far fa-clock"></span>
          <?php echo esc_html( $post_date_single ); ?>
        </span>
      <?php elseif ( $post_meta_date == true ) : ?>
        <span class="published">
          <span class="far fa-clock"></span>
          <a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php echo esc_html( $post_date_listing ); ?></a>
        </span>
      <?php endif; ?>

      <?php if ( $post_meta_author == true ) : ?>
        <span class="author"><span class="fas fa-keyboard"></span><?php the_author_posts_link(); ?></span>
      <?php endif; ?>

      <?php if ( $post_meta_categories == true ) : ?>
        <?php if ( $blog_template != 'detailed-grid' ) : ?>
          <span class="blog-label"><span class="fa viva-file-text"></span><?php the_category(', '); ?></span>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ( ! is_single() && $post_meta_comments == true ) : ?>
        <?php if ( $blog_template == 'img-top-list' || $blog_template == 'minimal-list' ) : ?>
          <span class="comment-count"><span class="fas viva-message-circle"></span><?php comments_popup_link( esc_html__( 'No comments yet', 'viva' ), esc_html__( '1 comment', 'viva' ), esc_html__( '% comments', 'viva' ) ); ?></span>
        <?php elseif ( $blog_template == 'detailed-grid' ) : ?>
          <span class="comment-number"><span class="fas viva-message-circle"></span><?php echo get_comments_number(); ?></span>
        <?php elseif ( $blog_template == 'img-left-list' ) : ?>
          <span class="comment-count"><span class="fas viva-message-circle"></span><?php echo get_comments_number(); ?></span>
        <?php endif; ?>
      <?php endif; ?>

    </div>
  <?php else : ?>
		<div class="entry-meta">
			<?php if ( $post_meta_date == true ) : ?>
				<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></span>
			<?php endif; ?>
		</div>
	<?php endif; ?>
<?php endif; ?>
