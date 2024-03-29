<?php
include_once('inc/theme-options.php');
add_theme_support( 'post-thumbnails' );

add_action('admin_enqueue_scripts', 'theme_backend_scripts_styles');
function theme_backend_scripts_styles()
{
  wp_enqueue_style('thickbox');
  wp_enqueue_script('jquery');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
  wp_enqueue_script('admin-scripts', get_stylesheet_directory_uri().'/js/admin-scripts.js');
}
/**
 * linenworldexports functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package linenworldexports
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function linenworldexports_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on linenworldexports, use a find and replace
		* to change 'linenworldexports' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'linenworldexports', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'linenworldexports' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'linenworldexports_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'linenworldexports_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function linenworldexports_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'linenworldexports_content_width', 640 );
}
add_action( 'after_setup_theme', 'linenworldexports_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function linenworldexports_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'linenworldexports' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'linenworldexports' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'linenworldexports_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function linenworldexports_scripts() {
	wp_enqueue_style( 'linenworldexports-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'linenworldexports-style', 'rtl', 'replace' );

	wp_enqueue_style('bootstrap-min-css', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap1-min-css', get_stylesheet_directory_uri().'/css/bootstrap1.min.css');
  wp_enqueue_style('fontawesome5-min-css', get_stylesheet_directory_uri().'/css/fontawesome5.min.css');
  wp_enqueue_style('font-awesome-css', get_stylesheet_directory_uri().'/css/font-awesome.css');
  wp_enqueue_style('stylesheet-css', get_stylesheet_directory_uri().'/css/stylesheet.css');
  wp_enqueue_style('animate.min-css', get_stylesheet_directory_uri().'/css/animate.min.css');
  wp_enqueue_style('font-awesome-animation-css', get_stylesheet_directory_uri().'/css/font-awesome-animation.css');
  wp_enqueue_style('component-style', get_stylesheet_directory_uri().'/css/component.css'); 
  wp_enqueue_style('hover-style', get_stylesheet_directory_uri().'/css/hover.css'); 
  wp_enqueue_style('responsive-style', get_stylesheet_directory_uri().'/css/responsive.css');

	wp_enqueue_script( 'linenworldexports-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script('bootstrap-min-js', get_stylesheet_directory_uri().'/js/bootstrap.min.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('bootstrap-bundle-min-js', get_stylesheet_directory_uri().'/js/bootstrap.bundle.min.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('modernizr.custom-js', get_stylesheet_directory_uri().'/js/modernizr.custom.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('easing-js', get_stylesheet_directory_uri().'/js/easing.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('jquery.ui.totop-js', get_stylesheet_directory_uri().'/js/jquery.ui.totop.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('wow-js', get_stylesheet_directory_uri().'/js/wow.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('jquery.dlmenu-js', get_stylesheet_directory_uri().'/js/jquery.dlmenu.js' ,array( 'jquery' ),'',false);
	wp_enqueue_script('owl.carousel.min-js', get_stylesheet_directory_uri().'/js/owl.carousel.min.js' ,array( 'jquery' ),'',false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'linenworldexports_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'after_setup_theme', 'when_theme_isset' );
function when_theme_isset() {
  register_nav_menu( 'header_menu', __( 'Header Menu' ) );
  register_nav_menu( 'header_mobile_menu', __( 'Header Mobile Menu' ) );
  register_nav_menu( 'footer_menu_1', __( 'Footer Menu 1' ) );
  register_nav_menu( 'footer_menu_2', __( 'Footer Menu 2' ) );
}

register_sidebar(
  array(
    'name'          => esc_html__( 'Footer Info', 'linenworldexports' ),
    'id'            => 'footer-info-widget',
    'description'   => esc_html__( 'Add widgets here.', 'linenworldexports' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => ''
  )
);

// creating product post type
add_action( 'init' , 'custompostypescb' );
function custompostypescb(){
  $labels = array(
        'name'               => _x( 'Product', 'post type general name' ),
        'singular_name'      => _x( 'Product', 'post type singular name' ),
        'add_new'            => _x( 'Add Product', 'products' ),
        'add_new_item'       => __( 'Add Product' ),
        'edit_item'          => __( 'Edit Product' ),
        'new_item'           => __( 'New Product' ),
        'all_items'          => __( 'All Products' ),
        'view_item'          => __( 'View Product' ),
        'search_items'       => __( 'Search' ),
        'menu_name'          => 'Products'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Let\'s Create Product post',
        'public'        => true,
        'menu_position' => '',
        'supports'      => array( 'title', 'thumbnail', 'editor'),
        'has_archive'   => true,
    // 'register_meta_box_cb' => 'bdscpartnershops_metaboxes',
        // 'exclude_from_search'   => true,
        // 'publicly_queryable'   => false,
    );
  register_post_type( 'products', $args);
}
// creating product post type


function add_custom_taxonomies() {
  // Add new "Categories" taxonomy to Posts
  register_taxonomy('product-categories', 'products', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Categories' ),
      'all_items' => __( 'All Categories' ),
      // 'parent_item' => __( 'Parent Category' ),
      // 'parent_item_colon' => __( 'Parent Category:' ),
      'edit_item' => __( 'Edit Category' ),
      'update_item' => __( 'Update Category' ),
      'add_new_item' => __( 'Add New Category' ),
      'new_item_name' => __( 'New Category Name' ),
      'menu_name' => __( 'Categories' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'product-categories', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/Categories/"
      'hierarchical' => true // This will allow URL's like "/Categories/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );