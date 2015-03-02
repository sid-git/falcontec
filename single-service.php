<?php


get_header(); ?>

	<div class="container">
      <h1>Services</h1> 
      <div class="row">
        <div class="col-md-3">
          <ul class="nav services-nav list-unstyled">
		  <?php 
		  	$service_cats=get_categories( array('taxonomy' => 'servicetypes','orderby' => 'none') );
			foreach($service_cats as $service_cat){
				//echo $service_cat->slug;

				$args = array(
						'post_type' => 'service',
						'tax_query' => array(
							array(
								'taxonomy' => 'servicetypes',
								'field' => 'slug',
								'terms' => $service_cat->slug
							)
						)
					);
				$service_posts=get_posts($args);

				echo '<li><a>'.$service_cat->name.'</a>';
				echo '<ul class="list-unstyled">';

				foreach($service_posts as $service_post){
					$service_nav=explode(" - ",$service_post->post_title);
					echo '<li><a href="'.get_permalink($service_post->ID).'">'.$service_nav[1].'</a></li>';
				}
				echo '</ul>';
				echo '</li>';
				

			
				
			}	  
		  
		   ?>
            
          </ul>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php 
			/*$post_type = $post->post_type; $taxonomies = get_object_taxonomies($post_type);
				
				foreach ($taxonomies as $taxonomy) {        
			
					// get the terms related to post
					$terms = get_the_terms( $post->ID, $taxonomy );
					if ( !empty( $terms ) ) {
						foreach ( $terms as $term )
						   $term=$term->name;
					}
			
				}*/

		 ?>
        <div class="col-md-9">
          <h2 class="services-head"><?php the_title(); ?></h2>
       
          <div class="row">
            <div class="col-md-12">
              <div class=" service-img">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
              </div>
            </div>
          </div>
          <p>
            <?php the_content();?>
          </p>
          
          <?php /*?><?php if(get_field('service_repeater')){ ?>
          <div class="panel panel-default">
          	<?php while(has_sub_field('service_repeater')){ ?>
            <div class="panel-heading"><?php the_sub_field('service_attr_title') ?></div>
            <div class="panel-body">
            <?php $service_attrs=explode('<br />',get_sub_field('service_attr'));
				foreach($service_attrs as $service_attr){
            		echo '<span class="service-item">'.$service_attr.'</span>';
				}?>
            </div>
            <?php } ?>
          </div>
          <?php } ?><?php */?>
          
         <?php if(get_field('service_repeater')){ ?> 
                 <div class="panel panel-default">
                 	<?php $jey=0; ?>
                    <?php while(has_sub_field('service_repeater')){ ?>
                    <div class="panel-heading"><?php the_sub_field('service_attr_title') ?></div>
                    <div class="panel-body">
                    	<?php if(get_sub_field('service_attr')){ ?> 
                        <div id="accordion" class="panel-group accordion">
                        	<?php $key=0; ?>
                        	<?php while(has_sub_field('service_attr')){  ?>
                        	<div class="panel panel-default clearfix">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$jey?>-<?=$key?>"><?php the_sub_field('service_feature_title') ?></a>
                                    </h4>
                                </div>
                                <div id="collapse-<?=$jey?>-<?=$key?>" class="panel-collapse collapse <?php if(($jey==0)&&($key==0)) echo 'in'; ?>">
									<div class="service-feature clearfix">
                                        <p>
											<? if(get_sub_field('service_feature_image')){ ?>
                                            <img src="<?php the_sub_field('service_feature_image') ?>"  />
                                            <?php } ?>
											<?php the_sub_field('service_feature_content') ?>
                                            <?php if(get_sub_field('service_feature_link')){ ?>
                                            
                                               <a href="<?php echo get_sub_field('service_feature_link')->guid; ?>" class="btn cotewell-btn">Read More<span>&gt;</span></a>
                                           
                                            <?php } ?>
                                        </p>
									</div>
                                </div>
                            </div>
                            <?php $key++; } ?>
                        </div>
                        <?php } ?>
                    </div>
                    <?php $jey++; } ?>
                  </div>
         <?php } ?>
          
          

         <?php endwhile; // end of the loop. ?>
         
         
         </div>

      
    </div>
  </div>  
<?php get_footer(); ?>