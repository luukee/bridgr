<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
wp_rig()->print_styles( 'wp-rig-footer' );
?>
	<footer id="colophon" class="mdl-mini-footer">
		<div class="mdl-mini-footer__left-section">
			<?php wp_rig()->display_footer_sidebar(); ?>
			<div class="mdl-logo">Title</div>
			<ul class="mdl-mini-footer__link-list">
			<li><a href="#">Help</a></li>
			<li><a href="#">Privacy & Terms</a></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
