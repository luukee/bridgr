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
wp_rig()->print_styles( 'wp-rig-footer', 'wp-rig-content' );
?>
	<footer id="colophon" class="mdl-mini-footer">
			<?php wp_rig()->display_footer_sidebar(); ?>

		<!-- sendinblue START -->
		<script>
			window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
			window.LOCALE = 'en';
			window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";
			window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";
			window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";
			window.REQUIRED_MULTISELECT_MESSAGE = 'Please select at least 1 option';
			window.translation = {
				common: {
				selectedList: '{quantity} list selected',
				selectedLists: '{quantity} lists selected'
				}
			};
			var AUTOHIDE = Boolean(1);
		</script>
		<script src="https://sibforms.com/forms/end-form/build/main.js"></script>
		<script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
		<!-- sendinblue END -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
