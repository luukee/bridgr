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
$overlay                 = get_field( 'bk_img_ov' );
if ( 'false' === $bk_color ) {
	$bk_color = get_field( 'custom_bk_color' );
} else {
	$bk_color = $bk_color;
}
?>
<header class="mdl-grid mdl-header mdl-cell--middle animate" style="background-color:<?php echo esc_html( $bk_color ); ?>;">
	<div class="animate mdl-title mdl-cell mdl-cell--12-col" style="background-image:url('<?php echo esc_html( $header_background_image ); ?>');">
		<?php get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() ); ?>
			<div class="header__banner-overlay" style="opacity:0.<?php echo esc_html( $overlay ); ?>"></div>

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

