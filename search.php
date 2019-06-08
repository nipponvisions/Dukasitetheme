<?php
/** 
    *Template name: search.php
    * Description: used to display a visitor’s search results. (not Products)
    * Theme: Dukasitetheme
    * Author Mathenge Moses 
    * N/B this is not a woocommerce template
    *
**/



get_header( 'shop' );
 ?>
     <section class="below_header"> 
        <div id="notice"> This is search.php </div>
        
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
    </section><!-- below_header -->
    <section id="body_section_container">

        <div class="dukasite_loop">
            <?php
            if (have_posts()){

                 get_template_part('loop');
            
            }else{


                get_template_part('template-parts/post/content-none'); 
                // get sidebar with a searchfield or
                get_search_form();
            }
        
        ?>
        </div>

        <?php
     get_sidebar();
        get_footer() ; 
        ?>