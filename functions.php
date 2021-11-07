<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'EVENTCON_DIR_URI' ) ) {
	define( 'EVENTCON_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'EVENTCON_DIR_ASSETS_URI' ) ) {
	define( 'EVENTCON_DIR_ASSETS_URI', EVENTCON_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'EVENTCON_DIR_CSS_URI' ) ) {
	define( 'EVENTCON_DIR_CSS_URI', EVENTCON_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'EVENTCON_DIR_JS_URI' ) ) {
	define( 'EVENTCON_DIR_JS_URI', EVENTCON_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'EVENTCON_DIR_IMGS_URI' ) ) {
	define( 'EVENTCON_DIR_IMGS_URI', EVENTCON_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'EVENTCON_DIR_ICON_IMG_URI' ) ) {
	define( 'EVENTCON_DIR_ICON_IMG_URI', EVENTCON_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'EVENTCON_DIR_PATH' ) ) {
	define( 'EVENTCON_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'EVENTCON_DIR_PATH_INC' ) ) {
	define( 'EVENTCON_DIR_PATH_INC', EVENTCON_DIR_PATH . 'inc/' );
}

//Eventcon Libraries Folder Directory
if ( ! defined( 'EVENTCON_DIR_PATH_LIBS' ) ) {
	define( 'EVENTCON_DIR_PATH_LIBS', EVENTCON_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'EVENTCON_DIR_PATH_CLASSES' ) ) {
	define( 'EVENTCON_DIR_PATH_CLASSES', EVENTCON_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'EVENTCON_DIR_PATH_HOOKS' ) ) {
	define( 'EVENTCON_DIR_PATH_HOOKS', EVENTCON_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function eventcon_admin_script(){
    wp_enqueue_style( 'eventcon-admin', get_template_directory_uri().'/assets/css/eventcon-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'eventcon_admin', get_template_directory_uri().'/assets/js/eventcon-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'eventcon_admin_script' );



/**
 * Include File
 *
 */
require_once( EVENTCON_DIR_PATH_INC . 'eventcon-breadcrumbs.php' );
require_once( EVENTCON_DIR_PATH_INC . 'eventcon-widgets-reg.php' );
require_once( EVENTCON_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( EVENTCON_DIR_PATH_INC . 'post-like.php' );
require_once( EVENTCON_DIR_PATH_INC . 'eventcon-functions.php' );
require_once( EVENTCON_DIR_PATH_INC . 'eventcon-commoncss.php' );
require_once( EVENTCON_DIR_PATH_INC . 'support-functions.php' );
require_once( EVENTCON_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( EVENTCON_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( EVENTCON_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( EVENTCON_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( EVENTCON_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( EVENTCON_DIR_PATH_HOOKS . 'hooks.php' );
require_once( EVENTCON_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( EVENTCON_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( EVENTCON_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Eventcon object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Eventcon = new Eventcon();