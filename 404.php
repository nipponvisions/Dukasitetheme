
<?php
/**
*template name: 404.php
 *Description:  The template for displaying 404 pages (Not Found)
 * usually when typed at the adree bar
 **/

get_header();

?>

     <section class="below_header"> 
        <div id="notice"> powered by 404.php </div>

		<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'dukasite' ); ?></h2>
		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dukasite' ); ?></p>

		<?php get_search_form(); ?>

		<br><br> <!-- padding Botom -->

    </section><!-- below_header --> 



    <section id="body_section_container">

   <!--  	haloo world  -->
	<!--     </section>  closed in footer-->

<?php
get_footer();
