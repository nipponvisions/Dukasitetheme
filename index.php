<?php
 // template name: index.php
 // theme: dukasite
 // description: the Most Generic template
 // used when no any other  specific template is  availlable 
 // Author Moses

?>

 <?php get_header(); ?>
<!--  <div id="notice">  <p> Powered by dukasite theme <b> index.php </b> </p>     </div> -->

<!--  	<div id="body_section_container"> 

 		<?php
 		if (have_posts()) {
 			# code...
 			while (have_posts()) {
 				# code...
 				the_post();
 		// ---------------------------------------------------------------
 		?>

 			<h2>  <?php the_title(); ?> </h2>
		
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
 -->