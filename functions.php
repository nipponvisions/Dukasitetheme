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
// if (function_exists('register_sidebar')) {

// 	register_sidebars( 2, array(
// 		'name' => 'Widgetized Area %d',
// 		'id'   => 'widgetized-area',
// 		'description'   => 'Drag Any Widgets here to Displsy on screen .',
// 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</div>',
// 		'before_title'  => '<h4>',
// 		'after_title'   => '</h4>'
// 	)
// 	);
// }


if (function_exists('register_sidebar')) {
	# code...

	register_sidebar(
	  	array('name' => 'Main Left',
	  		'id'  => 'mainleft',
	  	)

	);


	register_sidebar(
	  	array('name' => 'Main Right',
	  		'id'  => 'mainright',
	  	)

	);
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

 // unhook the WooCommerce wrappers
//  remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination');
// add_action('dukasite_after_shop_loop', 'woocommerce_pagination');


remove_action('woocommerce_before_shop_loop', 'wc_print_notices');
remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);

add_action('result_count','woocommerce_result_count', 20);
add_action('catalog_odering','woocommerce_catalog_ordering', 30);
add_action('print_notices','wc_print_notices');
add_action('page_pagination','woocommerce_pagination', 10);

//create the below header hook  to replace the woocommerce before shop hook


function below_header_hook_markup(){
	?>
		            <div class="below_header_flex_container">
		                <div class="box product-searchform">  <?php  get_template_part('/woocommerce/product-searchform'); ?> </div>
		                <div class="box result_count">  <?php do_action('result_count');?></div>
		                <div class="box catalog_odering">  <?php do_action('catalog_odering'); ?> </div>
   						<div class="box page_pagination">  <?php do_action('page_pagination'); ?> </div>
		            
		            </div><!-- below_header_flex_container -->

		
	<?php
}
add_action('dukasite_before_shop_loop','below_header_hook_markup');
