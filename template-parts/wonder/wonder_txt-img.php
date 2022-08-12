<?php
/**
 * Template part for displaying a text and an image.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

global $count;
$bk_color       = get_post_meta( get_the_ID(), 'layouts_' . $count . '_bk_color', true );
$border         = get_post_meta( get_the_ID(), 'layouts_' . $count . '_border', true );
$flip            = get_post_meta( get_the_ID(), 'layouts_' . $count . '_flip', true );
$txt            = get_post_meta( get_the_ID(), 'layouts_' . $count . '_txt', true );
$img            = get_post_meta( get_the_ID(), 'layouts_' . $count . '_img', true );
$img_large      = wp_get_attachment_image( $img, 'large', array( 'class' => 'grid-item__img' ) );
$img_full       = wp_get_attachment_image( $img, 'full', array( 'class' => 'grid-item__img' ) );
$img_fill        = get_post_meta( get_the_ID(), 'layouts_' . $count . '_fill_img', true );
$img_width      = get_post_meta( get_the_ID(), 'layouts_' . $count . '_img_width', true );
$modal_or_link  = get_post_meta( get_the_ID(), 'layouts_' . $count . '_modal_or_link', true );
$section_id     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_id', true );
$subheading     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_subheading', true );
$section_height = get_post_meta( get_the_ID(), 'layouts_' . $count . '_section_height', true );
$overlap        = get_post_meta( get_the_ID(), 'layouts_' . $count . '_overlap', true );
$txt_background_color        = get_post_meta( get_the_ID(), 'layouts_' . $count . '_txt_background_color', true );

if ( $overlap ) {
	$overlap = ' overlap';
} else {
	$overlap = '';
}

if ( $txt_background_color ) {
	$txt_background_color = 'style="background-color:' . $txt_background_color . ';"';
} else {
	$txt_background_color = '';
}

if ( $modal_or_link ) {
	$modal_txt     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_modal_txt', true );
	$modal_txt_url = get_post_meta( get_the_ID(), 'layouts_' . $count . '_modal_txt_url', true );
	$modal_img_url = get_post_meta( get_the_ID(), 'layouts_' . $count . '_modal_img_url', true );
} else {
	$img_url         = get_post_meta( get_the_ID(), 'layouts_' . $count . '_img_url', true );
	$img_caption     = get_post_meta( get_the_ID(), 'layouts_' . $count . '_img_caption', true );
	$modal_txt       = '';
	$modal_img_url   = '';
	$modal_txt_url   = '';
}
$btn       = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn', true );
$btn_txt   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_txt', true );
$btn_url   = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_url', true );
$btn_color = get_post_meta( get_the_ID(), 'layouts_' . $count . '_btn_color', true );
if ( ! empty( $bk_color ) ) {
	$bk_color            = 'background-color:' . $bk_color . ';';
	$bk_link_color_class = ' link-light';
} else {
	$bk_color            = '';
	$bk_link_color_class = '';
}
// border.
if ( $border ) {
	$border = 'border-bottom:10px solid ' . $border . ';';
} else {
	$border = '';
}

if ( $flip ) {
	$flip = ' flip';
} else {
	$flip = '';
}

if ( ! empty( $btn_color ) ) {
	$btn_color = ' style="background-color:' . $btn_color . ';"';
}

if ( $img_width && '' === $flip ) {
	$img_width = ' ' . $img_width;
} elseif ( $img_width && ' flip' === $flip ) {
	$img_width = ' ' . $img_width . '-flip';
} else {
	$img_width = ' grid__half';
}

if ( 'default' !== $section_height ) {
	$section_height = ' section__height-' . $section_height;
} else {
	$section_height = '';
}

?>
<section id="<?php echo esc_html( $section_id ); ?>" class="wonder-section copy txt-img"
	<?php
	if ( ! empty( $bk_color ) || ! empty( $border ) ) :
		?>
	style="<?php echo esc_html( $bk_color ); ?><?php echo esc_html( $border ); ?>"<?php endif; ?>>
	<figure class="wrap mdl-grid<?php echo esc_html( $img_width ); ?><?php echo esc_html( $section_height ); ?>">
		<?php if ( $img ) : ?>
			<div class="animate mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet <?php echo esc_html( $flip ); ?> col">
				<?php if ( $modal_or_link ) : ?>
					<a href="#open-modal-<?php echo esc_html( $count ); ?>">
						<div class="img-wrap <?php if ( $overlap ) { echo 'overlap'; }; ?>">
							<?php echo wp_kses( $img_large, 'post' ); ?>
						</div>
					</a>
				<?php else : ?>
					<div class="img-wrap <?php if ( $overlap ) { echo 'overlap'; }; ?>">
						<?php if ( $img_url ) : ?>
							<a href="<?php echo wp_kses( $img_url, 'post' ); ?>">
								<?php echo wp_kses( $img_large, 'post' ); ?>
							</a>
						<?php else : ?>
							<?php echo wp_kses( $img_large, 'post' ); ?>
						<?php endif; ?>
						<?php if ( $img_caption ) : ?>
							<?php echo esc_html( $img_caption ); ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<figcaption class="animate mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet caption col" <?php echo wp_kses( $txt_background_color, 'post' ); ?>>
			<?php
			if ( $subheading ) :
				$subheading = $subheading;
				?>
				<sub>
					<?php echo esc_html( $subheading ); ?>
				</sub>
			<?php endif; ?>
			<?php echo wp_kses( apply_filters( 'the_content', $txt ), 'post' ); ?>
			<?php if ( $btn ) : ?>
				<a class="button mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="<?php echo esc_url( $btn_url ); ?>" <?php echo wp_kses( $btn_color, 'post' ); ?>>
					<?php echo esc_html( $btn_txt ); ?>
				</a>
			<?php endif; ?>
		</figcaption>
	</figure>
	<?php if ( $modal_or_link ) : ?>
		<div id="open-modal-<?php echo esc_html( $count ); ?>" class="modal-window modal-window_large">
			<div>
				<a href="#!" title="Close" class="modal-close"><?php echo file_get_contents( get_theme_file_path() . '/assets/svg/close-icon.svg' ); ?></a>
				<figure>
				<?php if ( $modal_img_url ) : ?>
					<a href="<?php echo wp_kses( $modal_img_url, 'post' ); ?>">
						<?php echo wp_kses( $img_large, 'post' ); ?>
					</a>
				<?php else : ?>
					<?php echo wp_kses( $img_large, 'post' ); ?>
				<?php endif; ?>
					<?php if ( $modal_txt_url ) : ?>
						<a href="<?php echo wp_kses( $modal_txt_url, 'post' ); ?>" title="<?php echo wp_kses( $modal_txt, 'post' ); ?>">
							<figcaption><?php echo wp_kses( $modal_txt, 'post' ); ?></figcaption>
						</a>
					<?php else : ?>
						<figcaption><?php echo wp_kses( $modal_txt, 'post' ); ?></figcaption>
					<?php endif; ?>
				</figure>
			</div>
		</div>
	<?php endif; ?>
</section>
