<?php
/**
 * Feb Slim functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Feb_Slim
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'feb_slim_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function feb_slim_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Feb Slim, use a find and replace
		 * to change 'feb-slim' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'feb-slim', get_template_directory() . '/languages' );

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
		// add_theme_support( 'post-thumbnails' );

		// // This theme uses wp_nav_menu() in one location.
		// register_nav_menus(
		// 	array(
		// 		'menu_1' => esc_html__( 'Menu-1', 'feb-slim' ),
		// 	)
		// );

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
				'feb_slim_custom_background_args',
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
add_action( 'after_setup_theme', 'feb_slim_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function feb_slim_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'feb_slim_content_width', 640 );
}
add_action( 'after_setup_theme', 'feb_slim_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function feb_slim_widgets_init() {

	// sidebar widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'feb-slim' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'feb-slim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// footer widget one
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer First Column', 'feb-slim' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Footer First Column.', 'feb-slim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// footer widget two
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Second Column', 'feb-slim' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Footer First Column.', 'feb-slim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// footer widget one
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Third Column', 'feb-slim' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Footer First Column.', 'feb-slim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'feb_slim_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function feb_slim_scripts() {

	/* Default JS
	----------- */
	wp_enqueue_script( 'feb-slim-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Font Awesome
	-----------*/
	wp_enqueue_script( 'fontawesome-script', '//kit.fontawesome.com/7b253b0123.js', array(), '5.15', true );
	
	/* Jquery
	-----------*/
	// wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array('jquery'), '3.6.0', true );


	/* Bootstrap
	---------------*/
	wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true );
	wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.2', true );

	/* Main/Default Css
	----------------- */
	wp_enqueue_style( 'feb-slim-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'feb-slim-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'feb_slim_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Primary menu Register
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'feb-slim' ),
) );



/* Ajax Search
-------------*/

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){


    $the_query = new WP_Query( array( 'posts_per_page' => 5, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'product' ) );

	echo '<div class="heading">VÖRUR</div>';
	echo '<ul>';
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <li>
				<div class="row">
					<div class="col-2 thumbnail text-right"><a class="titile" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<div class="col-10"><a class="titile" href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
				</div>
			</li>

        <?php endwhile;
		wp_reset_postdata();  
	else:
		echo '<h3>No Results Found</h3>';
    endif;

	echo '</ul>';
	echo '<div class="search_key">Leita að: ' . $_POST['keyword'] . '</div>';

    die();
}
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>

<script type="text/javascript">
function fetchResults(){
	var keyword = jQuery('#searchInput').val();

	if(keyword == ""){
		jQuery('#datafetch').html("");
	} else {
		jQuery.ajax({
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			type: 'post',
			data: { action: 'data_fetch', keyword: keyword  },
			success: function(data) {
				jQuery('#datafetch').html( data );
			}
		});
	}
}

// search bar open - display block
document.getElementById("search_icon").addEventListener("click", search_icon);
function search_icon(){
	document.getElementById('ajax_search_wrap').style.display = 'block';
	document.getElementById('primary').style.opacity = '.3';
}

// search bar closing - display none
document.getElementById("close_search").addEventListener("click", close_search);
function close_search(){
	opacityOK();
}

document.getElementById("primary").addEventListener("click", opacityOK);
function opacityOK(){
	document.getElementById('ajax_search_wrap').style.display = 'none';
	document.getElementById('primary').style.opacity = 'inherit';
}


</script>

<?php
}