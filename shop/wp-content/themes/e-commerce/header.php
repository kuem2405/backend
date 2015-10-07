<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package E-Commerce
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'e-commerce' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
            
         <?php if ( has_nav_menu( 'social' ) ) : ?>
            <div class="social-menu">
		        <?php wp_nav_menu( array(
				    'theme_location' => 'social',
				    'depth'          => '1',
				    'link_before'    => '<span class="screen-reader-text">',
				    'link_after'     => '</span>' )
				    );
                ?>
            </div><!-- .social-menu -->       
        <?php endif; ?>
		</div><!-- .site-branding -->
        
        <a href="#sidr-main" class="menu-toggle menu-icon"></a>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
        
            <?php e_commerce_cart_link() ;?>
        
	</header><!-- #masthead -->

	<div id="content" class="site-content">
