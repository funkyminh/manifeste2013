<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link rel="icon" type="image/png" href="<?php bloginfo( "stylesheet_directory"); ?>/images/favicon.png" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo( "stylesheet_directory"); ?>/css/font-awesome.min.css">
<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo( "stylesheet_directory"); ?>/css/font-awesome-ie7.min.css">
<![endif]-->
<?php wp_head(); ?>
<link href='<?php bloginfo( "stylesheet_directory"); ?>/css/wpml.css' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<!-- TODO header -->
		<div class="top-header">
			<div id="logo-manifeste">
				<a href="<?php echo icl_get_home_url() ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php bloginfo( "stylesheet_directory"); ?>/images/logo-manifeste.png" alt="<?php bloginfo( 'name' ); ?>" style="vertical-align: middle">
				</a>
			</div>
			<div id="logo-ircam">
				<a target="_blank" href="http://www.ircam.fr"><img src="<?php bloginfo( "stylesheet_directory"); ?>/images/logo-ircam.png" alt="ircam website"></a>
			</div>
			<div id="baseline">
				<?php bloginfo( 'description' ); ?>
			</div>
			<div style="clear:both"></div>
		</div>

		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>

		<!-- should do the trick if resa if needed below the menu
		<div style="text-align: right">
		<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'info' ) ) ); ?>">
			 <?php echo get_the_title(get_page_by_path( 'info' )); ?> 
		</a>
		</div>
		-->

		<!-- front page slider -->
		<?php $front_page = is_front_page();
		if ( $front_page ) : ?>
			<?php get_template_part('slider');?>
		<?php endif; ?>
	
		<!-- Manifeste Google Analytics -->
		<script type="text/javascript">

		 var _gaq = _gaq || [];
		 _gaq.push(['_setAccount', 'UA-3416995-12']);
		 _gaq.push(['_setDomainName', 'ircam.fr']);
		 _gaq.push(['_trackPageview']);

		 (function() {
		   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		 })();

		</script>

	
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
