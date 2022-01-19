<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Udigital_Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'udigital-test' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="main-navbar navbar navbar-expand-lg navbar-light bg-light py-4 py-lg-5">
			<div class="container"> 
				<?php
					the_custom_logo();
					?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php
					
					$udigital_test_description = get_bloginfo( 'description', 'display' );
					if ( $udigital_test_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $udigital_test_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'udigital-test' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
					
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
									'container'       => 'div',
									'container_class' => 'collapse navbar-collapse justify-content-end',
									'container_id'    => 'navbarNav',
									'menu_class'      => 'nav navbar-nav',
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								)
							);
						?>
			</div>
		</nav> 
		<div class="site-branding">	
			
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'udigital-test' ); ?></button>
			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 	)
			// );
			?>
		</nav>#site-navigation -->
	</header><!-- #masthead -->
