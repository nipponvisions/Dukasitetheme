<?php
/** 
    * Template name: page.php
    * Description: the background  Template For  All Pages including woccommerce 
    * N/B this is not a woocommerce template
    * Theme: Dukasitetheme
    * Author: Mathenge Moses
**/


get_header( 'shop' ); ?>
     <section class="below_header"> 
        <div id="notice"> This is page.php </div>
        
        <?php get_sidebar('top'); ?> 

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
    </section>
    <section id="body_section_container">

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

        if (have_posts()){
            ?>
            <div class="dukasite_loop">
                <?php

                # Continue with the rest of the loop
                 get_template_part('loop');
            ?>
            </div><!-- dukasite_loop -->

        <?php
        }// end if
        
        get_sidebar('shop'); 
        get_footer('shop') ; 

        ?>