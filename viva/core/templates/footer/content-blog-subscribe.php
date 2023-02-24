<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

$subscribe_section_style = '';
$subscribe_section_visibility = viva_get_option( 'tek-blog-subscribe-section-show' );
$display_subscribe_form = $single_pages_check = $archive_pages_check = $blog_pages_check = false;

if ( $subscribe_section_visibility == 'blog-single-pages' && is_singular( 'post' ) ) {
    $single_pages_check = true;
}

if ( $subscribe_section_visibility == 'archive-pages' && viva_is_blog_archive() ) {
    $archive_pages_check = true;
}

if ( $subscribe_section_visibility == 'all-blog-pages' && ( viva_is_blog_archive() || is_singular( 'post' ) ) ) {
    $blog_pages_check = true;
}

if ( $single_pages_check || $archive_pages_check || $blog_pages_check ) {
    $display_subscribe_form = true;
    $subscribe_section_bg = viva_get_option( 'tek-blog-subscribe-section-bg-image' );
    $subscribe_text_color = viva_get_option( 'tek-blog-subscribe-text-color' );
    if ( isset( $subscribe_section_bg['url'] ) && '' != $subscribe_section_bg['url'] ) {
        $subscribe_section_style = 'background-image:url('.esc_url( $subscribe_section_bg['url'] ) .');';
    }
    if ( viva_get_option( 'tek-blog-subscribe-fixed-background' ) ) {
        $subscribe_section_style .= 'background-attachment:fixed;';
    }
}

if ( viva_get_option( 'tek-blog-subscribe-bg-overlay' ) != '' ) {
    $overlay_color = viva_get_option( 'tek-blog-subscribe-bg-overlay' );
}
?>

<?php if ( $display_subscribe_form == true ) : ?>
    <div class="blog-footer-subscribe-form" style="<?php echo esc_attr( $subscribe_section_style ); ?>">
        <?php if ( viva_get_option( 'tek-blog-subscribe-bg-overlay' ) != '' ) : ?>
            <div class="subscribe-form-overlay" style="background-color:<?php echo esc_attr( $overlay_color['rgba'] ); ?>;"></div>
        <?php endif; ?>
        <div class="container">
            <div class="blog-subscribe-wrapper">
                <?php if ( viva_get_option( 'tek-blog-subscribe-section-title' ) ) : ?>
                    <h2 <?php if ( !empty( $subscribe_text_color ) ) : ?> style="color:<?php echo esc_attr( $subscribe_text_color ); ?>"<?php endif; ?>><?php echo esc_html( viva_get_option( 'tek-blog-subscribe-section-title' ) ); ?></h2>
                <?php endif; ?>
                <?php if ( viva_get_option( 'tek-blog-subscribe-section-subtitle' ) ) : ?>
                    <p class="blog-subscribe-subtitle" <?php if ( !empty( $subscribe_text_color ) ) : ?> style="color:<?php echo esc_attr( $subscribe_text_color ); ?>"<?php endif; ?>><?php echo wp_kses( viva_get_option( 'tek-blog-subscribe-section-subtitle' ), viva_allowed_html_tags() ); ?></p>
                <?php endif; ?>
                <?php if ( viva_get_option( 'tek-blog-subscribe-section-form-id' ) ) : ?>
                    <div class="kd-contact-form inline-cf single-field-form" <?php if ( !empty( $subscribe_text_color ) ) : ?> style="color:<?php echo esc_attr( $subscribe_text_color ); ?>"<?php endif; ?>>
                        <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( viva_get_option( 'tek-blog-subscribe-section-form-id' ) ).'"]'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
