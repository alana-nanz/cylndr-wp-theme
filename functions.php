<?php
/**
 * mint-new functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mint-new
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.7' );
//	define( '_S_VERSION', date('U') );
}

if ( ! function_exists( 'mint_dev_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mint_dev_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mint-new, use a find and replace
		 * to change 'mint-dev' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mint-dev', get_template_directory() . '/languages' );

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
				'menu-main' => esc_html__( 'Main Menu', 'mint-dev' ),
				'menu-footer' => esc_html__( 'Footer Menu', 'mint-dev' ),
				'menu-social' => esc_html__( 'Social Menu', 'mint-dev' ),
				'menu-social-footer' => esc_html__( 'Social Menu Footer', 'mint-dev' ),
			)
		);

		if ( ! class_exists ('Mint_Menu_Walker')) :
			class Mint_Menu_Walker extends Walker_Nav_Menu {
				function start_lvl(&$output, $depth = 0, $args = array() ) {
					$indent = str_repeat("\t", $depth);
					$output .= "\n$indent<ul class=\"dropdown menu vertical\n";
				}
			}  
		endif;

		// header menu
		if( ! function_exists( 'mint_main_menu' ) ) {
			function mint_main_menu() {
				wp_nav_menu( array (
					'container'      => false,
					'menu_class'     => 'menu-header-menu-container',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location' => 'menu-main',
					'depth'          => 3,
					'fallback_cb'    => false,
					'walker'         => new Mint_Menu_Walker(),

				));
			}
		}


		// footer menu
		if( ! function_exists( 'mint_footer_menu' ) ) {
			function mint_footer_menu() {
				wp_nav_menu( array (
					'container'      => false,
					'menu_class'     => 'footer-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location' => 'menu-footer',
					'depth'          => 3,
					'fallback_cb'    => false,
					'walker'         => new Mint_Menu_Walker(),

				));
			}
		}

		// social menu
		if( ! function_exists( 'mint_social_menu' ) ) {
			function mint_social_menu() {
				wp_nav_menu( array (
					'container'      => false,
					'menu_class'     => 'menu-social',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location' => 'menu-social',
					'depth'          => 3,
					'fallback_cb'    => false,
					'walker'         => new Mint_Menu_Walker(),

				));
			}
		}

		// social menu
		if( ! function_exists( 'mint_social_menu_footer' ) ) {
			function mint_social_menu_footer() {
				wp_nav_menu( array (
					'container'      => false,
					'menu_class'     => 'menu-social-footer',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location' => 'menu-social-footer',
					'depth'          => 3,
					'fallback_cb'    => false,
					'walker'         => new Mint_Menu_Walker(),

				));
			}
		}


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
				'mint_dev_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'mint_dev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mint_dev_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mint_dev_content_width', 640 );
}
add_action( 'after_setup_theme', 'mint_dev_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mint_dev_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mint-dev' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mint-dev' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mint_dev_widgets_init' );


/**
* Add async or defer attributes to script enqueues
* @author Mike Kormendy
* @param  String  $tag     The original enqueued <script src="...> tag
* @param  String  $handle  The registered unique name of the script
* @return String  $tag     The modified <script async|defer src="...> tag
*/
// only on the front-end
if(!is_admin()) {
    function add_asyncdefer_attribute($tag, $handle) {
        // if the unique handle/name of the registered script has 'async' in it
        if (strpos($handle, 'async') !== false) {
            // return the tag with the async attribute
            return str_replace( '<script ', '<script async ', $tag );
        }
        // if the unique handle/name of the registered script has 'defer' in it
        else if (strpos($handle, 'defer') !== false) {
            // return the tag with the defer attribute
            return str_replace( '<script ', '<script defer ', $tag );
        }
        // otherwise skip
        else {
            return $tag;
        }
    }
    add_filter('script_loader_tag', 'add_asyncdefer_attribute', 10, 2);
}



	/**
	 * Enqueue scripts and styles.
	 */
	function mint_dev_scripts() {
		// wp_enqueue_style( 'mint-dev-style', get_stylesheet_uri(), array(), _S_VERSION );
		// wp_style_add_data( 'mint-dev-style', 'rtl', 'replace' );

		wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), null, true);

		wp_register_style( 'maincss-async', get_theme_file_uri() . '/assets/css/style.min.css', array(), _S_VERSION );
		wp_enqueue_style( 'maincss-async' );

		wp_register_style( 'swiper-css-defer', get_theme_file_uri() . '/assets/css/swiper.css', array(), _S_VERSION );
		wp_enqueue_style( 'swiper-css-defer' );

		// wp_register_style( 'fullpage-css-defer', get_theme_file_uri() . '/assets/css/fullpage.min.css', array(), _S_VERSION );
		// wp_enqueue_style( 'fullpage-css-defer' );

		wp_register_style( 'fontawesome-defer', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), time());
		wp_enqueue_style( 'fontawesome-defer' );

		wp_register_style( 'slick-css-defer', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array() );
		wp_enqueue_style( 'slick-css-defer' );
		wp_register_style( 'slick-css-theme-defer', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array() );
		wp_enqueue_style( 'slick-css-theme-defer' );

		wp_enqueue_script( 'mint-dev-bootstrap-js-defer', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );

		// wp_enqueue_script( 'mint-dev-fullpage-js-defer', get_template_directory_uri() . '/assets/js/fullpage.min.js', array(), _S_VERSION, true );
		// wp_enqueue_script( 'mint-dev-fullpage-ext-js-defer', get_template_directory_uri() . '/assets/js/fullpage.extensions.min.js', array(), _S_VERSION, true );
		
		wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'getIPs-defer', 'https://cdn.jsdelivr.net/gh/joeymalvinni/webrtc-ip/dist/bundle.dev.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'player-defer', 'https://player.vimeo.com/api/player.js', array(), _S_VERSION, true );

		// wp_enqueue_script( 'projects-js-defer', get_template_directory_uri() . '/assets/js/projects.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'jquery-ui', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array(), _S_VERSION, true );


		wp_enqueue_script( 'sticky-js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), _S_VERSION, true );

		wp_enqueue_script( 'projects-js-defer', get_template_directory_uri() . '/assets/js/projects.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'main-js-async', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'mint_dev_scripts' );


	//include custom jQuery
	function include_jquery() {

		wp_deregister_script('jquery');

		if(is_single()) {
			wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), null, true);
		} else {
			wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js', array(), null, true);
		}
		

	}
	add_action('wp_enqueue_scripts', 'include_jquery');


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

// favicons
add_action( 'wp_head', 'mint_favicon');
function mint_favicon(){
	echo "<link rel='apple-touch-icon' sizes='180x180' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='32x32' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='16x16' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='96x96' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='192x192' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='apple-touch-icon' sizes='57x57' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='apple-touch-icon' sizes='60x60' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='apple-touch-icon' sizes='72x72' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='apple-touch-icon' sizes='76x76' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='apple-touch-icon' sizes='114x114' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='apple-touch-icon' sizes='120x120' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='144x144' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='152x152' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='144x144' href='https://cylndrdev.wpenginepowered.com/wp-content/uploads/2024/07/CYL-black.png' />" . "\n";
	echo "<link rel='manifest' href="  . get_stylesheet_directory_uri() . "/assets/favicon/manifest.json'>" . "\n";
	echo "<meta name='msapplication-TileColor' content='#ffffff'>" . "\n";
	echo "<meta name='msapplication-TileImage' content='/ms-icon-144x144.png'>" . "\n";
	echo "<meta name='theme-color' content='#ffffff'>" . "\n";
}

// register custom post type: case studies

function mint_custom_post_type() {
    register_post_type('mint_projects',
        array(
            'labels'      => array(
                'name'          => __( 'Projects', 'textdomain' ),
                'singular_name' => __( 'Project', 'textdomain' ),
            ),
            'public'      => true,
			'has_archive' => true,
			'menu_icon'           => 'dashicons-format-gallery',
			'rewrite'     => array( 'slug' => 'project' ),
			'supports' => array('title', 'revisions'),
			'taxonomies'          => array( 'category' ),
        )
    );
}
add_action('init', 'mint_custom_post_type');


 /**
 * Add svg support
 *
 */
add_filter( 'wp_check_filetype_and_ext', function( $data, $file, $filename, $mimes) {
	global $wp_version;
	if( $wp_version == '4.7' || ( (float) $wp_version < 4.7 ) ) {
	return $data;
  }
  $filetype = wp_check_filetype( $filename, $mimes );
	return [
	'ext'             => $filetype['ext'],
	'type'            => $filetype['type'],
	'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function ns_mime_types( $mimes ){
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter( 'upload_mimes', 'ns_mime_types' );

function ns_fix_svg() {
echo '<style type="text/css">.attachment-266x266, .thumbnail img { width: 100% !important; height: auto !important;} </style>';
}
add_action( 'admin_head', 'ns_fix_svg' );


// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}


// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Website copy, images',
		'menu_title'	=> 'Website copy, images',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About',
		'menu_title'	=> 'About',
		'parent_slug'	=> 'theme-general-settings',
	));


	acf_add_options_sub_page(array(
		'page_title' 	=> 'Offices',
		'menu_title'	=> 'Offices',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Clients',
		'menu_title'	=> 'Clients',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Our global family',
		'menu_title'	=> 'Out global family',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'What we do',
		'menu_title'	=> 'What we do',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
}

add_image_size('project', 1000, 1000, false);
