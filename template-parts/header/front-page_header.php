<?php
/**
 * Template part for displaying the front page header.
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$title_background_image = get_field( 'title_background_image' );
$sign_up_logo           = get_field( 'sign_up_logo' );
$sign_up_form           = get_field( 'sign_up_form' );
$bk_color               = get_field( 'bk_color' );
if ( 'false' === $bk_color ) {
	$bk_color = get_field( 'custom_bk_color' );
} else {
	$bk_color = $bk_color;
}
?>
<header class="mdl-grid mdl-header mdl-cell--middle animate" style="background-color:<?php echo esc_html( $bk_color ); ?>;">
	<div class="animate mdl-title mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet" style="background-image:url('<?php echo esc_html( $title_background_image ); ?>');">
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
	<div class="animate mdl-form mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
		<div class="svg-img">
			<?php
			if ( ! empty( $sign_up_logo ) ) {
				echo file_get_contents( $sign_up_logo );
			}
			?>
		</div>
		<div class="form-wrap">
			<?php
			if ( $sign_up_form ) {
				echo do_shortcode( $sign_up_form );
			}
			?>
			<!-- TODO: TEMP FORM CODE must delete -->
			<!-- <p><br>DEV NOTE: <br>1) add bouncy down arrow on right-bottom of above-the-fold, <br>2) paralax full width img, <br>3) remove left nav sidebar, <br>4) finish footer</p> -->
			<style>
				.nf-form-cont {
					max-width: 300px;
					text-align: center;
				}
				input.ninja-forms-field,
				.mdl-button {
					max-width: 265px;
					width: 265px !important;
					min-width: auto !important;
					margin-top: 1em;
				}
				label {
					display: none;
				}
				</style>
				<sub style="color: #fff"><em>!! Temp form for dev testing</em></sub>
			<div id="nf-form-2-cont" class="nf-form-cont" aria-live="polite" aria-labelledby="nf-form-title-2" aria-describedby="nf-form-errors-2" role="form">
				<span id="nf-form-title-2" class="nf-form-title">
				</span>
				<div class="nf-form-wrap ninja-forms-form-wrap">
					<div class="nf-response-msg"></div>
					<div class="nf-debug-msg"></div>
					<div class="nf-before-form">
						<nf-section>
						</nf-section>
					</div>
					<div class="nf-form-layout">
						<form>
							<div>
							<div class="nf-before-form-content">
								<nf-section>
									<div class="nf-form-fields-required"></div>
								</nf-section>
							</div>
							<div class="nf-form-content ">
								<nf-fields-wrap>
									<nf-field>
										<div id="nf-field-5-container" class="nf-field-container email-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-5-wrap" class="field-wrap email-wrap" data-field-id="5">
												<div class="nf-field-label"><label for="nf-field-5" id="nf-label-field-5" class="">Email  </label></div>
												<div class="nf-field-element">
													<input type="email" value="" class="ninja-forms-field nf-element" id="nf-field-5" name="email" autocomplete="email" placeholder="Email" aria-invalid="false" aria-describedby="nf-error-5" aria-labelledby="nf-label-field-5">
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-5" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-6-container" class="nf-field-container textbox-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-6-wrap" class="field-wrap textbox-wrap" data-field-id="6">
												<div class="nf-field-label"><label for="nf-field-6" id="nf-label-field-6" class="">Single Line Text  </label></div>
												<div class="nf-field-element">
													<input type="text" value="" class="ninja-forms-field nf-element" placeholder="Password" id="nf-field-6" name="nf-field-6" aria-invalid="false" aria-describedby="nf-error-6" aria-labelledby="nf-label-field-6">
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-6" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-8-container" class="nf-field-container textbox-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-8-wrap" class="field-wrap textbox-wrap" data-field-id="8">
												<div class="nf-field-label"><label for="nf-field-8" id="nf-label-field-8" class="">Single Line Text Copy  </label></div>
												<div class="nf-field-element">
													<input type="text" value="" class="ninja-forms-field nf-element" placeholder="Confirm Password" id="nf-field-8" name="nf-field-8" aria-invalid="false" aria-describedby="nf-error-8" aria-labelledby="nf-label-field-8">
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-8" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-7-container" class="nf-field-container submit-container  label-hidden  textbox-container">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-7-wrap" class="field-wrap submit-wrap textbox-wrap" data-field-id="7">
												<div class="nf-field-label"></div>
												<div class="nf-field-element">
													<input id="nf-field-7" class="ninja-forms-field button-full-width mdl-button mdl-js-button mdl-button--raised mdl-button--colored--white nf-element " type="button" value="Sign Up">
												</div>
												<div class="nf-error-wrap"></div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-7" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-9-container" class="nf-field-container html-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-9-wrap" class="field-wrap html-wrap" data-field-id="9">
												<div class="nf-field-label"><label for="nf-field-9" id="nf-label-field-9" class="">  </label></div>
												<div class="nf-field-element">
													<p style="text-align: center;">- or -</p>
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-9" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-10-container" class="nf-field-container html-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-10-wrap" class="field-wrap html-wrap" data-field-id="10">
												<div class="nf-field-label"><label for="nf-field-10" id="nf-label-field-10" class="">HTML  </label></div>
												<div class="nf-field-element">
													<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored--primary">Sign up with Google</button>
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-10" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-11-container" class="nf-field-container html-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-11-wrap" class="field-wrap html-wrap" data-field-id="11">
												<div class="nf-field-label"><label for="nf-field-11" id="nf-label-field-11" class="">HTML Twitter  </label></div>
												<div class="nf-field-element">
													<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored--primary">Sign up with Twitter</button>
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-11" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-12-container" class="nf-field-container html-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-12-wrap" class="field-wrap html-wrap" data-field-id="12">
												<div class="nf-field-label"><label for="nf-field-12" id="nf-label-field-12" class="">HTML Twitter Copy  </label></div>
												<div class="nf-field-element">
													<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored--primary">Sign up with TikTok</button>
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-12" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
									<nf-field>
										<div id="nf-field-13-container" class="nf-field-container html-container  label-hidden ">
										<div class="nf-before-field">
											<nf-section>
											</nf-section>
										</div>
										<div class="nf-field">
											<div id="nf-field-13-wrap" class="field-wrap html-wrap" data-field-id="13">
												<div class="nf-field-label"><label for="nf-field-13" id="nf-label-field-13" class="">HTML  </label></div>
												<div class="nf-field-element">
													<sub style="text-align: center;">By signing up, you are agreeing to our Terms of Service and Privacy Policy.</sub>
													<sub style="text-align: center;">Already have an account? Sign in
													</sub>
												</div>
											</div>
										</div>
										<div class="nf-after-field">
											<nf-section>
												<div class="nf-input-limit"></div>
												<div id="nf-error-13" class="nf-error-wrap nf-error" role="alert"></div>
											</nf-section>
										</div>
										</div>
									</nf-field>
								</nf-fields-wrap>
							</div>
							<div class="nf-after-form-content">
								<nf-section>
									<div id="nf-form-errors-2" class="nf-form-errors" role="alert">
										<nf-errors></nf-errors>
									</div>
									<div class="nf-form-hp">
										<nf-section>
										<label for="nf-field-hp-2" aria-hidden="true">
										If you are a human seeing this field, please leave it empty.
										<input id="nf-field-hp-2" name="nf-field-hp" class="nf-element nf-field-hp" type="text" value="">
										</label>
										</nf-section>
									</div>
								</nf-section>
							</div>
							</div>
						</form>
					</div>
					<div class="nf-after-form">
						<nf-section>
						</nf-section>
					</div>
				</div>
			</div>
			<!-- end TODO: TEMP FORM CODE must delete -->
		</div>
	</div>
</header>

