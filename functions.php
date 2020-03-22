<?php
if ( ! isset( $content_width ) )
$content_width = 750; /* pixels */

if ( ! function_exists( 'crea_setup' ) ) :
/**
* Set up theme defaults and register support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which runs
* before the init hook. The init hook is too late for some features, such as indicating
* support post thumbnails.
*/
function crea_setup() {
global $cap, $content_width;

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

/**
 * Add default posts and comments RSS feed links to head
*/
add_theme_support( 'automatic-feed-links' );

/**
 * Enable support for Post Thumbnails on posts and pages
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/
add_theme_support( 'post-thumbnails' );

/**
 * Enable support for Post Formats
*/
add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	/**
 * theme support setting
 */
	// add_theme_support( 'custom-background' );
	add_theme_support( "title-tag" );
	// add_theme_support( 'automatic-feed-links' );
	// add_theme_support( "custom-header", array() );
	add_theme_support( 'post-thumbnails' );
	// Add default posts and comments RSS feed links to head

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'video',
		'gallery'
	) );

/**
 * This theme uses wp_nav_menu() in one location.
*/
register_nav_menus( array(
	'primary'  => __( 'Header menu', 'crea' ),
	'Secundary'  => __( 'Footer menu', 'crea' ),
) );
}
endif;
add_action( 'after_setup_theme', 'crea_setup' );



function cr_scripts() {
	// load cr styles
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	// custome.style
	wp_enqueue_style( 'cr_custome-style', get_template_directory_uri().'/src/css/main.css' ); 
	// Google fonts
	// wp_enqueue_style( 'cr_fonts_poppins', 'https://fonts.googleapis.com/css?family=Asap:400,500,600,700&display=swap&subset=latin-ext' ); 
	

	// wp_enqueue_script( 'cr-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '2', true );
    // load main js
	wp_enqueue_script('cr-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );


	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'cr-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/src/wp-nav.php';

// Remove form main nav ul
// function remove_ul ( $menu ){
//     return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
// }
// add_filter( 'wp_nav_menu', 'remove_ul' );