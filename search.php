<?php
    /** Template name: search.php
        *Description: The template for  displaying  search results
        Theme: Dukasitetheme
        *Author Mathenge Moses 
        * N/B this is not a woocommerce template

    **/

?>
<?php   get_header('shop'); ?>
<!-- dont insert image here -->
<!-- <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg"> -->
<!-- instead use this link in the wordpree pages editor -->
<!-- http://localhost/DEV/Dukasite\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg -->

    <div id="body_section_container"> 
      <div id="notice"> powered by search.php </div>

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
        } else{

        	echo "Sorry Nothin Matched Your Search";
        }
       

?>


<?php
// get_sidebar();
?>
<?php
get_sidebar('sitesearch');
?>




    <div style="clear:both"></div>


<?php get_footer(); ?>
<!--dont close 
