<?php
	/**
	 * Twenty Twenty-Two functions and definitions
	 *
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package WordPress
	 * @subpackage DesignerMadsen_Theme
	 * @since DesignerMadsen Theme 1.0
	 * 
	 *	License: MIT License
	 *	License URI: https://github.com/KentVejrupMadsen/DesignerMadsen.Wordpress.Theme/blob/main/LICENSE.md
	 */

	$dm_support = 'designermadsen_support';
	$dm_styles = 'designermadsen_styles';

	if(
		!function_exists( 
			$dm_support 
		) 
	):
		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * @since Twenty Twenty-Two 1.0
		 *
		 * @return void
		 */
		function designermadsen_support() 
		{
			// Add support for block styles.
			add_theme_support( 
				'wp-block-styles' 
			);

			// Enqueue editor styles.
			add_editor_style( 
				'style.css' 
			);
		}

	endif;

	add_action( 
		'after_setup_theme', 
		$dm_support 
	);

	if ( 
		!function_exists( 
			$dm_styles 
		) 
	):

		/**
		 * Enqueue styles.
		 *
		 * @since Twenty Twenty-Two 1.0
		 *
		 * @return void
		 */
		function designermadsen_styles() 
		{
			$designermadsen_style = 'designermadsen-style';

			// Register theme stylesheet.
			$theme_version = wp_get_theme()->get( 
				'Version' 
			);

			$version_string = is_string( 
				$theme_version 
			) 
			? 
			$theme_version : false;
			
			wp_register_style(
				$designermadsen_style,
				get_template_directory_uri() . '/style.css',
				array(),
				$version_string
			);

			wp_enqueue_style( 
				$designermadsen_style 
			);
		}

	endif;

	add_action( 
		'wp_enqueue_scripts', 
		$dm_styles 
	);

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';
?>