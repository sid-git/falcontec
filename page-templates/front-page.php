<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 

    <div class="row banner home ">
        <div class="container">
            <div class="banner-des col-md-5 pull-right">
                <h1 class="dark-gray-text"><?php the_field('banner_heading'); ?></h1>
                <p class="sub-font dark-gray-text ">
                   <?php the_field('banner_text'); ?>
                </p> 
                <a href="#" class="btn ">learn more about falcontech ></a>

            </div>
            
        </div>
        <img src="<?php the_field('banner_image'); ?>" alt="">   
    </div>
    
        <div class="row  white-bg">
            <div class=" container "> 
                <div class="col-md-12 row-margin-pull main full-content clearfix">
                    <div class="row">   
                    
                    
                      <?php
					
						// check if the repeater field has rows of data
						if( have_rows('first_row_repeater') ):
						
							// loop through the rows of data
							while ( have_rows('first_row_repeater') ) : the_row();
						
								?>
								 <div class="col-md-3 home-box <?php the_sub_field('grid_class'); ?>">
                                    <h2><?php the_sub_field('grid_title'); ?></h2>
                                    <div class="home-box-hover">
                                        <p>
                                            <?php the_sub_field('grid_content'); ?>
                                        </p>
                                        <a href="<?php the_sub_field('grid_link'); ?>" class="btn white-bg">View more</a> 
                                    </div>
                                </div>
								
								 <?php
						
							endwhile;
						
						else :
						
							// no rows found
						
						endif;
						
						?>
                      
                    
                      
                    </div>
                    
                    
                    <div class="row row-pad">  
                    
                    <?php
					
						// check if the repeater field has rows of data
						if( have_rows('second_row_repeater') ):
						
							// loop through the rows of data
							while ( have_rows('second_row_repeater') ) : the_row();
						
								?>
								 <div class="col-md-3 home-secondary-box">
                                  <a href="<?php the_sub_field('grid_link'); ?>"><img src="<?php the_sub_field('grid_image'); ?>" alt="">  </a>
                                  <h3 class="row-pad-small"><?php the_sub_field('grid_title'); ?></h3>
                                  <p>   
                                      <?php the_sub_field('grid_content'); ?>
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
       <div class="row row-pad light-green-bg">
            <div class="container">  
                
                <?php

			// check if the repeater field has rows of data
			if( have_rows('footer_grid_repeter') ):
			
				// loop through the rows of data
				while ( have_rows('footer_grid_repeter') ) : the_row();
			
					?>
                     
                <div class="col-md-6">  
                    <div class="col-md-4"> 
                        <div class="img-container-128">
                            <img src="<?php the_sub_field('footer_grid_image'); ?>" alt="">
                        </div> 
                        
                    </div>
                    <div class="col-md-8"> 

                        <h4 class="medium-light-blue-text"><?php the_sub_field('footer_grid_title'); ?></h4>
                        <h3><?php the_sub_field('footer_grid_second_title'); ?></h3>
                        <p class="sub-font"><?php the_sub_field('footer_grid_excerpt'); ?></p>
                        <a href="<?php the_sub_field('footer_grid_link'); ?>" class="btn"> read more</a>
                        
                    </div>
                </div>
                
                    <?php
			
				endwhile;
			
			else :
			
				// no rows found
			
			endif;
			
			?>
                
                
                
        	</div>
        </div>
<?php endwhile; ?>
<?php get_footer(); ?>