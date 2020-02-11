<?php
/**
 * wp_theme_cafe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_theme_cafe
 */

if ( ! function_exists( 'wp_theme_cafe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_theme_cafe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp_theme_cafe, use a find and replace
		 * to change 'wp_theme_cafe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wp_theme_cafe', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp_theme_cafe' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_theme_cafe_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_theme_cafe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_theme_cafe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wp_theme_cafe_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_theme_cafe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_theme_cafe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp_theme_cafe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp_theme_cafe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_theme_cafe_widgets_init' );

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


//  Enqueue scripts and styles.===================================================================
 function cafe_scripts() {
	wp_enqueue_style( 'cafe-style', get_stylesheet_uri(), array(), '1.0');
	// wp_enqueue_style( 'cafe-normalize', get_template_directory_uri() . '/app/modules/normalize/css/normalize.min.css', array(), '1.0');
	wp_enqueue_style( 'cafe-bootstrap', get_template_directory_uri() . '/app/modules/bootstrap/css/bootstrap.min.css', array(), '1.0' );
	wp_enqueue_style( 'cafe-slick', get_template_directory_uri() . '/app/modules/slick/css/libs-slick-carousel.min.css', array(), '1.0' );
	wp_enqueue_style( 'cafe-magnific-popup', get_template_directory_uri() . '/app/modules/magnific-popup/css/magnific-popup.css', array(), '1.0' );
	wp_enqueue_style( 'cafe-photoswipe', get_template_directory_uri() . '/app/modules/photoswipe/dist/photoswipe.css', array(), '1.0');
	wp_enqueue_style( 'cafe-photoswipe-default-skin', get_template_directory_uri() . '/app/modules/photoswipe/dist/default-skin/default-skin.css', array(), '1.0');
	wp_enqueue_style( 'cafe-index.css', get_template_directory_uri() . '/app/css/index.css', array(), '1.0' );



	// wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'cafe-jquery', get_template_directory_uri() . '/app/modules/jquery/js/jquery.min.js', array(), '3.4.1', true);
	// wp_enqueue_script( 'cafe-bootstrap', get_template_directory_uri() . '/app/modules/bootstrap/js/bootstrap.min.js', array(), '^4.4.1', true );
	wp_enqueue_script( 'cafe-slick', get_template_directory_uri() . '/app/modules/slick/js/slick.min.js', array(), '1.0', true );
	wp_enqueue_script( 'cafe-smooth-scroll', get_template_directory_uri() . '/app/modules/smooth-scroll/js/smooth-scroll.min.js', array(), '1.0', true );
	wp_enqueue_script( 'cafe-magnific-popup', get_template_directory_uri() . '/app/modules/magnific-popup/js/jquery.magnific-popup.min.js', array(), '1.0', true );
	wp_enqueue_script( 'cafe-photoswipe-ui-default', get_template_directory_uri() . '/app/modules/photoswipe/dist/photoswipe-ui-default.min.js', array(), '1.0', true );
	wp_enqueue_script( 'cafe-photoswipe', get_template_directory_uri() . '/app/modules/photoswipe/dist/photoswipe.min.js', array(), '1.0', true );
	wp_enqueue_script( 'cafe-magnific-popup', get_template_directory_uri() . '/app/modules/magnific-popup/js/jquery.magnific-popup.min.js', array(), '1.0', true );
	wp_enqueue_script( 'cafe-libs', get_template_directory_uri() . '/app/js/libs.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'cafe_scripts', 10 );


// menu add clas link 
function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'main-nav__link';
	$atts['data-main-nav-id'] = '1';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );


/**
 * Load options-panel
 */
require get_template_directory() . '/options-panel.php';
