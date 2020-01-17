<?php
/**
 * The template for displaying the Dukasite header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage dukasite
 * @since Twenty Sixteen 1.0
 */


?><!DOCTYPE html>
<html>
    <head>
        <meta charset= "<?php bloginfo( 'charset' );?> " >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title();?></title>

        <!-- header image  support -->
        <style>
            .headerimage {   
          /*      background: url("<?php bloginfo('stylesheet_directory'); ?>/assets/images/african_shop_header_img.jpg");    */
                background-image: url('<?php header_image(); ?>');
                background-repeat: no-repeat;
            }
        </style>

        <?php wp_head(); ?>     
    </head>

    <body>
        <?php wp_body_open() ; ?>
        <div id="main_container"> 

            <div id="header" class="header">
                <div id="headerimage" class="headerimage">
                    <h1> <a href="<?php bloginfo('url');?>"> <?php bloginfo('name');?> </a> </h1> 

                    <div class="header_description">  
                        <h2> <?php bloginfo('description') ; ?> </h2> 
                    </div><!-- header_description -->
            </div><!-- headerimage --> 

                <nav class="header_menu">
                    <?php   wp_nav_menu(array('theme-location' =>'header_menu')); ?>
                </nav><!--header_menu -->  
            </div><!--header -->