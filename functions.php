<?php
/**
 * Starter Theme's functions and definitions
 *
 * @package Starter Theme
 * @since Starter Theme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */


if ( ! function_exists( 'startertheme_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function startertheme_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

		/**
									  * Add default posts and comments RSS feed links to

									  <head>.
										  */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'myfirsttheme' ),
			'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // startertheme_setup
add_action( 'after_setup_theme', 'startertheme_setup' );

function add_frontend_scripts() {
	wp_enqueue_script( 'load_main_js', get_theme_file_uri( '/dist/bundle.js' ), '1.0', true );
	wp_enqueue_style( 'load_main_css', get_theme_file_uri( '/dist/main.css' ) );
}
add_action( 'wp_enqueue_scripts', 'add_frontend_scripts' );


