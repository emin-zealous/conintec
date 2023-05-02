<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package viva
 * by KeyDesign
 */

$languages = array(
    'en_US' => array(
        'nothing_found' => 'Nothing Found',
        'search_error' => 'Sorry, but nothing matched your search terms. Please try again using different keywords.'
    ),
    'de_DE' => array(
        'nothing_found' => 'Nichts gefunden',
        'search_error' => 'Entschuldigung, nichts gefunden. Bitte versuchen Sie es mit anderen Schlüsselwörtern.'
    )
);

$current_language = get_locale();
?>

<section id="posts-content" class="container">
    <div class="row">
        <h2 class="section-title"><?php echo $languages[$current_language]['nothing_found']; ?></h2>
        <?php
        if (is_home() && current_user_can('publish_posts')) : ?>
            <p><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'viva'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>
        <?php elseif (is_search()) : ?>
            <p class="section-subheading"><?php echo $languages[$current_language]['search_error']; ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'viva'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section><!-- .no-results -->
