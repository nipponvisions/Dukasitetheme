<?php
// dukatheme dukasite

//header image
$defaults = array(
	'default-image'          => '',
	'width'                  => 1050,
	'height'                 => 300,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


// register menu locations
 register_nav_menus(array(
 	'Header Menu' =>'header_menu',
 	'Footer Menu' =>'footer_menu'
 	)
 );
 
 // REGISTER SIDEBARS 

 
 
// register sidebar ,an area ran inthe admin ready to receive widgets 
			// https://digwp.com/2010/02/how-to-widgetize-wordpress-theme/
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'Drag Any Widgets here to Displsy on screen .',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}



// declayer woo commerce support
function dukasite_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
  
        // thumbnail_image_width, single_image_width, etc.
        'thumbnail_image_width' =>100,
        'gallery_thumbnail_image_width' => 100,
        'single_image_width' =>500,
 
        // Product grid theme settings
     	
    ) );
}
add_action( 'after_setup_theme', 'dukasite_add_woocommerce_support' );



remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination');
add_action('dukasite_after_shop_loop', 'woocommerce_pagination');





//  unhook the WooCommerce wrappers
// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
//remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);



// PRODUCT GALLERY 
// https://woocommerce.wordpress.com/2017/02/28/adding-support-for-woocommerce-2-7s-new-gallery-feature-to-your-theme/

add_action( 'after_setup_theme', 'dukasitetheme_setup' ); 
function dukasitetheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}



// https://www.youtube.com/watch?v=t0swZkgTQnk 
//  https://developer.wordpress.org/themes/basics/including-css-javascript/
function add_dukasite_javascripts(){
	// register script
	// wp_register_script('one_ofthe_scripts', get_template_directory_uri() .'/scripts/one_ofthe_scripts.js');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script('one_ofthe_scripts', get_template_directory_uri() . '/scripts/one_ofthe_scripts.js', array('jquery'), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'add_dukasite_javascripts');


// DUKASITE hOOKS


function dukasite_content_layout_setup(){
	?>
		<div id="container"> 
		<div class="flex_container">
	<?php
}
add_action('page_content_layout_setup', 'dukasite_content_layout_setup');

function dukasite_after_loop_wrappers(){
	?>
		</div> <!-- close flexbox2 -->
		<!-- <div style="clear:both"></div> -->
		</div> <!--  close flex container -->
	<?php
}
add_action('page_after_loop_wrappers', 'dukasite_after_loop_wrappers');
