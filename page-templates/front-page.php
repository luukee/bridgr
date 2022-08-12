<?php
/**
 * Template Name: Front Page
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );

$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
$feat_img_bk_edge = get_post_meta( get_the_ID(), 'feat_img_bk_edge', true );
$feat_img_row_h   = get_post_meta( get_the_ID(), 'feat_img_row_h', true );

if ( $featured_img_url ) {
	$featured_img_url = 'background-image:url(' . $featured_img_url . ');';
}

if ( $featured_img_url ) {
	if ( 'lt' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:left top;';
	} elseif ( 'lc' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:left center;';
	} elseif ( 'lb' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:left bottom;';
	} elseif ( 'rt' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:right top;';
	} elseif ( 'rc' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:right center;';
	} elseif ( 'rb' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:right bottom;';
	} elseif ( 'ct' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:center top;';
	} elseif ( 'cc' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:center center;';
	} elseif ( 'lb' === $feat_img_bk_edge ) {
		$feat_img_bk_edge = 'background-position:center bottom;';
	}
}
if ( $feat_img_row_h ) {
	if ( 'tall' === $feat_img_row_h ) {
		$feat_img_row_h = 'height:100vh;';
	} elseif ( 'large' === $feat_img_row_h ) {
		$feat_img_row_h = 'height:80vh;';
	} elseif ( 'medium' === $feat_img_row_h ) {
		$feat_img_row_h = 'height:60vh;';
	} elseif ( 'small' === $feat_img_row_h ) {
		$feat_img_row_h = 'height:50vh;';
	} elseif ( 'none' === $feat_img_row_h ) {
		$feat_img_row_h = '';
	}
}
?>
<style>@media screen and (min-width: 60em) {.banner__feat-img_wrap {<?php echo wp_kses( $feat_img_row_h, 'post' ); ?>}}</style>
<main id="primary" class="site-main mdl-layout__content">
	<?php
	get_template_part( 'template-parts/header/front-page_header' );
	/**
	 * How to speed up ACF queries.
	 * Link: https://www.brianshim.com/webtricks/speed-up-wordpress-advanced-custom-fields-queries/
	 * Link: https://www.billerickson.net/advanced-custom-fields-frontend-dependency/
	 */
	$rows = get_post_meta( get_the_ID(), 'layouts', true );
	foreach ( (array) $rows as $count => $row ) {
		switch ( $row ) {
			// ? Image with Text layout.
			case 'img_txt':
				wp_rig()->print_styles( 'wp-rig-wonder_txt-img' );
				get_template_part( 'template-parts/wonder/wonder_txt-img' );
				break;
			// Quote with Text layout !
			case 'txt_quote':
				wp_rig()->print_styles( 'wp-rig-wonder_txt-quote' );
				get_template_part( 'template-parts/wonder/wonder_txt-quote' );
				break;
			// Banner layout !
			case 'banner':
				wp_rig()->print_styles( 'wp-rig-wonder_banner' );
				get_template_part( 'template-parts/wonder/wonder_banner' );
				break;
		}
	}
	edit_post_link( __( '(Edit)', 'wp-rig' ), '<span class="edit-link">', '</span>' );
	get_footer();
	?>
</main><!-- #primary -->
<?php


