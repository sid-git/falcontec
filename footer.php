<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div><!--close the theme-->
<footer>    
         <div class="row row-pad-small light-gray-bg footer-top">   
            <div class="container"> 
                <div class="col-md-4">
                	<div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/img/falcontec-logo-light.jpg" /></div>
                    <div class="col-md-4">Who we are</div>
                    
                 </div>
                 <div class="col-md-4">Falcon Tec is World Leader in Additive Maufacturing and Aerospace Testing. All Our products are held to the same rigorous international Standards.
    
                 </div>
                 <div class="col-md-4 ">
                      <a href="#" class="btn pull-right">learn more about falcontech</a>
                 </div>
            </div>

        </div>
        <div class="row  dark-gray-bg footer-middle row-pad">   
            <div class="container">
                <nav class="footer-nav col-md-12">
                    <ul>
                        <li>
                            Gift
                            <ul>
                                <li><a href="#">personalised gifts</a></li>
                                <li><a href="#">design your own</a></li>
                            </ul>
                        </li>
                         <li>
                            biomedical
                            <ul>
                                <li><a href="#">personalised gifts</a></li>
                                <li><a href="#">design your own</a></li>
                            </ul>
                        </li>
                         <li>
                            aerospace & engineering
                            <ul>
                                <li><a href="#">personalised gifts</a></li>
                                <li><a href="#">design your own</a></li>
                            </ul>
                        </li>
                         <li>
                            powders
                            <ul>
                                <li><a href="#">personalised gifts</a></li>
                                <li><a href="#">design your own</a></li>
                            </ul>
                        </li>
                         <li>
                            information
                            <ul>
                                <li><a href="#">personalised gifts</a></li>
                                <li><a href="#">design your own</a></li>
                            </ul>
                        </li>
                        <li>
                            order
                            <ul>
                                <li><a href="#">personalised gifts</a></li>
                                <li><a href="#">design your own</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
        <div class="row footer-bottom">
           <div class="container">
               Copyright Falcontech 
               <span class="pull-right">
                   Designed by <a href="www.simpleid.com">Simple iD</a>
               </span>     
           </div> 
        </div>
        </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/falcontech.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootbox.js"></script>

<script>
var lg=jQuery.noConflict();
lg(document).ready(function(){
lg('.certified-logo').bxSlider({
    slideWidth: 5000,
    minSlides: 3,
    maxSlides: 3,
    slideMargin: 10,
	pager: false
  });
lg('.partners-logo').bxSlider({
    slideWidth: 5000,
    minSlides: 3,
    maxSlides: 3,
    slideMargin: 10,
	pager: false
  });
});
				</script>

<?php wp_footer(); ?>
</body>
</html>