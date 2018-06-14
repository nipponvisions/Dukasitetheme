<?php

/** Template name: content-none
* Description : The template part for displaying a message when  posts cannot be found.
*Theme: Dukasite


**/


?>
<?php get_header('shop'); ?>

    <div id="container"> 
        <div class="flex_container">
            <div class="sidebar"> <!-- flex_box 1 -->
                <?php get_sidebar(); ?> 
            </div> <!-- sidebar  1 -->
            <div class="flex_box2  ">   

				<?php

					if('is_search'){
						?>

						<div class="no-results not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'storefront' ); ?></h1>
						</header><!-- .page-header -->

						<h3> Sorry Your Search For : <span class="empty_query"> <?php echo  get_search_query(); ?> </span> Did Not yield results! </h3>
						<p>  Please Try again with some different keywords. </p>

						</div>
						<?php     
					 } // end if_search
				?>

			</div> <!-- flex_box2 -->
		</div> <!-- flex_container -->



