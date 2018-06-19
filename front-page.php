<?php
 // template name: front-page.php
 // theme: dukasite
 // description: tPowers the static front page of the site 
 // used when no any other  specific template is  availlable 
 // Author Moses

?>

 <?php get_header(); ?>
 <div id="notice">  <p> Powered by front-page.php </p>     </div>
 <!-- dont insert image here -->
 <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg">
<!-- instead use this link in the wordpree pages editor -->
<!-- http://localhost/DEV/Dukasite\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg -->

 	<div id="body_section_container"> 

 		<?php
	 		if (have_posts()) {
	 			# code...
	 			get_template_part('loop');



	 		}//end if
	 	?>

 	</div> <!-- body_section_container -->
 <footer>
 <?php  get_footer(); ?>
 <!--dont close footer -->
 