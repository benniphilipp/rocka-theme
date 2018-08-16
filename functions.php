<?php
/**
* Rocka functions and definitions
*
* Set up the theme and provides some helper functions, which are used in the
* theme as custom template tags. Others are attached to action and filter
* hooks in WordPress to change core functionality.
*
* When using a child theme you can override certain functions (those wrapped
* in a function_exists() call) by defining them first in your child theme's
* functions.php file. The child theme's functions.php file is included before
* the parent theme's file, so the child theme functions would be used.
*
* @link https://codex.wordpress.org/Theme_Development
* @link https://codex.wordpress.org/Child_Themes
*
*
* For more information on hooks, actions, and filters,
* @link https://codex.wordpress.org/Plugin_API
*
* @package Wordpress
* @subpackage Rocka
* @since rocka 1.0
*/


/**
* Set up the content width value based on the theme's design.
*
* @see twentyfourteen_content_width()
*
*/
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

// Load class wp bootstrap navwalker
require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';

//Register Rocky Theme menu
function register_my_menus() {
  register_nav_menus(
    array(
      'top-bar' => __( 'Rocka Top Menu' ),
      'footer-bar' => __( 'Rocka Bottom Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

if ( ! function_exists( 'rocka_setup' ) ) :
	/**
	 * rocka setup.
	 *
	 * Set up theme defaults and registers support for rocka Theme.
	 *
   *load textdomain
	 * @since rocka 1.0
	 */

	function rocka_setup() {
		/*
		 *
		 *
		 */
		load_theme_textdomain( 'rocka' );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );
		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		//add_image_size( '', 1038, 576, true );
		// This theme uses wp_nav_menu() in two locations.

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

	}
endif; // rocka_setup
add_action( 'after_setup_theme', 'rocka_setup' );

/**
 * Enqueue scripts and styles for the front end.
 *
 */

function rocka_scripts() {
  // Teamplatfile url
  $teamplatfile = get_template_directory_uri();

  // jQuery.
  wp_enqueue_script( 'jquery' );

  //Load bootstrap min javascripts
  wp_enqueue_script( 'bootstrap-script', $teamplatfile . '/assets/js/bootstrap.min.js', array( 'jquery' ), null, true );

  //Load bootstrap min stylesheet.
  wp_enqueue_style(  'bootstrap-style', $teamplatfile . '/assets/css/bootstrap.min.css', array() );

  //Load fontawesome stylesheet.
  wp_enqueue_style( 'fontawesomestyle', $teamplatfile . '/assets/css/all.css', array() );

  // Load main stylesheet
	wp_enqueue_style(  'mainstylesheet', $teamplatfile . '/assets/css/main.min.css', array() );

  // Load our main stylesheet.
	wp_enqueue_style(  'rocka', get_stylesheet_uri() );

  //Load jQuery mainfile
  //wp_enqueue_script( 'twentyfourteen-script', $teamplatfile . '/js/functions.js', array( 'jquery' ), '20150315', true );

	/*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_active_sidebar( 'sidebar-3' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}
	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		wp_enqueue_script( 'twentyfourteen-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
		wp_localize_script(
			'twentyfourteen-slider', 'featuredSliderDefaults', array(
				'prevText' => __( 'Previous', 'twentyfourteen' ),
				'nextText' => __( 'Next', 'twentyfourteen' ),
			)
		);
	}*/

}
add_action( 'wp_enqueue_scripts', 'rocka_scripts' );




//add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

/*
function my_enqueue_styles() {

    /* If using a child theme, auto-load the parent theme style. */
  /*  if ( is_child_theme() ) {
        wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }

    /* Always load active theme's style.css.
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
*/

/**
 * Display template for post meta information.
 *
 */
if (!function_exists('bootstrapwp_posted_on')) :
    function bootstrapwp_posted_on()
    {
        printf(__('Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>','bootstrapwp'),
            esc_url(get_permalink()),
            esc_attr(get_the_time()),
            esc_attr(get_the_date('c')),
            esc_html(get_the_date()),
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_attr(sprintf(__('View all posts by %s', 'bootstrapwp'), get_the_author())),
            esc_html(get_the_author())
        );
    }
endif;
