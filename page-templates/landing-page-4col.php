<?php
/**
  * Template Name: Landing Page 4 col Template
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 
	
    <?php include 'banner_bread_head.php'; ?>

    <div class="main full white-bg">   
        <div class="row row-pad">   
            <div class="container"> 
            
            
            
            <?php

			// check if the repeater field has rows of data
			if( have_rows('repeat_4_grid') ):
			
				// loop through the rows of data
				while ( have_rows('repeat_4_grid') ) : the_row();
			
					?>
                    <div class="col-md-3"> 
                        <div class="col-md-5 aerospace-box-img">  
                            <img src="<?php the_sub_field('4_grid_image'); ?>" alt="">
                        </div>
                        <div class="col-md-7">  
                            <h3><?php the_sub_field('4_grid_title'); ?></h3>
                            <p class="sub-font"><?php the_sub_field('4_grid_excerpt'); ?></p>
                            <a class="link blue row-pad-small block" href="<?php the_sub_field('4_grid_link'); ?>">read more</a>
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
                        <a href="<?php the_sub_field('footer_grid_link'); ?>" class="btn"> get directions</a>
                        
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
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>