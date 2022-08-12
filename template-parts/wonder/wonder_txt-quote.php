<?php
/**
 * Template part for displaying text and a quote
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

global $count;
$bk_color   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_color', true );
$bk_img     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_img', true );
$bk_pos     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_pos', true );
$txt        = get_post_meta( get_the_ID(), 'layouts_' . $count . '_txt', true );
$btn        = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn', true );
$section_id = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_id', true );
$flip        = get_post_meta( get_the_ID(), 'layouts_' . $count . '_flip', true );

if ( $bk_color ) {
	$bk_color = 'background-color:' . $bk_color . ';';
}
if ( $bk_img ) {
	$bk_img = wp_get_attachment_image_url( $bk_img, '' );
	$bk_img = 'background-image:url("' . $bk_img . '");';
}
if ( $bk_pos ) {
	$bk_pos = 'background-position:' . $bk_pos;
}
if ( $btn ) :
	$btn_txt   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_txt', true );
	$btn_url   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_url', true );
	$btn_color = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_color', true );
	$btn_color = 'style="background:' . $btn_color . '"';
else :
	$btn = '';
endif;

if ( $flip ) {
	$flip = '-flip';
} else {
	$flip = '';
}
$quote = get_post_meta( get_the_ID(), 'layouts_' . $count . '_quote', true );
$the_content = apply_filters( 'the_content', $txt );
?>
<section id="<?php echo esc_html( $section_id ); ?>" class="wonder-section copy txt-quote" style="<?php echo esc_html( $bk_color ); ?><?php echo esc_html( $bk_img ); ?><?php echo esc_html( $bk_pos ); ?>;">
	<div class="wrap mdl-grid<?php echo esc_html( $flip ); ?>">
		<div class="col animate mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet<?php echo esc_html( ' ' . $flip ); ?>">
			<?php echo wp_kses( $the_content, 'post' ); ?>
			<?php if ( $btn ) : ?>
				<a href="<?php echo esc_url( $btn_url ); ?>" <?php echo wp_kses( $btn_color, 'post' ); ?> class="button mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><?php echo wp_kses( $btn_txt, 'post' ); ?></a>
			<?php endif; ?>
		</div>
		<div class="col animate mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
			<?php echo wp_kses( $quote, 'post' ); ?>
		</div>
	</div>
</section>
