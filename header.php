<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

require 'inc/Walker_Nav_Menu.php';

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php
	$ga_id = get_theme_mod( 'ga_id' );
	if ( $ga_id ) :
	?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_id; ?>"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '<?php echo $ga_id; ?>');
		</script>
	<?php endif ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>
	<!--  END - We recommend to place the above code in head tag of your website html -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wp-body-open">
	<?php wp_body_open(); ?>
</div>
<div id="page" class="site mdl-layout mdl-js-layout">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>
	<?php
	if ( wp_rig()->is_drawer_nav_menu_active() ) :
		?>
		<header id="masthead" class="site-header mdl-layout__header mdl-layout__header--transparent">
			<div class="mdl-layout-icon"></div>
			<div class="mdl-layout__header-row">
				<span class="mdl-layout__title">
					<?php get_template_part( 'template-parts/header/site-title' ); ?>
					<?php get_template_part( 'template-parts/header/custom_header' ); ?>
				</span>
				<div class="mdl-layout-spacer"></div>
				<?php get_template_part( 'template-parts/header/navigation' ); ?>
			</div>
		</header><!-- #masthead -->
		<div class="mdl-layout__drawer">
				<span class="mdl-layout__title">
					<?php get_template_part( 'template-parts/header/branding' ); ?>
				</span>
				<?php
				/**
				 * Custom Material side header
				 *
				 * @source https://getmdl.io/components/index.html#layout-section
				 */
				wp_rig()->display_drawer_nav_menu(
					array(
						'menu_id'    => 'drawer-menu',
						'menu_class' => 'mdl-navigation',
						'items_wrap' => '<nav id="%1$s" class="mdl-navigation">%3$s</nav>',
						'walker'     => new Edited_Menu_Walker(),
					)
				);
				?>
		</div>
		<?php
	endif;
