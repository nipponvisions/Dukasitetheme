<?php
/**
	* template name: front-page.php
	* theme: dukasite
	* description: Powers the static front page of the site 
	* used when no any other  specific template is  availlable 
	* this is not a woocommerce template but its used as access point to woocommerce
	* Author Moses
	* @link: src https://codex.wordpress.org/Function_Reference/get_stylesheet_directory_uri 
**/
?>
<?php get_header(); ?>
<!--  <div id="notice">  <p> Powered by front-page.php </p>     </div> -->


 <section class="below_header"> 

 	 <?php get_sidebar('top'); // search products ?> 

	
	<div class="banner">
		<!--   <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/A_R_bannerA_R_banner.jpg" alt="A_R_banner">  -->
		<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/A_R_banner.jpg" alt="A_R_banner"> 
	</div>
 </section> <!-- below_header -->

<section id="body_section_container">
	<div class="new_arrivals"> 

		<h2>  <span>    New Arrivals </span>    </h2> 			
		<ul>
			<!-- NB NOTE THE DIFFERENCE BETWEEN GET PAGE LINK NAD GET CATEGORY LINK FOR GROUPED ITEMS -->
			<li>
				<a href="<?php  echo get_page_link(278); ?> ">
					<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/ketepa.jpg" alt="ketepa"><span> Tea  </span> 
 	 			</a>  
 	 		</li>
			<li>
				<a href="<?php  echo get_page_link(279); ?> ">
				   <img src="<?php echo  get_stylesheet_directory_uri(); ?>/assets/images/roiko_icon.jpg"  alt="Roiko_icon"> <span> Roiko </span> 
				 </a>
			</li>
			<li>
				<a href="<?php   echo get_category_link(92); ?> ">
					<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/Hair_wigs.jpg"  alt="Hair_wigs"><span> Wigs </span>
				</a>
			 </li>
			<li>   <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/yams_icon.jpg"  alt="yams_icon"> <span> Yams </span></li>
		</ul>

	</div> <!--new_arrivals -->

	<div class="home_promo">
		<h2> <span> GET STYLISH BE AUTHENTIC </span> </h2> 	
		<ul>

			<li >
				  <a href=""> <img  src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/headscarfs/headscarf_3.jpg"  alt="headscarf_3"> 
				 <h3> African print head scarfs </h3> </a> 
				</li>
			<li > 
				<a href=""> <img  src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/orange_dakishi.jpeg"  alt="orange_dakishi"> 
				 <h3> African print Dakishi's </h3>  </a>  
			</li>

	

		</ul>

	</div>


<!-- columns -->
<h2> Everyday Shopping </h2>
	
<ul id="featured_items_columns" class="featured_items_columns">
		<li class="box Hairs">
			<a href="<?php  echo get_category_link(88); ?> ">  
 	 			<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/Hair_Wigs.jpg" alt="Hair_Wigs"> 
 	 			<h3> Human Hair Pieces and Wigs   </h3> 
 	 		</a>
 	 	</li>
 	 	<li class="box Fabrics">
 	 		<a href="<?php  echo get_category_link(84); ?> ">  	
	 	 		<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/African_materials.jpg" alt="African_materials">
	 	 		<h3> African print Fabrics and head scarfs </h3>
 	 		</a>
 	 	</li>

 	 	<li class="box Cuisines">	
 			<a href="<?php  echo get_category_link(86); ?> ">
	 			<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/shelf_2.jpg"  alt="shelf_2"> 
	 			<h3> African Cuisines and Delicacies </h3>
 			</a>
 	 	</li>

 	 	<li class="box outfits">
 	 		<a href="<?php  echo get_category_link(84); ?>"> 
 	 		<!-- 	<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/dakishi_red.jpg"  alt="dakishi_red"> -->
 	 				<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/leggings_rear.jpg"  alt="dakishi_red">
 	 				<h3> African Ceremonial outfits </h3>
 	 		 </a>
 	 	</li>
	</ul><!-- featured_items_columns -->

	<h1> African Groceries  </h1>


	<ul id="featured_items_columns" class="featured_items_columns">
		<li class="box Hairs">
			<a href="<?php  echo get_category_link(88); ?> ">  
 	 			<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/Hair_Wigs.jpg" alt="Hair_Wigs"> 
 	 			<h3> Human Hair Pieces and Wigs   </h3> 
 	 		</a>
 	 	</li>
 	 	<li class="box Fabrics">
 	 		<a href="<?php  echo get_category_link(84); ?> ">  	
	 	 		<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/African_materials.jpg" alt="African_materials">
	 	 		<h3> African print Fabrics and head scarfs </h3>
 	 		</a>
 	 	</li>

 	 	<li class="box Cuisines">	
 			<a href="<?php  echo get_category_link(86); ?> ">
	 			<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/shelf_2.jpg"  alt="shelf_2"> 
	 			<h3> African Cuisines and Delicacies </h3>
 			</a>
 	 	</li>

 	 	<li class="box outfits">
 	 		<a href="<?php  echo get_category_link(84); ?>"> 
 	 		<!-- 	<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/dakishi_red.jpg"  alt="dakishi_red"> -->
 	 				<img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/Shelf_3.jpg"  alt="Shelf_3">
 	 				<h3> African Cerials Njahi </h3>
 	 		 </a>
 	 	</li>
	</ul><!-- featured_items_columns -->
<?php get_footer();
