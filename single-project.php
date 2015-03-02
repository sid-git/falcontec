<?php


get_header(); ?>
 <div class="container">
 <?php while ( have_posts() ) : the_post(); ?>
      <div class="row">
        <div class="col-md-8">
        	<h1><?php the_title(); ?></h1>
        </div>
        <div class="col-md-4  clearfix project-detail-nav sm-bottom-spacer">
          <ul>
            <li><a href="<?php bloginfo('url') ?>/projects">Back to projects</a></li>
            <?php if(get_previous_post_link("%link","Previous")){ echo '| <li>'.get_previous_post_link("%link","Previous").'</li>';} ?>
            <?php if(get_next_post_link("%link","Next")){ echo '| <li>'.get_next_post_link("%link","Next").'</li>';} ?>
          </ul>
        </div>
      </div>
      

  
  
    
    <div class="row">
      <div class="col-md-8">
      	<!-- main slider carousel -->
        <div class="col-md-12 sm-bottom-spacer" id="slider" >
            
                <div class="project-big-img" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                        
                            <?php $images=get_field('image_gallery');
								if($images){
									foreach($images as $key=>$image){
							 ?>
                                    <div class="item <?php if($key==0) echo 'active'; ?>" data-slide-number="<?php echo $key; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive">
                                    </div>
                            <?php
									}
								}
							?>
                        </div>
                        <!-- main slider carousel nav controls --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                </div>

        </div>
   
        <!--/main slider carousel-->
        
        <!-- thumb navigation carousel -->
        <div class="col-md-12 hidden-sm hidden-xs carousel project-slider-thumb" id="slider-thumbs">
            
                <!-- thumb navigation carousel items -->
              <ul class="list-inline ">
             		 <?php $images=get_field('image_gallery');
						  if($images){
							  foreach($images as $key=>$image){
					   ?>
                              <li class="col-md-2"> 
                              	<a id="carousel-selector-<?php echo $key; ?>" class="slider-thumbs <?php if($key==0) echo 'selected'; ?>">
                                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive">
                              	</a>
                              </li>
					  <?php
							  }
						  }
					  ?>
              </ul>
            
        </div>
    
    
    
      </div>
     
      <div class="col-md-4 project-single-des">
        <h2>Services</h2>
        <p><i>
          <?php the_field('project_service'); ?>
        </i></p>
        <h2>About</h2>
        <p>
          <?php the_field('project_about'); ?>
        </p>
    
      </div>
  </div>
  <?php endwhile; ?>
</div>

      
    









<?php get_footer(); ?>