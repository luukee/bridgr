<?php
/**
 * Template part for displaying a banner section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

global $count;

$bk_img             = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_img', true );
$txt                = get_post_meta( get_the_ID(), 'layouts_' . $count . '_txt', true );
$btn                = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn', true );
$bk_option          = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_option', true );
$bk_edge            = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_edge', true );
$bk_color           = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_color', true );
$custom_bk_color    = get_post_meta( get_the_ID(), 'layouts_' . $count . '_custom_bk_color', true );
$section_height     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_height', true );
$overlay            = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_img_ov', true );
$width              = get_post_meta( get_the_ID(), 'layouts_' . $count . '_width', true );
$content_align      = get_post_meta( get_the_ID(), 'layouts_' . $count . '_content_align', true );
$button_opens_modal = get_post_meta( get_the_ID(), 'layouts_' . $count . '_button_opens_modal', true );

if ( $button_opens_modal ) {
	$btn_txt   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_txt', true );
	$modal_txt = get_post_meta( get_the_ID(), 'layouts_' . $count . '_modal_txt', true );
} else {
	$btn_txt   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_txt', true );
	$btn_url   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_url', true );
}

if ( ! empty( $btn_color ) ) {
	$btn_color = ' style="background-color:' . $btn_color . ';"';
}

if ( 'wide' === $width ) {
	$width = 'mdl-cell mdl-cell--12-col';
} elseif ( 'narrow' === $width ) {
	$width = 'mdl-cell mdl-cell--6-col mdl-cell--1-offset-tablet mdl-cell--3-offset-desktop';
} else {
	$width = 'mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop';
}

if ( 'image' === $bk_option ) {
	$bk = 'background-image:url(' . wp_get_attachment_image_url( $bk_img, '' ) . ');';
	if ( $bk_edge ) {
		if ( 'lt' === $bk_edge ) {
			$bk .= 'background-position:left top;';
		} elseif ( 'lc' === $bk_edge ) {
			$bk .= 'background-position:left center;';
		} elseif ( 'lb' === $bk_edge ) {
			$bk .= 'background-position:left bottom;';
		} elseif ( 'rt' === $bk_edge ) {
			$bk .= 'background-position:right top;';
		} elseif ( 'rc' === $bk_edge ) {
			$bk .= 'background-position:right center;';
		} elseif ( 'rb' === $bk_edge ) {
			$bk .= 'background-position:right bottom;';
		} elseif ( 'ct' === $bk_edge ) {
			$bk .= 'background-position:center top;';
		} elseif ( 'cc' === $bk_edge ) {
			$bk .= 'background-position:center center;';
		} elseif ( 'lb' === $bk_edge ) {
			$bk .= 'background-position:center bottom;';
		}
	}
} elseif ( 'color' === $bk_option ) {
	if ( 'false' === $bk_color ) {
		$bk = 'background-color:' . $custom_bk_color . ';';
	} else {
		$bk = 'background-color:' . $bk_color . ';';
	}
}

if ( 'default' !== $section_height ) {
	$section_height = ' section__height-' . $section_height;
} else {
	$section_height = '';
}

if ( 'default' !== $content_align ) {
	$content_align = ' ' . $content_align;
} else {
	$content_align = 'left';
}

?>
<section class="wonder-section copy banner" style="<?php echo esc_html( $bk ); ?>">
	<div class="wrap mdl-grid<?php echo esc_html( $section_height ); ?>">
		<?php if ( 'image' === $bk_option ) : ?>
			<div class="banner-overlay" style="opacity:0.<?php echo esc_html( $overlay ); ?>"></div>
		<?php endif; ?>
		<?php if ( ! empty( $txt ) ) : ?>
			<div class="animate col <?php echo esc_html( $width ); ?>" style="text-align:<?php echo esc_html( $content_align ); ?>;">
				<?php
				echo wp_kses( apply_filters( 'the_content', $txt ), 'post' );
				if ( $btn ) :
					?>
					<?php if ( $button_opens_modal ) : ?>
						<a href="#open-modal-<?php echo esc_html( $count ); ?>" class="button mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
							<?php echo wp_kses( $btn_txt, 'post' ); ?>
						</a>
					<?php else : ?>
						<a class="button mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="<?php echo esc_url( $btn_url ); ?>" <?php echo wp_kses( $btn_color, 'post' ); ?>>
							<?php echo wp_kses( $btn_txt, 'post' ); ?>
						</a>
					<?php endif ?>
				<?php endif ?>
			</div>
		<?php endif; ?>
	</div>
	<?php if ( $button_opens_modal ) : ?>
		<div id="open-modal-<?php echo esc_html( $count ); ?>" class="modal-window modal-window_large">
			<div>
				<div class="modal-window__content">
					<a href="#!" title="Close" class="modal-close">
						<?php get_template_part( 'template-parts/svg/close-icon' ); ?>
					</a>
					<?php if ( $modal_txt ) : ?>
						<div class='embed-container'>
							<?php echo $modal_txt; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>
