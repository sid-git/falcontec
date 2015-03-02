<?php
/**
  * Template Name: Content Page Machine List Template
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 
	<?php include 'banner_bread_head.php'; ?>
    
    <div class="row white-bg">
        <div class=" container white-bg row-pad"> 
            <div class="col-md-7 main side-content">
             <p class="sub-font intro"><?php echo get_the_content(); ?></p>
             <h2 class="blue-text"> our machines</h2>
			
            <div class="main content-list ">
                    
                    <div class="col-md-12 main-content-list-table">
                    
                    <?php
					$machine_categories = get_field('machine_categories');
					
					$args=array('post_type'=>'machine','cat'=>$machine_categories);
					// The Query
					$the_query = new WP_Query( $args );
					
					// The Loop
					if ( $the_query->have_posts() ) {

						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							?>
						
			
					<div class="main content-list-table-item row-pad-small clearfix">
                        <div class="col-md-6 ">
                            <div class="img-container-320">
                                <img src="<?php the_field('machine_image'); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 steps">
                            
                            <h3><?php the_title(); ?></h3>
                            <p class="sub-font">
                               <?php the_excerpt(); ?> 
                            </p>
                            <div class="row-pad-small">
                            
                            
                            <?php

							// check if the repeater field has rows of data
							if( have_rows('machine_attr') ):
								echo '<table class="content-table">';
								// loop through the rows of data
								while ( have_rows('machine_attr') ) : the_row();
							
							
							?>
                            
                            
                                <tr>
                                    <td><?php the_sub_field('attr_title'); ?></td>
                                    <td><?php the_sub_field('attr_value'); ?></td>
                                </tr>
                                
                                
                                <?php
									endwhile;
								echo '</table>';
								
								else :
								
									// no rows found
								
								endif;
								
								?>
                            
                            	<!--<a href="<?php //echo get_permalink(); ?>" class="btn">view full specs</a>-->
                            </div>
                          </div> 
                      </div>
			
				<?php }

					} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					
					?>
			
               </div>
               </div> 
                
            
            </div>
            <div class="col-md-4 col-md-offset-1 sidebar">
            	<?php if(the_field('featured_image')){ $feature_image = get_field('featured_image'); ?>
                    <div class="floatimg">
                            <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" />
                     </div>
                 <?php } ?>
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