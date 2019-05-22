<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

 <section class="below_header"> 
    <?php  get_sidebar('top');?>  
        <?php

    /**
     * Hook: woocommerce_before_main_content.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     * @hooked WC_Structured_Data::generate_website_data() - 30
     */
     do_action( 'woocommerce_before_main_content' );

    ?>
    <header class="woocommerce-products-header">
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
        <?php endif; ?>

        <?php
        /**
         * Hook: woocommerce_archive_description.
         *
         * @hooked woocommerce_taxonomy_archive_description - 10
         * @hooked woocommerce_product_archive_description - 10
         */
         //do_action( 'woocommerce_archive_description' );
        ?>
    </header>


 <?php
if ( woocommerce_product_loop() ) {

           /**
                *Hook: dukasite_before_shop_loop
                *
                *@Hooked wc_print_notices
                *@hooked woocommerce/product-searchform
                *@Hooked woocommerce_result_count'- 20
                *@Hooked woocommerce_catalog_ordering -30
                *@hooked woocommerce_pagination', 10);
                *  custom markup  
            **/
            do_action('dukasite_before_shop_loop');
?>
</section>

<section id="body_section_container">

    <?php

         woocommerce_product_loop_start();

        if ( wc_get_loop_prop( 'total' ) ) {
            while ( have_posts() ) {
                the_post();

                /**
                 * Hook: woocommerce_shop_loop.
                 *
                 * @hooked WC_Structured_Data::generate_product_data() - 10
                 */
                  do_action( 'woocommerce_shop_loop' );

                  wc_get_template_part( 'content', 'product' );
            }
        }

         woocommerce_product_loop_end();

     
    } else {
        /**
         * Hook: woocommerce_no_products_found.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action( 'woocommerce_no_products_found' );
    }

    /**
     * Hook: woocommerce_sidebar.
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    do_action( 'woocommerce_sidebar' );

    // get_sidebar('left');

    ?>
    <div style="clear:both"></div>

<?php get_footer( 'shop' );

