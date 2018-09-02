<?php
/** Template name: page.php
    *Description: the background  Template For  All Pages
    *N/B this is not a woocommerce template
**/

?>
<?php   get_header('shop'); ?>
<div id="body_section_container">
    <div id="notice"> This is page.php </div>


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
                 // do_action( 'woocommerce_archive_description' );
                ?>
          

            
<?php

    if (have_posts()) {
        ?>
             <div class="dukasite_loop">
                <?php
                    
                    # Continue with the rest of the loop
                    get_template_part('loop');
                ?>
            </div>

        <?php
    }// end if
?>



 <?php  get_sidebar('shop'); ?>  

<div style="clear:both"></div>
</div><!--body_section_container -->
<?php get_footer(); ?>
<!--dont close  footer -->
