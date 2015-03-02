<?php
/**
  * Template Name: Content Page with Contact Template
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 

    <?php include 'banner_bread_head.php'; ?>
    
     
    <div class="row white-bg">
        <div class=" container white-bg row-pad"> 
            <div class="col-md-12 main full-content">
                <div class="main content-contact-table clearfix">
                
                
                
                
                
                 <?php

			// check if the repeater field has rows of data
			if( have_rows('department_grid') ):
			
				// loop through the rows of data
				while ( have_rows('department_grid') ) : the_row();
			
					?>
                      <div class="col-md-4">
                        
                            <h4 class="contact-details title"><? the_sub_field('department_title'); ?></h4>
                            
                             <?php

							// check if the repeater field has rows of data
							if( have_rows('department_details') ):
							
								// loop through the rows of data
								while ( have_rows('department_details') ) : the_row();
							
									?>
                            
                            <div class="contact-detail-box">
                                <span class="contact-details method"><? the_sub_field('contact_title'); ?></span>
                                <span class="contact-details detail"><? the_sub_field('contact_info'); ?></span>
                                <span class="contact-details info"><? the_sub_field('contact_time'); ?></span>
                            </div>
                             
                             <?php
			
								endwhile;
							
							else :
							
								// no rows found
							
							endif;
							
							?>
                        
                    </div>
               
                
                    <?php
			
				endwhile;
			
			else :
			
				// no rows found
			
			endif;
			
			?>
                
                
                    <div class="contact-detail-box">
                                <a href="<? the_field('contact_button_link'); ?>" class="btn contact-btn"><? the_field('contact_button_text'); ?></a>
                            </div>
                        
                </div>
                <div class="row row-pad clearfix ">
                    <div class="col-md-8">
                        <? the_field('google_map'); ?>
                    </div>
                    <div class="col-md-4">
                        <span class="contact-details method">address</span>
                        <span class="contact-details detail"><? the_field('contact_address'); ?></span>
                        <span class="contact-details method">email</span>
                        <span class="contact-details detail"><? the_field('contact_email'); ?></span>
                        <span class="contact-details title"><? the_field('contact_time'); ?></span>
                        <? echo do_shortcode(get_field('contact_form_shortcode')); ?>
                    </div>
                </div>
                <div class="row">
                
                 		<?php

							// check if the repeater field has rows of data
							if( have_rows('contact_footer_grid') ):
								$count=0;
								// loop through the rows of data
								while ( have_rows('contact_footer_grid') ) : the_row();
									$count++;
									?>
                            
                           <div class="col-md-3 <?php if($count>1){echo 'col-md-offset-1'; } ?>">
                                <h4><? the_sub_field('grid_title'); ?></h4>
                                <p>
                                    <? the_sub_field('grid_content'); ?>
                                </p>
                            </div>
                             
                             <?php
			
								endwhile;
							
							else :
							
								// no rows found
							
							endif;
							
							?>
                
                
                    
                </div>
            </div>
            

        </div>
    </div>
                

<?php endwhile; ?>
<?php get_footer(); ?>