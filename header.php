<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoutitfm
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta setup -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<?php $favicon_uploader = get_field('favicon_uploader','options'); 
		if($favicon_uploader): ?>
			<link rel="icon" href="<?php echo $favicon_uploader['url'] ?>" />	
		<?php endif; ?>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are 
			an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		<!-- header part start -->
		<header>	
			





