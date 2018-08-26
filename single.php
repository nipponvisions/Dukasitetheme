<?php
    /** Template name: single.php
        *Description: The template for  displaying  Single posts
        *Author Mathenge Moses 
        * N/B this is not a woocommerce template
    **/
?>
<?php   get_header('shop'); ?>
<!-- dont insert image here -->
<!-- <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg"> -->
<!-- instead use this link in the wordpree pages editor -->
<!-- http://localhost/DEV/Dukasite\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg -->


      <div id="notice"> This is single.php its to display single posts </div>






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
          
      
            <div id="body_section_container"> 

        <?php
            if (have_posts()) {
            # code...

                get_template_part('loop');

            }// end iff
           
        ?>

    </div> <!-- body_section_container -->

   
<div class="clearFloat"></div>
 <footer>
 <?php  get_footer(); ?>
 <!--dont close footer -->