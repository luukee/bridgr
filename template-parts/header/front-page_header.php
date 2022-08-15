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

<svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 141.83 96.91"><defs><linearGradient id="a" x1="25.54" y1="29.47" x2="108.71" y2="29.47" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#ed8100"/><stop offset=".12" stop-color="#ec7c08"/><stop offset=".16" stop-color="#e96d1e"/><stop offset=".21" stop-color="#e55541"/><stop offset=".27" stop-color="#df3372"/><stop offset=".3" stop-color="#db1f8f"/><stop offset=".35" stop-color="#c21fb0"/><stop offset=".46" stop-color="#871fff"/><stop offset=".52" stop-color="#871fff"/><stop offset=".53" stop-color="#8226fd"/><stop offset=".57" stop-color="#5460e8"/><stop offset=".6" stop-color="#308fd8"/><stop offset=".63" stop-color="#16b0cc"/><stop offset=".66" stop-color="#06c5c5"/><stop offset=".68" stop-color="#00ccc2"/><stop offset=".81" stop-color="#00a0cd"/><stop offset=".89" stop-color="#0088d3"/></linearGradient></defs><g data-name="Layer 2"><g data-name="Layer 1 copy"><path d="M104 33.26a5.51 5.51 0 0 1-1.46-2.71v-4a4.95 4.95 0 0 0-9.9 0V30A2.93 2.93 0 0 1 90 32.71a3 3 0 0 1-2.69-3V5a4.95 4.95 0 0 0-9.9 0v19.78a2.65 2.65 0 0 1-5.29 0V19a4.95 4.95 0 0 0-9.9 0v5.72a2.67 2.67 0 1 1-5.33-.1v-9.08a5 5 0 0 0-9.9 0v24a2.93 2.93 0 0 1-2.65 2.62 3 3 0 0 1-2.7-3.09v-2.45a4.95 4.95 0 0 0-9.9 0v2.89h-6.2l4.17 4.17a7.19 7.19 0 0 1 2 3.9V54a4.95 4.95 0 0 0 9.9 0v-3.22a3 3 0 0 1 2.7-3.09A2.94 2.94 0 0 1 47 50.31V54a4.95 4.95 0 0 0 9.9 0V35.65a2.67 2.67 0 1 1 5.33-.1v6.69a5 5 0 0 0 9.9 0v-6.73a2.65 2.65 0 0 1 5.29 0v8.83a5 5 0 0 0 9.9 0v-3.16a3 3 0 0 1 2.69-3 2.92 2.92 0 0 1 2.66 2.67v7.51a5 5 0 0 0 9.9 0V38h6.18Z" style="fill:url(#a)"/><path d="M0 79.57a2.09 2.09 0 0 1 2.1-2.1h6.77a6.9 6.9 0 0 1 5 1.69 4.41 4.41 0 0 1 1.31 3.25 4.47 4.47 0 0 1-2.51 4.13c2.21.84 3.57 2.13 3.57 4.69v.06c0 3.49-2.84 5.24-7.15 5.24h-7A2.09 2.09 0 0 1 0 94.48Zm8 5.62c1.86 0 3-.6 3-2 0-1.26-1-2-2.76-2H4.09v4Zm1.12 7.7c1.86 0 3-.65 3-2.07v-.06c0-1.28-1-2.07-3.12-2.07H4.09v4.2Zm10.59-13.32a2.09 2.09 0 0 1 2.1-2.1h6.63A7.59 7.59 0 0 1 34 79.41a6 6 0 0 1 1.64 4.36v.06a5.82 5.82 0 0 1-3.82 5.81l2.92 3.55a2.46 2.46 0 0 1 .68 1.61 2 2 0 0 1-2 1.94 2.52 2.52 0 0 1-2.08-1.09l-4.09-5.19h-3.34v4.18a2.1 2.1 0 0 1-4.2 0Zm8.46 7.18c2 0 3.22-1.09 3.22-2.7V84c0-1.8-1.25-2.73-3.3-2.73h-4.18v5.49Zm11.46-7.34a2.11 2.11 0 0 1 4.21 0v15.23a2.11 2.11 0 0 1-4.21 0Zm8.99.16a2.08 2.08 0 0 1 2.1-2.1h5.35c6 0 10.15 4.12 10.15 9.5s-4.15 9.56-10.15 9.56h-5.35a2.08 2.08 0 0 1-2.1-2.1Zm7.45 13.21a5.44 5.44 0 0 0 5.76-5.7V87a5.49 5.49 0 0 0-5.76-5.76h-3.25v11.54Zm13.05-5.7V87a9.8 9.8 0 0 1 10-9.88A10.6 10.6 0 0 1 85.66 79a2.09 2.09 0 0 1 .87 1.69 2.09 2.09 0 0 1-3.36 1.64A6.65 6.65 0 0 0 79 81a5.74 5.74 0 0 0-5.49 6 5.72 5.72 0 0 0 5.79 6.06 6.75 6.75 0 0 0 4-1.14v-2.71h-2.88a1.81 1.81 0 0 1-1.83-1.8 1.83 1.83 0 0 1 1.83-1.83h4.8a2.07 2.07 0 0 1 2.1 2.1v4.64A2.83 2.83 0 0 1 85.85 95a12.68 12.68 0 0 1-6.69 1.92c-5.95-.01-10.04-4.19-10.04-9.84Zm22.24-7.51a2.09 2.09 0 0 1 2.1-2.1h6.64a7.61 7.61 0 0 1 5.57 1.94 6 6 0 0 1 1.63 4.36v.06a5.82 5.82 0 0 1-3.82 5.81l2.92 3.55a2.47 2.47 0 0 1 .69 1.61 2 2 0 0 1-2 1.94 2.51 2.51 0 0 1-2.09-1.09l-4.1-5.19h-3.33v4.18a2.11 2.11 0 0 1-4.21 0Zm8.46 7.18c2.05 0 3.23-1.09 3.23-2.7V84c0-1.8-1.26-2.73-3.31-2.73h-4.17v5.49Zm12.89 5.3a2.3 2.3 0 0 1 2.37 2.32 2.38 2.38 0 0 1-4.75 0 2.3 2.3 0 0 1 2.38-2.32Zm5.7-13.6a2.36 2.36 0 0 1 4.64 0v.06a2.35 2.35 0 0 1-4.64 0Zm.25 5.41a2.08 2.08 0 1 1 4.15 0v10.81a2.08 2.08 0 0 1-4.15 0Zm7.34 5.48a7.68 7.68 0 0 1 7.94-7.62 7.6 7.6 0 0 1 7.89 7.56v.06a7.92 7.92 0 0 1-15.83 0Zm11.74 0a3.89 3.89 0 0 0-3.85-4 3.75 3.75 0 0 0-3.79 4v.06a3.88 3.88 0 0 0 3.84 4 3.75 3.75 0 0 0 3.8-4.06Z" style="fill:#fff"/></g></g></svg>
			<?php
			// if ( ! empty( $sign_up_logo ) ) {
			// 	echo file_get_contents( $sign_up_logo );
			// }
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

