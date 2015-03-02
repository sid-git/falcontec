<?php
/**
  * Template Name: Content Page with Sidebar Template
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 
	<?php include 'banner_bread_head.php'; ?>
     
    <div class="row white-bg">
        <div class=" container white-bg row-pad"> 
            <div class="col-md-7 main side-content">
                <?php
			
			if( have_rows('content_flexible') ):

				 // loop through the rows of data
				while ( have_rows('content_flexible') ) : the_row();
			
					if( get_row_layout() == 'content_paragraph' ):
			
						echo '<p class="sub-font intro">'.get_sub_field('content_paragraph').'</p>';
			
					elseif( get_row_layout() == 'content_heading' ): 
			
						echo '<h2 class="blue-text">'.get_sub_field('content_heading').'</h2>';
						
					elseif( get_row_layout() == 'content_shortcode' ): 
						$s = get_sub_field('content_shortcode');
						echo '<div class="col-md-12 main content-table mechanical-properties blue"> '.do_shortcode($s).'</div>';
						
					elseif( get_row_layout() == 'content_grid' ): 
			
						// check if the nested repeater field has rows of data
						if( have_rows('content_grid') ):
			
			
							// loop through the rows of data
							while ( have_rows('content_grid') ) : the_row();
			
								?>
                                 <div class="main content-list-item row-pad-small clearfix">
                                        <div class="col-md-6 ">
                                            <div class="img-container-320">
                                                <img src="<?php the_sub_field('grid_image'); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 steps">
                                            <h4 class="medium-light-blue-text"><?php the_sub_field('grid_heading_1'); ?></h4>
                                            <h3><?php the_sub_field('grid_heading_2'); ?></h3>
                                            <p class="sub-font">
                                               <?php the_sub_field('grid_content'); ?>
                                            </p>
                                        </div> 
                                    </div>
                                <?php
			
							endwhile;
			
						endif;
						
					endif;
			
				endwhile;
			
			else :
			
				// no layouts found
			
			endif;

			
			
			
			
			?>
                
                
            
            </div>
            <div class="col-md-4 col-md-offset-1 sidebar">
                <h4 class="light-gray-text">
                    Related pages
                </h4>
                <div class="col-md-12 main-content-list no-pad">
                    <?php

			// check if the repeater field has rows of data
			if( have_rows('related_pages') ):
			
				// loop through the rows of data
				while ( have_rows('related_pages') ) : the_row();
				
				$image = get_sub_field('page_image');
			
					?>
                     
                     <div class="main-content-list-item row-pad-small clearfix">
                        <div class="col-md-6 no-pad">
                            <div class="img-container-thumb">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        </div>
                        <div class="col-md-6 steps">
                            <h4 class="medium-light-blue-text"><? the_sub_field('page_title'); ?></h4>
                            <p class="sub-font">
                               <? the_sub_field('page_excerpt'); ?>
                            </p>
                            <a href="<? the_sub_field('page_link'); ?>" class="link">go to page ></a>
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

  </div>
<?php endwhile; ?>
<?php get_footer(); ?>