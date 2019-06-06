
<?php

/** Template name :loop.php
	*Description:   this is the wordpress loop
	*its powers all the pages
	*This is NOT  a woocommerce template ,  
	*Theme: dukasite
	*Author: Mathenge 
**/

?>

<!-- <div class="dukasite_loop"> -->
	<?php

		# code...
		while (have_posts()) {
			# code...
			the_post();
			
			//---------------------------------------------------------------
			?>

			<h2>  <?php the_title(); ?> </h2>
				
			<?php

			the_content();

			//---------------------------------------------------------------
		} //endwhile
		
	?>