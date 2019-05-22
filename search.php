<?php
/** 
    *Template name: search.php
    * Description: used to display a visitor’s search results. (not Products)
    * Theme: Dukasitetheme
    * Author Mathenge Moses 
    * N/B this is not a woocommerce template
    *
**/

?>
<?php get_header( 'shop' ); ?>
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

        <?php
        if (have_posts()){
            #
            ?>
            <div class="dukasite_loop">
            <?php get_template_part('loop'); ?>
            </div>

            <?php
        }else{
            #
            ?>
            <div class="dukasite_loop">
        
         <?php get_template_part('template-parts/post/content-none'); ?>
            <!-- get sidebar with a searchfield or  -->
            <?php  get_search_form();  ?>

            </div>
            <?php
        }

get_sidebar('shop'); 
get_footer('shop') ; 

?>
