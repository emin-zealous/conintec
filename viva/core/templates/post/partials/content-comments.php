<?php
/**
 * The template used for displaying comments for single Blog posts
 */

if ( comments_open() || '0' != get_comments_number() ) : ?>
    <section class="page-content comments-content">
      <div class="container single-comments-area">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          	<?php comments_template(); ?>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>
