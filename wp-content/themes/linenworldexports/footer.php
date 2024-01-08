<footer>
         <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
               <h3>Quick Links</h3>
               <?php
                   wp_nav_menu( array(
                     'theme_location' => 'footer_menu_1',
                     'menu_class' => 'foolink',
                     'container' => ''
                     )
                  ); 
               ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
               <h3>Our USP</h3>
               <?php
                   wp_nav_menu( array(
                     'theme_location' => 'footer_menu_2',
                     'menu_class' => 'foolink',
                     'container' => ''
                     )
                  ); 
               ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
               <h3>Contact Us</h3>
               <table width="100%" border="0" align="left" class="tab1">
                  <tbody>
                     <tr>
                        <td style="vertical-align: top;">
                           <?php dynamic_sidebar( 'footer-info-widget' ); ?>
                        </td>
                        <td><a href="<?php echo get_option("footer_image_link"); ?>"><img src="<?php echo get_option("footer_image"); ?>" class="flwlogo"></a></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeIn animated animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
               <p class="foocopyirght"><?php echo get_option("footer_copyright"); ?></p>
            </div>
         </div>
      </footer>
      <?php wp_footer(); ?>
      <script type="text/javascript">
         var $ = jQuery;
         new WOW().init();
         $(document).ready(function(){
            $().UItoTop({easingType:"easeOutQuart"});
            $("#dl-menu").dlmenu()
            window.onscroll=function(){
               myFunction()
            };
            var header=document.getElementById("myHeader");
            var sticky=header.offsetTop;
            function myFunction(){
               if(window.pageYOffset>=sticky){
                  header.classList.add("sticky")
               }
               else{
                  header.classList.remove("sticky")
               }
            }
         });
         document.addEventListener( 'wpcf7mailsent', function( event ) {
           location = '<?php echo home_url('thank-you'); ?>';
         }, false );
      </script>
</body>
</html>
