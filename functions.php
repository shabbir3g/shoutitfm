<?php
/**
 * shoutitfm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shoutitfm
 */

if ( ! function_exists( 'shoutitfm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shoutitfm_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on shoutitfm, use a find and replace
		 * to change 'shoutitfm' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shoutitfm', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menus', 'shoutitfm' ),
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
		add_theme_support( 'custom-background', apply_filters( 'shoutitfm_custom_background_args', array(
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
		 
		 
		
			$labels = array(
				'name'               => _x( 'Portfolio', 'shoutitfm' ),
				'singular_name'      => _x( 'Portfolio','shoutitfm' ),
				'menu_name'          => _x( 'Portfolio','shoutitfm' ),
				'name_admin_bar'     => _x( 'Portfolio', 'shoutitfm'),
				'add_new'            => _x( 'Add portfolio', 'book', 'shoutitfm' ),
				'add_new_item'       => __( 'Add New Portfolio', 'shoutitfm' ),
				'new_item'           => __( 'New Portfolio', 'shoutitfm' ),
				'edit_item'          => __( 'Edit Portfolio', 'shoutitfm' ),
				'view_item'          => __( 'View Portfolio', 'shoutitfm' ),
				'all_items'          => __( 'All Portfolio', 'shoutitfm' ),
				'search_items'       => __( 'Search Portfolio', 'shoutitfm' ),
				'parent_item_colon'  => __( 'Parent Portfolio:', 'shoutitfm' ),
				'not_found'          => __( 'No Portfolio found.', 'shoutitfm' ),
				'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'shoutitfm' )
			);

			$args = array(
				'labels'             => $labels,
						'description'        => __( 'Description.','shoutitfm' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'menu_icon'       	 => 'dashicons-clipboard',
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'Portfolio' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

			register_post_type( 'portfolio', $args );
			
			
			
			
			$labels = array(
				'name'                       => _x( 'Type', 'taxonomy general name', 'textdomain' ),
				'singular_name'              => _x( 'Type', 'taxonomy singular name', 'textdomain' ),
				'search_items'               => __( 'Search type', 'textdomain' ),
				'popular_items'              => __( 'Popular type', 'textdomain' ),
				'all_items'                  => __( 'All type', 'textdomain' ),
				'parent_item'                => null,
				'parent_item_colon'          => null,
				'edit_item'                  => __( 'Edit type', 'textdomain' ),
				'update_item'                => __( 'Update type', 'textdomain' ),
				'add_new_item'               => __( 'Add New Type', 'textdomain' ),
				'new_item_name'              => __( 'New type Name', 'textdomain' ),
				'separate_items_with_commas' => __( 'Separate type with commas', 'textdomain' ),
				'add_or_remove_items'        => __( 'Add or remove type', 'textdomain' ),
				'choose_from_most_used'      => __( 'Choose from the most used type', 'textdomain' ),
				'not_found'                  => __( 'No type found.', 'textdomain' ),
				'menu_name'                  => __( 'Type', 'textdomain' ),
			);

			$args = array(
				'hierarchical'          => true,
				'labels'                => $labels,
				'show_ui'               => true,
				'show_admin_column'     => true,
				'update_count_callback' => '_update_post_term_count',
				'query_var'             => true,
				'rewrite'               => array( 'slug' => 'type' ),
			);

			register_taxonomy( 'type', 'portfolio', $args );
				 
		 
		 
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'shoutitfm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shoutitfm_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'shoutitfm_content_width', 640 );
}
add_action( 'after_setup_theme', 'shoutitfm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shoutitfm_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shoutitfm' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shoutitfm' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'shoutitfm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shoutitfm_scripts() {
	
		

	
	wp_enqueue_style( 'shoutitfm-fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css');
	
	wp_enqueue_style( 'shoutitfm-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	
	wp_enqueue_style( 'shoutitfm-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'shoutitfm-responsive', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_script( 'shoutitfm-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	wp_enqueue_script( 'shoutitfm-popper', get_template_directory_uri() . '/js/popper.js', array('jquery'), '', true );
	wp_enqueue_script( 'shoutitfm-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true );
	wp_enqueue_script( 'shoutitfm-responsiveNav', get_template_directory_uri() . '/js/responsiveNav.js', array('jquery'), '', true );
	
	;
	wp_enqueue_script( 'shoutitfm-isotope', get_template_directory_uri() . '/js/isotope.js', array('jquery'), '', true );
	wp_enqueue_script( 'shoutitfm-functions', get_template_directory_uri() . '/js/isotope.function.js', array('jquery'), '', true );
	
	
	

	wp_enqueue_script( 'shoutitfm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shoutitfm_scripts' );

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
require get_template_directory() . '/inc/acf-cf7.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/* ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(
        array(
            'page_title'  => 'Theme Settings',
            'menu_title'  => 'Theme Settings',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'edit_posts',
            'redirect'    => true,
            'position' => 61,
            'icon_url'    => 'dashicons-layout'
        )
    );
}

