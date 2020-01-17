<?php
/* template name: footer.php

    *theme: dukatheme 
    *description: the footer section 
    *author: Mathenge Moses

 */
 ?>
                <div style="clear:both"></div>  
            </section> <!--body_section_container -->

            <footer>  
                <div class="footer_flex_container">
                    <div class= "footer_flex">
                        <h5>Jump To: </h5>
                        

                            <!--  Quick Links  -->
                            <?php  wp_list_pages() ; ?>
                

                <!-- <ul>
                            <li> Home </li>
                            <li> About Us</li>
                            <li> Services  </li>
                            <li> Training</li>
                            <li> Contact Us </li>
                             <li> Sitemap </li>

                                <li> About Us</li>
                                <li> Services  </li>
                                <li> Training</li>
                                <li> Contact Us </li>

                                <li> About Us</li>
                                <li> Services  </li>
                                <li> Training</li>
                                <li> Contact Us </li>
                                <li> About Us</li>
                                <li> Services  </li>
                                <li> Training</li>
                                <li> Contact Us </li> 
                        </ul>
                    -->

                   

                    </div>

                    <div class ="footer_flex">
                        <!--social media -->
                        <?php get_template_part('template-parts/footer/socialmedia','footer'); ?>
             
                    </div>
                    <div class="footer_flex"> 
                        <h5> Site Designed and Maintained BY: </h5>

                        <ul>
              
                            <li>- copyright: @ Newenglandaudiovisualservices <br> Octomber 2019 </li>
                           <li>
                                <address>
                                Author: <a href="mailto:Newenglandaudiovisualservices@gmail.com"> Moses Mat </a>.<br>
                                Visit us at: Newengland Audio Visual Services <br>
                                www.newenglandaudiovisualservices.com <br> 
                                Box 564, Disneyland <br>
                                USA
                                </address> 
                            </li> 
                            <li>- Related Documents:  </li> 

                        </ul>
                       
                     </div>

                </div>

              
            </footer>
        </div><!--main_container-->
        
        <?php wp_footer(); ?>             
    </body>
</html>
