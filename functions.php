<?php
if ( ! function_exists( 'crea_setup' ) ) :
	function crea_setup() {
	global $cap, $content_width;
		add_editor_style();
		// add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'div', 'image', 'video', 'quote', 'link' ) );
		add_theme_support( "title-tag" );
		add_theme_support( 'post-thumbnails' );
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
		register_nav_menus( array(
			'primary'  => __( 'Header menu', 'crea' ),
			'secundary'  => __( 'Footer menu', 'crea' ),
		) );
	}
	endif;
add_action( 'after_setup_theme', 'crea_setup' );

/**
 * wszystkie widgety
*/
function cr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cr' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4> <span class="sline maincolor-sline margin-sline-20"></span>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer - box1', 'cr' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer - box2', 'cr' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer - box3', 'cr' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer - box4', 'cr' ),
		'id'            => 'sidebar-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Słównik', 'cr' ),
		'id'            => 'sidebar-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4> <span class="sline maincolor-sline margin-sline-20"></span>',
	) );
}
add_action( 'widgets_init', 'cr_widgets_init' );
/**
 * wszystkie scrypty
*/
function cr_scripts() {
	// load cr styles
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	// custome.style
	wp_enqueue_style( 'cr_custome-style', get_template_directory_uri().'/src/css/main.css' ); 
	// Google fonts
	wp_enqueue_style( 'cr_fonts_Raleway', 'https://fonts.googleapis.com/css?family=Asap:400,700&display=swap&subset=latin-ext' );
    if ( is_single()){
		// Awsomefonts
		wp_enqueue_style( 'cr_awsomefonts', get_template_directory_uri().'/src/css/awsomefonts.min.css' );
	}

	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', false, NULL, true );
	wp_enqueue_script( 'jquery' );
	
	// bootstrap js
	wp_enqueue_script('cr_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'2', true );
	if ( is_page_template('templates/home.php')){
		wp_enqueue_style( 'cr_svipeer_css', get_template_directory_uri().'/src/css/swiper.min.css' ); 
		wp_enqueue_script('cr_swiper_js', 'https://unpkg.com/swiper/js/swiper.min.js', array( ),'5', true );
		wp_enqueue_script('cr_swiper_action-home', get_template_directory_uri().'/src/js/home-script.js', array(),'10', true );
	}

	// load main js
	wp_enqueue_script('cr-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );

}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );

// gutenberg editor

function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/main.css');
}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);


/**
* wordpress nav walker
*/
require get_template_directory() . '/src/wp-nav.php';
require get_template_directory() . '/blocks/blocks.php';


if (!function_exists('theme_php_include_setup')) {
	function theme_php_include_setup() {
		if ( is_page_template( array('templates/oferta.php') )){
			require get_template_directory() . '/src/schema-localbusiness.php';
		} else {
			require get_template_directory() . '/src/schema-organization.php';
 		}
    }
}
 // apply conditions at appropriate WP action 
 add_action('wp', 'theme_php_include_setup');


/**
* Fukcja usuwa comunicaty o update
*/
function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
 
/**
* Dodanie zakłądki Opcje szablonu
*/
function my_acf_op_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Opcje i ustawienia szablonu'),
            'menu_title'    => __('Ustawienia szablonu'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
		));
		
	}
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Schema.org',
		'menu_title'	=> 'Schema',
		'parent_slug'	=> 'theme-general-settings',
	));
}
add_action('acf/init', 'my_acf_op_init');




// Disable Emoticons
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// Remove RSD Links
remove_action( 'wp_head', 'rsd_link' ) ;
// Remove Shortlink
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// Hide WordPress Version
remove_action( 'wp_head', 'wp_generator' ) ;
// Disable Self Pingback
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
 
add_action( 'pre_ping', 'no_self_ping' );

// Disable Dashicons on Front-end
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );
// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// // Remove Query Strings
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	 $src = remove_query_arg( 'ver', $src );
	return $src;
	}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// wp_nav_menu remove class and id from li
function remove_css_id_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item', 'btn', 'btn-main')) : '';
} 
add_filter( 'page_css_class', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_css_class', 'remove_css_id_filter', 100, 1);


// add_action( 'init', function() {

//     // Remove the REST API endpoint.
//     remove_action('rest_api_init', 'wp_oembed_register_route');

//     // Turn off oEmbed auto discovery.
//     // Don't filter oEmbed results.
//     remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

//     // Remove oEmbed discovery links.
//     remove_action('wp_head', 'wp_oembed_add_discovery_links');

//     // Remove oEmbed-specific JavaScript from the front-end and back-end.
//     remove_action('wp_head', 'wp_oembed_add_host_js');
// }, PHP_INT_MAX - 1 );



function add_rel_preload($html, $handle, $href, $media) {
    
    if (is_admin())
        return $html;

     $html = <<<EOT
<link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" id='$handle' href='$href' type='text/css' media='all' />
EOT;
    return $html;
}
add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );


// Slownik

// Slownik
function cr_slownik_post_types() {

	$labels = array(
		'name'               => 'Słownik',
		'singular_name'      => 'Słownik',
		'menu_name'          => 'Słownik',
		'name_admin_bar'     => 'Słownik',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj słowo',
		'new_item'           => 'Nowe słowo',
		'edit_item'          => 'Edytuj słowo',
		'view_item'          => 'Zobacz',
		'all_items'          => 'Wszyscy słowa',
		'search_items'       => 'Szukaj słowa',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'słowo not found.',
		'not_found_in_trash' => 'słowo not found'
	);
	$args = array( 
			 'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-businessman',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'rewrite'           => array( 'slug' => 'slownik' ),
		'supports'      => array( 'title', 'page-attributes', 'editor' )
	);
    	register_post_type( 'slownik', $args );

}
add_action( 'init', 'cr_slownik_post_types' );
