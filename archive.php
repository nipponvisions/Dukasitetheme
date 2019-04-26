<?php
/*
Template name: archive.php
description:  used to display the  POSTS LIST
author : Mathenge Moses
theme: dukasitetheme
https://codex.wordpress.org/Template_Tags/wp_get_archives


*/
?>

<?php   get_header(); ?>

	<div id="notice"> Powered by archive.php </div>
	<!-- https://codex.wordpress.org/Template_Tags/wp_get_archives -->
	<h3> <?php  the_title(); ?>	</h3>

	<p id="jambo" onclick="change()">  WELCOME java testing    </p>
		
		<?php wp_get_archives('type=alpha'); ?>

<?php  get_footer() ; ?>
