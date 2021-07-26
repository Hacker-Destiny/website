<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package julia
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11"> 

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="kaya-page-content-wrapper" class="">

		<?php 
			julia_kaya_header(); // WPCS: xss ok.
		
			julia_kaya_page_title(); 
		?>
		<div class="main-wrapper ajax-search-results">
		<?php	
		// Slider Functionality
		julia_kaya_slider_shortcode(); ?>		<!-- Page title section -->
		
		<!-- Middle content alignment start here -->
		<div id="kaya-mid-content-wrapper">
			<div id="mid-content" class="site-content container">