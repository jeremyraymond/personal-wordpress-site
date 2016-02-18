<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package some_like_it_neat
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
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
	<header id="masthead" class="site-header wrap section" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
		<section class="site-branding">
			<div class="site-title"><?php bloginfo( 'name' ); ?></div>
			<div class="site-description"><?php bloginfo( 'description' ); ?></div>
			<a class="aboutme-link" href="#aboutme">
				<span>WHAT I DO</span>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-i-do-red.png">
			</a>
		</section>
	</header><!-- #masthead -->

	<main id="main" class="site-main wrap" role="main">
