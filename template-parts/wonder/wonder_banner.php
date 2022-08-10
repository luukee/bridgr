<?php
/**
 * Template part for displaying a banner section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

global $count;

$bk_img          = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_img', true );
$txt             = get_post_meta( get_the_ID(), 'layouts_' . $count . '_txt', true );
$btn             = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn', true );
$bk_edge         = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_edge', true );
$row_h           = get_post_meta( get_the_ID(), 'layouts_' . $count . '_row_h', true );
$width           = get_post_meta( get_the_ID(), 'layouts_' . $count . '_width', true );
$overlay         = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_img_ov', true );
$text_background = get_post_meta( get_the_ID(), 'layouts_' . $count . '_text_background', true );
$image_with_text = get_post_meta( get_the_ID(), 'layouts_' . $count . '_image_with_text', true );
$img_large       = wp_get_attachment_image( $image_with_text, 'large', array( 'class' => 'grid-item__img' ) );
$img_full        = wp_get_attachment_image( $image_with_text, 'full', array( 'class' => 'grid-item__img' ) );
$section_id      = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_id', true );
if ( $bk_img ) {
	$bk_img = 'background-image:url(' . wp_get_attachment_image_url( $bk_img, '' ) . ');';
}
if ( $text_background ) {
	$text_background = $text_background;
}

if ( $image_with_text ) :
	$wrap_classes = ' mdl-grid mdl-grid__flex';
else :
	$wrap_classes = ' grid';
endif;

if ( $bk_edge ) {
	if ( 'lt' === $bk_edge ) {
		$bk_edge = 'background-position:left top;';
	} elseif ( 'lc' === $bk_edge ) {
		$bk_edge = 'background-position:left center;';
	} elseif ( 'lb' === $bk_edge ) {
		$bk_edge = 'background-position:left bottom;';
	} elseif ( 'rt' === $bk_edge ) {
		$bk_edge = 'background-position:right top;';
	} elseif ( 'rc' === $bk_edge ) {
		$bk_edge = 'background-position:bottom 4em right 0;';
	} elseif ( 'rb' === $bk_edge ) {
		$bk_edge = 'background-position:right bottom;';
	} elseif ( 'ct' === $bk_edge ) {
		$bk_edge = 'background-position:center top;';
	} elseif ( 'cc' === $bk_edge ) {
		$bk_edge = 'background-position:center center;';
	} elseif ( 'lb' === $bk_edge ) {
		$bk_edge = 'background-position:center bottom;';
	}
}
if ( $row_h ) {
	if ( 'tall' === $row_h ) {
		$row_h = 'style="height:100vh;"';
	} elseif ( 'large' === $row_h ) {
		$row_h = 'style="height:80vh;"';
	} elseif ( 'medium' === $row_h ) {
		$row_h = 'style="height:60vh;"';
	} elseif ( 'small' === $row_h ) {
		$row_h = 'style="height:50vh;"';
	} elseif ( 'none' === $row_h ) {
		$row_h = '';
	}
}

if ( $btn ) {
	$btn_txt   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_txt', true );
	$btn_url   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_url', true );
	$btn_color = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_color', true );
}
?>
<section class="wonder-section banner animate" id="<?php echo esc_html( $section_id ); ?>" style="<?php echo wp_kses( $bk_img, 'post' ); ?><?php echo esc_html( $bk_edge ); ?>">
	<div class="wrap<?php echo esc_html( $wrap_classes . ' ' . $width ); ?>"<?php echo wp_kses( $row_h, 'post' ); ?>>
		<div class="banner-overlay" style="opacity:0.<?php echo esc_html( $overlay ); ?>"></div>
		<?php if ( ! empty( $txt ) ) : ?>
			<div class="animate banner-txt mdl-cell--5-col" style="background-color:<?php echo wp_kses( $text_background, 'post' ); ?>;">
				<?php
				echo wp_kses( apply_filters( 'the_content', $txt ), 'post' );
				if ( $btn ) {
					?>
					<a href="<?php echo esc_url( $btn_url['url'] ); ?>" class="button"
						<?php
						if ( $btn_color ) {
							$btn_color = 'style="background:' . $btn_color . '";';
							echo wp_kses( $btn_color, 'post' );
						}
						?>
					>
						<?php echo wp_kses( $btn_txt, 'post' ); ?>
					</a>
				<?php } ?>
			</div>
		<?php endif; ?>
		<!-- Image with text -->
		<?php if ( $image_with_text ) : ?>
			<div class="animate mdl-cell--7-col">
				<figure>
					<?php echo wp_kses( $img_full, 'post' ); ?>
				</figure>
			</div>
		<?php endif; ?>
		<!-- Image with text -->
	</div>
</section>
