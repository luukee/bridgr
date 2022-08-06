<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<?php if ( get_theme_mod( 'site_branding' ) ) : ?>
	<div class="site-branding">
		<?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
			<?php the_custom_logo(); ?>
		<?php endif; ?>
	</div>
<?php endif; ?>
