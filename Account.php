<?php
    /** Template name: Account.php
        *Description: The template for powering the My acount page
        *Author Mathenge Moses 
        * N/B this is not a woocommerce template
    **/
?>
<?php get_header('shop'); ?>

    <section id="body_section_container"> 
        <div id="notice"> powered by account.php </div>

        <?php
            if (have_posts()) {
                # code...
                get_template_part('loop');

            }// end iff

            
             get_footer();
         ?>