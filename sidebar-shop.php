<?php
/* Template Name: Sidebar-shop.php
	Description:  the main sidebar for the the shop page 
	theme: dukasite
	Author: by Moses
*/

?>

<div id="sidebar">
	<p> This is  the left sidebar </p>

<!-- 	 <?php get_template_part('/woocommerce/product-searchform'); ?> -->

		<?php  dynamic_sidebar('Main Left') ; ?>
		<?php  // dynamic_sidebar('Main Right') ; ?>
		
</div>  <!-- close sidebar --> 
