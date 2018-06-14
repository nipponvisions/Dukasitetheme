<?php
/**  Template name: search.php
 * Description: The Template for displaying search results 
 * Theme: dukasite

 **/

?>
<?php  get_header(); ?>



		<?php
			if (have_posts()) {
				// continue with the rest of the loop
					get_template_part('product-searchform');
			
			} else{

				get_template_part('content-none');
			}

		?>




<?php
get_sidebar();
?>
    <div style="clear:both"></div>


<?php get_footer(); ?>
<!--dont close 

