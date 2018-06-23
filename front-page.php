<?php
 // template name: front-page.php
 // theme: dukasite
 // description: Powers the static front page of the site 
 // used when no any other  specific template is  availlable 
 // Author Moses

?>

 <?php get_header(); ?>
 <div id="notice">  <p> Powered by front-page.php </p>     </div>
 <!-- dont insert image here -->
<!--  <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg"> -->

 
 <div class="banner">  <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\salima_angle_cropped.jpg"> </div>


<!-- instead use this link in the wordpree pages editor -->
<!-- http://localhost/DEV/Dukasite\wp-content\themes\dukasitetheme\images\Ziggy_Bus_cropped.jpg -->

<section id="body_section_container"> 

	<div class="below_banner"> 
		<div class="new_arrivals"> 
			<h2>   <center>   New Arrivals  </center>   </h2> 
		
			<ul>
				<li>  <center>  <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\roiko_icon.jpg"  alt="Roiko_icon"> </center> </li>
				<li>  <center> <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\roiko_icon.jpg"  alt="Roiko_icon"> </center></li>
				<li>  <center> <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\roiko_icon.jpg"  alt="Roiko_icon"> </center></li>
				<li>  <center> <img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\roiko_icon.jpg"  alt="Roiko_icon"> </center></li>



			</ul>

	</div> <!--new_arrivals -->


	
	<!-- columns -->
 	<div class="below_banner_flex">

 	 	<div class="box left">
 	 		<center>
	 	 		<h3> Human Hair Pieces and Wigs   </h3>
	 	 		<img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\Hair_Wigs.jpg" alt="Hair_Wigs">
	 	 	</center>
 	 	</div>
 	 	<div class="box mindle">
 	 		<center> 
	 	 		<h3> African print materials and head scarfs </h3>
	 	 		<img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\African_materials.jpg" alt="African_materials">
 	 		</center>
 	 	</div>
 	 	<div class="box right">
 	 		<center> 
 	 			<h3> African Cuisine and Delicacies </h3>
 	 			<img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\shelf_2.jpg"  alt="shelf_2">
 	 		</center>

 	 	</div>

 	 	<div class="box right">
 	 		<center> 
 	 			<h3> African Cuisine and Delicacies </h3>
 	 			<img src="<?php  bloginfo('url'); ?>\wp-content\themes\dukasitetheme\images\roiko.jpg"  alt="Roiko">
 	 		</center>
 	 		
 	 	</div>

 	</div>
 </section>

 	


 <footer>
 <?php  get_footer(); ?>
 <!--dont close footer -->
 
 	

 </div> <!-- body_section_container -->
