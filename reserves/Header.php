 <!DOCTYPE html>
<html>
    <head>
        <Meta charset="<?php bloginfo( 'charset' );?> " >
        <title><?php wp_title();?></title>

<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/css/style.css"> -->

            <!-- header image  support -->
            <style type="text/css">
                #headerimage {       
                    background-image: url('<?php header_image(); ?>');
                    background-repeat: no-repeat;
                }
            </style>

        <?php   wp_head() ;?>

        
    </head>


<!-- <body> -->
  <!--  <div id="main_container">  -->
        <div id="header">
            <div id="headerimage">
                <h1>  <a href="<?php bloginfo('url');?>"> <?php bloginfo('name');?> </a> </h1>
        
                <div class="description">  
                    <h3> <?php bloginfo('description') ; ?> </h3> 
                </div><!-- description -->
                 
            </div><!-- headerimage -->

            <nav class="header_menu">
                            <?php   wp_nav_menu(array('theme-location' =>'header_menu')); ?>
                       
            </nav><!--header_menu -->     
        </div><!-- header -->
    </div>


