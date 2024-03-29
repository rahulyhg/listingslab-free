<?php
/*------------------------------------*\
	listingslab Functions
\*------------------------------------*/
include 'admin/listingslab_admin.php';

/*------------------------------------*\
	listingslab Functions
\*------------------------------------*/

if ( ! function_exists( 'business_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on business_theme, use a find and replace
		 * to change 'business_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'business_theme', get_template_directory() . '/languages' );

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
		add_image_size( 'business_theme-featured-image', 1440, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => __( 'Primary', 'business_theme' ),
			'social' => __( 'Social Links', 'business_theme' ),
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

		// Add theme support for Custom Logo.
		add_theme_support( 'custom-logo', array(
			'width'       => 600,
			'height'      => 300,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for core editor styles
		add_theme_support( 'editor-styles' );

		// Add support for custom editor styles
		add_editor_style( 'editor.css' );

		// Add support for custom color scheme.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Purple', 'business_theme' ),
				'slug'  => 'purple',
				'color' => '#5f4bb6',
			),
			array(
				'name'  => __( 'Light Gray', 'business_theme' ),
				'slug'  => 'light-gray',
				'color' => '#e8ecf1',
			),
			array(
				'name'  => __( 'Medium Gray', 'business_theme' ),
				'slug'  => 'medium-gray',
				'color' => '#6e7381',
			),
			array(
				'name'  => __( 'Dark Gray', 'business_theme' ),
				'slug'  => 'dark-gray',
				'color' => '#121733',
			),
		) );
	}
endif;
add_action( 'after_setup_theme', 'business_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'business_theme_content_width', 710 );
}
add_action( 'after_setup_theme', 'business_theme_content_width', 0 );

/**
 * Register Google Fonts
 */
function business_theme_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lato = esc_html_x( 'on', 'Lato font: on or off', 'business_theme' );

	if ( 'off' !== $lato ) {
		$font_families = array();
		$font_families[] = 'Lato:400,400italic,700,700italic,900,900italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
function business_theme_scripts() {

	wp_enqueue_style( 'business_theme-style', get_stylesheet_uri() );
	
	wp_style_add_data( 'business_theme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'business_theme-blocks-style', get_template_directory_uri() . '/css/blocks.css' );

	wp_enqueue_style( 'business_theme-fonts', business_theme_fonts_url() );

	wp_enqueue_script( 'business_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'business_theme-priority-navigation', get_template_directory_uri() . '/js/priority-navigation.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'business_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Screenreader text
	wp_localize_script( 'business_theme-navigation', 'smallBusinessThemeScreenReaderText', array(
		'expand'   => esc_html__( 'expand child menu', 'business_theme' ),
		'collapse' => esc_html__( 'collapse child menu', 'business_theme' ),
	) );

	// Icons
	wp_localize_script( 'business_theme-navigation', 'smallBusinessThemeIcons', array(
		'dropdown' => business_theme_get_icon_svg( 'expand_more' )
	) );

	// Menu toggle text
	wp_localize_script( 'business_theme-navigation', 'smallBusinessThemeMenuToggleText', array(
		'menu'  => esc_html__( 'Menu', 'business_theme' ),
		'close' => esc_html__( 'Close', 'business_theme' ),
	) );


}
add_action( 'wp_enqueue_scripts', 'business_theme_scripts' );

/**
 * Enqueue Gutenberg editor styles
 */
function business_theme_editor_styles() {
	wp_enqueue_style( 'business_theme-editor-style', get_template_directory_uri() . '/editor.css' );
}
add_action( 'enqueue_block_editor_assets', 'business_theme_editor_styles' );

/**
 * Check whether the browser supports JavaScript
 */
function business_theme_html_js_class() {
	echo '<script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>'. "\n";
}
add_action( 'wp_head', 'business_theme_html_js_class', 1 );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/inc/classes/svg-icons.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

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

// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';


