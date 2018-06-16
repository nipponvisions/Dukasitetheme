<?php
/** Template name: page.php
    *Description: the background  Template For  All Pages
    *N/B this is not a woocommerce template
**/

?>
<?php   get_header('shop'); ?>
<div id="notice"> this is page.php </div>


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
     
                <?php
                /**
                 * Hook: woocommerce_archive_description.
                 *
                 * @hooked woocommerce_taxonomy_archive_description - 10
                 * @hooked woocommerce_product_archive_description - 10
                 */
                 do_action( 'woocommerce_archive_description' );
                ?>
          

            
<?php

        if (have_posts()) {
            // continue with the rest of the loop
             get_template_part('loop');
        }// close if 

?>


<?php
get_sidebar();
?>



    <div style="clear:both"></div>


<?php get_footer(); ?>
<!--dont close 
