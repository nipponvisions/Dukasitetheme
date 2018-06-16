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

    <div id="body_section_container"> 
      <div id="notice"> This is single.php itsw to display single posts </div>
        

        <?php
        if (have_posts()) {
            # code...
            while (have_posts()) {
                # code...
                the_post();
        // ---------------------------------------------------------------
        ?>

          <!--   <h2>  <?php the_title(); ?> </h2> -->
        
        <?php

                the_content() ;

        // ---------------------------------------------------------------

            } 
        } 

        ?>

    </div> <!-- body_section_container -->

 <footer>
 <?php  get_footer(); ?>
 <!--dont close footer -->
