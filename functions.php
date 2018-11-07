<?php
/**
 * fjordstudio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fjordstudio
 */

if ( ! function_exists( 'fjordstudio_setup' ) ) :

function fjordstudio_setup() {
	
	remove_action('wp_head', 'wp_generator');

	load_theme_textdomain( 'fjordstudio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'fjordstudio' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fjordstudio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'fjordstudio_setup' );


function fjordstudio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fjordstudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'fjordstudio_content_width', 0 );


function fjordstudio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fjordstudio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fjordstudio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fjordstudio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fjordstudio_scripts() {
	wp_enqueue_style('fjordstudio-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu+Mono|Neucha|Roboto+Slab:400,300');
	wp_enqueue_style('fjordstudio-fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css');
	wp_enqueue_style( 'fjordstudio-style', get_stylesheet_uri() );
// 	wp_enqueue_style( 'fjordstudio-navigation', get_template_directory_uri() . '/okayNav.min.css' );

	wp_enqueue_script('fjordstudio-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js', array(), '20151215', false);
// 	wp_enqueue_script('fjordstudio-okaynav', get_template_directory_uri() . '/js/okayNav.min.js', array(), '20151215', true);
	wp_enqueue_script('fjordstudio-functionality', get_template_directory_uri() . '/js/fjordstudio-script.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fjordstudio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
