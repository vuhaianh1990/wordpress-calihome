<?php
/**
 * calihomes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package calihomes
 */

if ( ! function_exists( 'calihomes_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function calihomes_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on calihomes, use a find and replace
     * to change 'calihomes' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'calihomes', get_template_directory() . '/languages' );

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
      array (
        'primary-menu' => __( 'Menu chính' ),
        'second-menu'  => __( 'Menu phụ' ),
    ));

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
    add_theme_support( 'custom-background', apply_filters( 'calihomes_custom_background_args', array(
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
    ));

    add_theme_support( 'menus' );
  }
endif;
add_action( 'after_setup_theme', 'calihomes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function calihomes_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'calihomes_content_width', 640 );
}
add_action( 'after_setup_theme', 'calihomes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function calihomes_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'calihomes' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'calihomes' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'calihomes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function calihomes_scripts() {
  if (is_front_page()) {
    wp_enqueue_style( 'calihomes-slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css' );
    wp_enqueue_style( 'calihomes-slick', get_template_directory_uri() . '/assets/slick/slick.css' );
  }

  wp_enqueue_style( 'calihomes-animation', get_template_directory_uri() . '/assets/css/animations.css' );
  wp_enqueue_style( 'calihomes-style', get_stylesheet_uri() );
  wp_enqueue_style( 'calihomes-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'calihomes-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'calihomes-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );

  wp_enqueue_script( 'calihomes-jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array(), '', false );
  wp_enqueue_script( 'calihomes-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', false );
  wp_enqueue_script( 'calihomes-animation', get_template_directory_uri() . '/assets/js/css3-animate-it.js', array(), '', true );
  // wp_enqueue_script( 'calihomes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  // 	wp_enqueue_script( 'comment-reply' );
  // }
}
add_action( 'wp_enqueue_scripts', 'calihomes_scripts' );

// Add scripts to wp_head()
function calihomes_theme_head_script() {
  // wp_enqueue_script( 'calihomes-jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array(), '', false );
  // wp_enqueue_script( 'calihomes-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', false );
}
add_action( 'wp_head', 'calihomes_theme_head_script' );


/**
 * Load admin scripts
 *
 * @param  string $hook Page hook.
 * @since 1.0.0.
 */
// function mytheme_load_admin_script( $hook ) {
// 	if ( 'post.php' === $hook || 'post-new.php' === $hook ) {
//     wp_enqueue_media();
// 		wp_enqueue_style( 'admin-ui-css', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css', false, '', false );

// 		wp_enqueue_script( 'admin_js', get_template_directory_uri() . '/assets/js/admin_custom.js',  array( 'jquery', 'jquery-ui-datepicker', 'jquery-ui-slider' ) );
// 	}
// }

// add_action( 'admin_enqueue_scripts', 'mytheme_load_admin_script' );


// For Gallery
require get_template_directory() . '/inc/gallery-metabox/gallery.php';


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

/**
 * Load helper
 */
require get_template_directory() . '/helper.php';

/**
 * Load add upload image to category
 */
require get_template_directory() . '/inc/image_upload_field_custom_taxonomy.php';


/**
 * Create Video list manager
 */
require get_template_directory() . '/inc/video_list_manager/video_list_manager.php';

/**
 * Create menu manager
 */
require get_template_directory() . '/inc/menu/menu_frontend_view.php';
// require get_template_directory() . '/inc/menu/admin_menu/admin_menu.php';

/**
 * Load option framework (Redux framework)
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( get_template_directory() . '/options/ReduxCore/framework.php' ) ) {
  require_once( get_template_directory() . '/options/ReduxCore/framework.php' );
}
if ( !isset( $calihomes_redux ) && file_exists( get_template_directory() . '/options/config/options-config.php' ) ) {
  require_once( get_template_directory() . '/options/config/options-config.php' );
}

/**
 * Add du an taxonomy.
 */
require get_template_directory() . '/inc/project_taxonomy/duan.php';

// if ( !isset( $redux_demo ) && file_exists( get_template_directory() . '/options/config/sample-config.php' ) ) {
//   require_once( get_template_directory() . '/options/config/sample-config.php' );
// }


/**
 * Disable update notification
 */
// Don't disable on dev
/*
if ( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG ) {
  // Disable core update checking
  add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
  remove_action( 'admin_init', '_maybe_update_core' );
  remove_action( 'wp_version_check', 'wp_version_check' );
  // Remove the updates menu item
  function yell_remove_update_menu() {
     remove_submenu_page( 'index.php', 'update-core.php' );
  }
  add_filter( 'admin_menu', 'yell_remove_update_menu' );
  // Disable plugin update checking
  remove_action( 'load-plugins.php', 'wp_update_plugins' );
  remove_action( 'load-update.php', 'wp_update_plugins' );
  remove_action( 'load-update-core.php', 'wp_update_plugins' );
  remove_action( 'admin_init', '_maybe_update_plugins' );
  remove_action( 'wp_update_plugins', 'wp_update_plugins' );
  add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
  // Disable theme update checking
  remove_action( 'load-themes.php', 'wp_update_themes' );
  remove_action( 'load-update.php', 'wp_update_themes' );
  remove_action( 'load-update-core.php', 'wp_update_themes' );
  remove_action( 'admin_init', '_maybe_update_themes' );
  remove_action( 'wp_update_themes', 'wp_update_themes' );
  add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );
}

add_action( 'admin_menu', 'nstrm_remove_admin_submenus', 999 );
function nstrm_remove_admin_submenus() {
  remove_submenu_page( 'tools.php', 'redux-about' );
}

*/
