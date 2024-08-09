<?php
	/**
	 * Twenty Twenty-Two functions and definitions
	 *
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package WordPress
	 * @subpackage DesignerMadsen_Theme
	 * @since 2024-08-05
	 * @version 1.0
	 * 
	 *	License: MIT License
	 *	License URI: https://github.com/KentVejrupMadsen/DesignerMadsen.Wordpress.Theme/blob/main/LICENSE.md
	 */
	require_once get_template_directory() . '/include/urls.php';
	require_once get_template_directory() . '/include/names.php';

	require_once get_template_directory() . '/include/interactive_menues.php';


	if(
		!function_exists( 
			GetFunctionDesignermadsenSupport()
		) 
	):
		function designermadsen_support(): void
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
		GetFunctionDesignermadsenSupport()
	);

	if ( 
		!function_exists( 
			GetDesignermadsenStyles()
		) 
	):

		function designermadsen_styles(): void
		{

			// Register theme stylesheet.
			$theme_version = wp_get_theme()->get( 
				'Version' 
			);

			$version_string = (
				is_string( 
					$theme_version 
				) 
				? 
				$theme_version : false
			);
			
			wp_register_style(
				GetDesignermadsenStyle(),
				retrieve_style_url(),
				array(),
				$version_string
			);

			wp_enqueue_style( 
				GetDesignermadsenStyle()
			);
		}

	endif;

	add_action( 
		'wp_enqueue_scripts', 
		GetDesignermadsenStyles()
	);

	add_action( 
		'init', 
		'RegistrationOfMenues' 
	);
?>