<?php
/**
 * Template part for displaying text and a quote
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

global $count;
$bk_color           = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_color', true );
$bk_img             = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_img', true );
$bk_pos             = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_pos', true );
$txt                = get_post_meta( get_the_ID(), 'layouts_' . $count . '_txt', true );
$btn                = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn', true );
$section_id         = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_id', true );
$flip                = get_post_meta( get_the_ID(), 'layouts_' . $count . '_flip', true );
$vertical_alignment = get_post_meta( get_the_ID(), 'layouts_' . $count . '_vertical_alignment', true );
$quote_box_link     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_quote_box_link', true );
$quote              = get_post_meta( get_the_ID(), 'layouts_' . $count . '_quote', true );
$quote_author       = get_post_meta( get_the_ID(), 'layouts_' . $count . '_quote_author', true );
$author_image       = get_post_meta( get_the_ID(), 'layouts_' . $count . '_author_image', true );
$section_animate_in = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_animate_in', true );

if ( $section_animate_in ) {
	$section_animate_in = ' animate';
} else {
	$section_animate_in = '';
}

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
	$flip = ' flip';
} else {
	$flip = '';
}
$the_content  = apply_filters( 'the_content', $txt );
?>
<?php
if ( ! empty( $author_image ) ) :
	$author_image = 'background-image:url(' . wp_get_attachment_image_url( $author_image, '' ) . ');';
	?>
	<style>
		.author-quote-wrap .author-photo.photo-a {
			<?php echo $author_image; ?>
		}
	</style>
<?php endif; ?>

<section id="<?php echo esc_html( $section_id ); ?>" class="wonder-section copy txt-quote<?php echo esc_html( $flip ); ?>" style="<?php echo esc_html( $bk_color ); ?><?php echo esc_html( $bk_img ); ?><?php echo esc_html( $bk_pos ); ?>;">
	<div class="wrap__<?php echo esc_html( $vertical_alignment ); ?> mdl-grid section-wrap">
		<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet<?php echo esc_html( $section_animate_in ); ?>">
			<?php echo wp_kses( $the_content, 'post' ); ?>
			<?php if ( $btn ) : ?>
				<a href="<?php echo esc_url( $btn_url ); ?>" <?php echo wp_kses( $btn_color, 'post' ); ?> class="button mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><?php echo wp_kses( $btn_txt, 'post' ); ?></a>
			<?php endif; ?>
		</div>

		<div class="author-quote-wrap mdl-cell mdl-cell--8-col mdl-cell--12-col-tablet<?php echo esc_html( $section_animate_in ); ?>">
			<input class="toggle-quote" type="radio" id="AQ-1" name="quote" checked>
			<div class="author-quote mdl-grid mdl-nowrap">
				<div class="author-photo mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--3-col-desktop photo-a animated bounceInLeft"></div>
				<?php if ( $quote_box_link ) : ?>
					<a href="<?php echo esc_url( $quote_box_link ); ?>" class="link-absolute"></a>
				<?php endif; ?>
				<div class="quote-content mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--9-col-desktop">
					<div class="quote-text animated rotateInDownRight"><?php echo wp_kses( $quote, 'post' ); ?></div>
					<div class="quote-author animated lightSpeedIn"><?php echo wp_kses( $quote_author, 'post' ); ?></div>
				</div>
			</div>
		</div>

	</div>
</section>
