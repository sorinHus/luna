<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package luna
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

<body class="container">
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
		
		<div class="double">
			<nav class="navbar menu-text">
				
				<?php wp_nav_menu();  ?>
				<div class="header-search"><?php get_search_form(); ?></div>

			</nav>

		</div>

		<div class="site-branding">

			<?php 

				if ( function_exists( 'the_custom_logo' ) ) {
				    the_custom_logo();
				}

			 ?>
			
            <!-- <?php if ( get_theme_mod( 'luna_logo' ) ) : ?>
              
    			<div class="site-logo site-title"> 
       				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    
                    <img src='<?php echo esc_url( get_theme_mod( 'luna_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size', '150' )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    
                    </a> 
    			</div>-->
                
			<?php else : ?> 
            
    			<hgroup>
       				<h1 class='site-title'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						<?php bloginfo( 'name' ); ?>
                    </a>
                    </h1>
    			</hgroup>
                
			<?php endif; ?> 

			
            
		</div><!-- .site-branding -->

			<div class="social">

				<img src="/luna/wp-content/themes/luna/img/dash.png" alt="dash">
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/facebook.png" alt="facebook"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/twitter.png" alt="twitter"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/google+.png" alt="google+"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/pinterest.png" alt="pinterest"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/tumblr.png" alt="tumblr"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/instagram.png" alt="instagram"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/youtube.png" alt="youtube"></a></div>
				<div class="social-element"><a href="#"><img src="/luna/wp-content/themes/luna/img/rss.png" alt="rss"></a></div>
				<img src="/luna/wp-content/themes/luna/img/dash-rev.png" alt="dash-rev">


			</div>
			
		
	</header><!-- #masthead -->
    
    <!--<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav> -->

	<div id="content" class="site-content">
