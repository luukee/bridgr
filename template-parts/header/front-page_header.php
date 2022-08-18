<?php
/**
 * Template part for displaying the front page header.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$header_background_image = get_field( 'header_background_image' );
$sign_up_logo            = get_field( 'sign_up_logo' );
$sign_up_form            = get_field( 'sign_up_form' );
$bk_color                = get_field( 'bk_color' );
$bk_color_custom         = get_field( 'custom_bk_color' );
$overlay                 = get_field( 'bk_img_ov' );
$section_animate_in      = get_field( 'section_animate_in' );

if ( $section_animate_in ) {
	$section_animate_in = ' animate';
} else {
	$section_animate_in = '';
}

if ( $header_background_image ) {
	$header_bk = 'background-image:url("' . $header_background_image . '")';
} elseif ( 'false' === $bk_color ) {
	$header_bk = 'background-color:' . $bk_color_custom;
} else {
	$header_bk = 'background-color:' . $bk_color . ';"';
}
?>
<header class="mdl-grid section-wrap mdl-header mdl-cell--middle <?php echo esc_html( $section_animate_in ); ?>" style="<?php echo esc_html( $header_bk ); ?>">
	<div class="header__banner-overlay" style="opacity:0.<?php echo esc_html( $overlay ); ?>"></div>
	<div class="mdl-title mdl-cell mdl-cell--12-col <?php echo esc_html( $section_animate_in ); ?>">
		<?php get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() ); ?>
		<?php
		$wp_rig_description = get_bloginfo( 'description', 'display' );
		if ( $wp_rig_description || is_customize_preview() ) {
			?>
				<h1 class="entry-title entry-title-singular">
					<?php echo $wp_rig_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
				</h1>
				<?php
		}
		$site_description = get_theme_mod( 'site_description', 'display' );
		if ( $site_description ) {
			?>
			<h5 class="site-description">
				<?php echo $site_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
			</h5>
			<?php
		}
		?>
	</div>
</header>

