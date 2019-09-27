<?php
/* template name: footer.php
	*theme: dukatheme 
	*author: Mahtenge moses

 */
 ?>

            <div style="clear:both"></div>
                
            </section> <!--body_section_container -->

            <footer>

               <!--   <h3> Duka theme footer </h3>  --> 

                <ul>     

                    <li> 
                        <h5> Jump To: </h5> 

                        <p> Homepage <br> About Us <br> Services <br> Training  <br> Contact Us </p>
                    </li>

                    <li>
                        <h5> Get in Touch: </h5> 

                        <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png" alt="facebook">
                        <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png" alt="twitter">
                        <img src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/images/mail.png" alt="mail">

                    </li> 

                    <li>
                        <h5> Designed and Maintained By: </h5>

                        <p> @ Newengland Audiovisual Services <br>
                            @Designed by KonvergeStudios
                        </p>

                    </li>

                </ul>

                <?php wp_footer(); ?> 
            </footer>

        </div><!--main_container-->
    </body>
</html>

