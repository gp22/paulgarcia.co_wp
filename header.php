<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html class="bg-gray-100  xl:text-body" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'mx-auto shadow-2xl text-gray-200 font-body bg-white' ); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<header id="masthead" class="site-header">

			<div class="main-navigation bg-white py-4">
				<div class="container mx-auto px-6 flex items-center justify-between">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flex items-center">
						<svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><path d="M50,50H36.318l5.213-5.4-9.258-8.941-4.011,4.154,2.888,2.789-3.63,3.758a11.57,11.57,0,0,1-2.186,1.788,4.517,4.517,0,0,1-2.32.741H22.97a3.238,3.238,0,0,1-2.232-1.05,3.1,3.1,0,0,1-1.087-2.159,4.26,4.26,0,0,1,.661-2.267,12.209,12.209,0,0,1,1.712-2.209L36.351,26.372a17.66,17.66,0,0,1,1.972-1.765,4.223,4.223,0,0,1,2.124-.893,2.02,2.02,0,0,1,.212-.011,3.018,3.018,0,0,1,2.042,1,2.93,2.93,0,0,1,1.087,2.082,3.656,3.656,0,0,1-.724,2.016,16.819,16.819,0,0,1-1.7,2.032l-2.522,2.612,6.924,6.686,1.987-2.057A21.228,21.228,0,0,0,50,35.354V50ZM13.135,50H0V24.9l7.293-7.552L10.142,20.1A19.379,19.379,0,0,0,15.575,23.9a8.77,8.77,0,0,0,3.626.792,9.638,9.638,0,0,0,2.315-.292c2.068-.513,4.325-2.025,6.709-4.493a17.514,17.514,0,0,0,3.962-5.924,9.275,9.275,0,0,0,.287-5.839,12.991,12.991,0,0,0-3.7-5.673L26.223,0H50V22.542a22.579,22.579,0,0,0-2.564-2.9,14.712,14.712,0,0,0-7.074-4.194,10.277,10.277,0,0,0-1.987-.2,10.443,10.443,0,0,0-4.725,1.171,25.028,25.028,0,0,0-6.564,5.054L16.694,32.238a26.365,26.365,0,0,0-4.786,6.58,10.433,10.433,0,0,0-1.034,6.533A10.569,10.569,0,0,0,13.133,50Zm4.179-33.835a2.84,2.84,0,0,1-.434-.034A4.781,4.781,0,0,1,14.442,14.7L12.069,12.4,20.283,3.9l2.335,2.254a4.558,4.558,0,0,1,1.561,2.578,3.416,3.416,0,0,1-.582,2.3,16.192,16.192,0,0,1-1.9,2.328,15.53,15.53,0,0,1-2.549,2.2A3.346,3.346,0,0,1,17.313,16.165ZM0,10.729V0H10.361L0,10.727Z" fill="#3d444d"/></svg>
						<p class="site-branding font-display font-bold text-4xl"><?php bloginfo( 'name' ); ?></p>
					</a>

					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => 'nav',
						'container_id'   => 'site-navigation',
						'menu_class'     => 'text-sm menu flex',
						'walker'         => new Primary_Menu_Walker()
					) );
					?>
				</div>
			</div>

		</header><!-- #masthead -->

		<div id="content" class="site-content">
