
<?php

/** Template name :loop.php
	*Description:  The loop to be executed if there is a post
	*This is not a woocommerce template , compare to  the theme storefront loop
	*Theme: dukasite
**/?>

<div class="dukasite_loop">
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

</div> <!-- dukasite_loop -->