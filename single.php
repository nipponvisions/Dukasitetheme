<?php
    /** Template name: single.php
        *Description: The template for  displaying  Single posts
        *Author Mathenge Moses 
        * N/B this is not a woocommerce template
    **/
?>
<?php   get_header('shop'); ?>
   <div id="notice"> Powered by single.php </div>
 

        <?php
            if (have_posts()) {

            # code...
                get_template_part('loop');

            }// end iff
           
        ?>

 <?php  get_footer(); ?>
 <!--dont close footer -->