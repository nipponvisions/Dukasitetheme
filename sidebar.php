<?php
/* Template Name: Sidebar.php
	theme: dukasite
	by Moses
*/

?>

<div id="sidebar">
	<p> This is Moses Sidebar for Dukatheme  </p>

	     <?php get_template_part('/woocommerce/product-searchform'); ?>

		<?php dynamic_sidebar('widgetized-area') ; ?>
		
</div>  <!-- close sidebar --> 
