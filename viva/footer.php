<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #wrapper div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viva
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$footer_section_style = $hide_footer_mb = $upper_footer = '';
$upper_footer_section = false;

$hide_footer_mb = get_post_meta( get_the_ID(), 'keydesign_hide_footer', true );

$upper_footer = viva_get_option( 'tek-upper-footer' );
$lower_footer = viva_get_option( 'tek-lower-footer-switch' );
if ( ! class_exists( 'ReduxFramework' ) ) {
    $upper_footer = $lower_footer = true;
}

$top_padding = get_post_meta( get_the_ID(), 'keydesign_footer_top_padding', true );
$bottom_padding = get_post_meta( get_the_ID(), 'keydesign_footer_bottom_padding', true );

if ( '' !== $top_padding ) {
    $footer_section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $top_padding ) ? $top_padding : $top_padding . 'px' ) . ';';
}
if ( '' !== $bottom_padding ) {
    $footer_section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $bottom_padding ) ? $bottom_padding : $bottom_padding . 'px' ) . ';';
}

if ( is_active_sidebar( 'footer-first-widget-area' ) ||
    is_active_sidebar( 'footer-second-widget-area' ) ||
    is_active_sidebar( 'footer-third-widget-area' ) ||
    is_active_sidebar( 'footer-fourth-widget-area' ) ||
  	is_active_sidebar( 'footer-fifth-widget-area' ) ||
	is_active_sidebar( 'footer-sixth-widget-area' ) ||
    viva_get_option( 'tek-footer-bar' ) == 1 ) {
        $upper_footer_section = true;
}

viva_before_closing_wrapper();
?></div>

<?php if ( empty( $hide_footer_mb ) ) : ?>
    <footer id="footer" class="<?php echo esc_attr( implode( ' ', (array) apply_filters( 'viva_footer_wrapper_class', array() ) ) ); ?>">
        <?php if ( $upper_footer_section ) : ?>
            <div class="upper-footer" style="<?php echo esc_attr( $footer_section_style ); ?>">
                <div class="container">
                    <?php if ( viva_get_option( 'tek-footer-bar' ) == 1 ) : ?>
                        <div class="footer-bar <?php if ( $upper_footer == "0") { echo " no-upper-footer"; } ?>">
                            <?php do_action( 'viva_footer_menu' ); ?>
                            <?php if ( class_exists( 'ReduxFramework' ) ) : ?>
                                <div class="footer-socials-bar">
                                    <?php viva_social_icons(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $upper_footer ) : ?>
                        <?php apply_filters( 'viva_footer_sidebar', get_sidebar( 'footer' ) ); ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( $lower_footer ) : ?>
            <div class="lower-footer <?php echo viva_get_option( 'tek-footer-copyright-alignment' ); ?>">
                <div class="container">
                    <span><?php viva_footer_copyright(); ?></span>
                </div>
            </div>
        <?php endif; ?>
    </footer>
<?php endif; ?>

<?php
viva_before_closing_body();
wp_footer();
?>
</body>
</html>
