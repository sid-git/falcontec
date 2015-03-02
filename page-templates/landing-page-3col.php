<?php
/**
  * Template Name: Landing Page 3 col Template
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
			if( have_rows('repeat_3_grid') ):
			
				// loop through the rows of data
				while ( have_rows('repeat_3_grid') ) : the_row();
			
					?>
                     <div class="col-md-4"> 
                            <a href="<?php the_sub_field('3_grid_link'); ?>"><img src="<?php the_sub_field('3_grid_image'); ?>"  alt=""></a>
                            <h3 class="row-pad-small"><?php the_sub_field('3_grid_title'); ?></h3>
                            <p class="sub-font"><?php the_sub_field('3_grid_excerpt'); ?></p>
       
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
                    <div class="col-md-5"> 
                        <div class="img-container-128">
                            <img src="<?php the_sub_field('footer_grid_image'); ?>" alt="">
                        </div> 
                        
                    </div>
                    <div class="col-md-7"> 

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