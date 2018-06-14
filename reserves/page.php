<?php
/** Template name: page.php
* Description: the background  Template For  All Pages
* N/B this is not a woocommerce template
**/

?>
<?php   get_header('shop'); ?>

<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );





     
        if (have_posts()) {
            // continue with the rest of the loop
            get_template_part('loop');
        }// close if 

    /** hook: clossing_loop_wrappers
        *@hooked </div> <!-- close flexbox2 --> 
        *@hooked <!-- <div style="clear:both"></div> -->
        *hooked  </div> <!--  close flex container -->
    **/
    do_action('page_after_loop_wrappers');

?>

    <div class="below_flexbox_container">

            <p> This is a below flex P. </p>

        <!--<div style="clear:both"> </div>     --> 
    </div><!-- below_flexbox_container -->

<div id="footer">
<?php get_footer(); ?>
<!--dont close 



