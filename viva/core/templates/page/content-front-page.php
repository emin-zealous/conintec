<?php
/**
 * Displays content for front page
 *
 * @package viva
 * by KeyDesign
 */

?>

<section id="<?php echo esc_attr($post->post_name);?>" class="section">
   <div class="container" >
      <div class="row">
         <?php the_content(); ?>
      </div>
   </div>
</section>
