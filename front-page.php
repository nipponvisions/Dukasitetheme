<?php
 // template name: front-page.php
 // theme: dukasite
 // description: Powers the static front page of the site 
 // used when no any other  specific template is  availlable 
 // Author Moses

?>

 <?php get_header(); ?>
<!--  <div id="notice">  <p> Powered by front-page.php </p>     </div> -->
 <!-- dont insert image here -->
<!--  <img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\Ziggy_Bus_cropped.jpg"> -->

 <section class="below_header"> 
		<!--  	src https://codex.wordpress.org/Function_Reference/get_stylesheet_directory_uri -->
		<div class="banner">  <img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\salima_angle_cropped.jpg"> </div>
 </section> <!-- below_header -->



<section id="body_section_container">
	<div class="new_arrivals"> 
		<h2>      New Arrivals     </h2> 
					
		<ul>
			<li> 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ketepa.jpg" alt="ketepa" width="" height="" >    </li>
			<li>   <img src="<?php echo  get_stylesheet_directory_uri(); ?>\images\roiko_icon.jpg"  alt="Roiko_icon"> </li>
			<li>   <img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\roiko_icon.jpg"  alt="Roiko_icon"> </li>
			<li>   <img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\roiko_icon.jpg"  alt="Roiko_icon"> </li>

		</ul>

	</div> <!--new_arrivals -->

	<!-- columns -->
	<div class="featured_items_columns">

		<div class="box Hairs">
 	 		<h3> Human Hair Pieces and Wigs   </h3>
 	 		<img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\Hair_Wigs.jpg" alt="Hair_Wigs">
 	 	</div>
 	 	<div class="box Fabrics">	
 	 		<h3> African print Fabrics and head scarfs </h3>
 	 		<img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\African_materials.jpg" alt="African_materials">
 	 	</div>
 	 	<div class="box Cuisines">	
 			<h3> African Cuisines and Delicacies </h3>
 			<img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\shelf_2.jpg"  alt="shelf_2">
 	 	</div>
 	 	<div class="box outfits">
 			<h3> African Ceremonial outfits </h3>
 			<img src="<?php  echo get_stylesheet_directory_uri(); ?>\images\dakishi_red.jpg"  alt="dakishi_red">
 	 	</div>

	</div><!-- featured_items_columns -->

</section> <!-- body_section_container -->

<?php get_footer();