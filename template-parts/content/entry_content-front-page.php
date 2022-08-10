<?php
/**
 * Template part for displaying the front page content
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$title_background_image = get_field( 'title_background_image' );
$sign_up_logo           = get_field( 'sign_up_logo' );
$sign_up_form           = get_field( 'sign_up_form' );
?>
<header class="mdl-grid mdl-header mdl-cell--middle animate">
	<div class="animate mdl-title mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet" style="background-image:url('<?php echo esc_html( $title_background_image ); ?>');">
	<?php
		get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );

		get_template_part( 'template-parts/content/entry_title', get_post_type() );
	?>
	</div>
	<div class="mdl-form mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
		<div class="svg-img">
			<?php
			if ( ! empty( $sign_up_logo ) ) {
				echo file_get_contents( $sign_up_logo );
			}
			?>
			<?php echo do_shortcode( $sign_up_form ); ?>
		</div>
	</div><!-- .entry-content -->
</header>

