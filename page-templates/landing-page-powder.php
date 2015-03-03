<?php
/**
  * Template Name: Landing Page Powder Template
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 
	<?php if(get_field('banner_image')!=''){ ?>
     <div class="row banner powder">
        <div class="container">
            <div class="banner-des col-md-5 pull-right">
                <h3 class="medium-light-blue-text"><?php echo get_the_title(); ?></h3> 
                <h2 class="white-text"><?php the_field('banner_heading'); ?></h2>
                <p class="sub-font white-text">
                    <?php the_field('banner_text'); ?>
                </p>  
            </div>
        </div>
            <img src="<?php the_field('banner_image'); ?>" alt="">
    </div>
    <?php } ?>
    <div class="row light-gray-bg">   
            <div class="container"> 
                <?php the_breadcrumb(); ?>
            </div>
    </div>
    <div class="row light-purple-bg ">
            <div class=" container row-pad"> 
                <div class="col-md-12 main full-content clearfix">
                    <div class="row clearfix">
                    
                    
                    <?php

					// check if the repeater field has rows of data
					if( have_rows('repeat_top_two_grids') ):
					
						// loop through the rows of data
						while ( have_rows('repeat_top_two_grids') ) : the_row();
					
							?>
							<div class="col-md-6">
                            <div class="col-md-5">
                            	<img src="<?php the_sub_field('top_grid_image'); ?>" alt="">
                            </div>
                            <div class="col-md-7">
                                <h3><?php the_sub_field('top_grid_title'); ?></h3>
                                <p>
                                   <?php the_sub_field('top_grid_excerpt'); ?>
                                </p>
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
            <div class="row  row-margin-top clearfix light-gray-bg-2">
                      <div class="container clearfix">
                        <div class="powder-tabs clearfix">
                            <ul class="  nav-justified ">
                            
                            <?php
							function slug($string){
								$string=str_replace(" ","-",$string);
								$string=str_replace(",","-",$string);
								$string=str_replace("(","-",$string);
								$string=str_replace(")","-",$string);
								$string=strtolower($string);
								return $string;
								
							}
							
							
							if( have_rows('repeat_powder') ){
								$count=1;
								while( have_rows('repeat_powder') ): the_row(); 
								
								$powder_title=get_sub_field('powder_title');
								$powder_title_slug=slug($powder_title);
							?>
								<li <?php if($count==1){echo 'class="active"';} ?>><a href="#<?php echo $powder_title_slug; ?>"  data-toggle="tab"><?php echo $powder_title; ?></a></li>
							<?php	
								$count++;
								endwhile;
							}//endif
							
							?>
                            

                          </ul>
                        
                        <div class="tab-content  clearfix powder-tabs-content white-bg row-pad-small ">
                        
                        <?php
							if( have_rows('repeat_powder') ){
								$tab_count=1;
								while( have_rows('repeat_powder') ): the_row(); 
								
								$powder_title=get_sub_field('powder_title');
								$powder_title_slug=slug($powder_title);
							?>
								
                                <div role="tabpanel" id="<?php echo $powder_title_slug; ?>" class="tab-pane clearfix fade <?php if($tab_count==1){echo 'in active';} ?> powder-tabs-content-single ">
                                <?php echo wpautop(get_sub_field('powder_content')); ?>
                                
                                <table class="powder-table row-margin table clearfix">
                                    <tr class="powder-table title">
                                        <th>alloy</th>
                                        <th colspan="2">chemical composition
                                            <table width="100%">
                          
                                                <tr>
                                                    <td colspan="1">comp 1</td>
                                                    <td colspan="1">comp2</td>
                                                </tr>
                                            </table>
                                        </th>
                                        <th colspan="3">standards
                                            <table width="100%">
                                                <tr>
                                                    <td colspan="1">uns</td>
                                                    <td colspan="1">astm</td>
                                                     <td colspan="1">ams</td>
                                                </tr>
                                            </table>
                                        </th>
                                        <th>composition</th>
                                        <th>qty</th>
                                        <th>order</th>
                                    </tr>
                                    
                                  <?php  
                                    while( have_rows('powder_table') ): the_row(); 
								
											$alloy=get_sub_field('alloy');
											$comp1=get_sub_field('comp1');
											$comp2=get_sub_field('comp2');
											$uns=get_sub_field('uns');
											$astm=get_sub_field('astm');
											$ams=get_sub_field('ams');
											
											$composition = get_sub_field('composition');
											$composition = explode("<br />", $composition);
											$composition_size = count($composition);
											
									?>
                                    
                                    <tr class="powder-table details" id="<?php echo slug($alloy); ?>">
                                        <td id="<?php echo slug($alloy); ?>-alloy"><?php echo $alloy; ?></td>
                                        <td id="<?php echo slug($alloy); ?>-comp1"><?php echo $comp1; ?></td>
                                        <td id="<?php echo slug($alloy); ?>-comp2"><?php echo $comp2; ?></td>
                                        <td id="<?php echo slug($alloy); ?>-uns"><?php echo $uns; ?></td>
                                        <td id="<?php echo slug($alloy); ?>-astm"><?php echo $astm; ?></td>
                                        <td id="<?php echo slug($alloy); ?>-ams"><?php echo $ams; ?></td>
                                     
                                        <td>
                                        <?php   $comcounter=0;
												foreach ($composition as $composi){
													$comcounter++;
													if($composi!=''){
														echo '<li id="'.slug($alloy).'-sel-'.$comcounter.'">'.$composi.'</li>';	
													}
												}
											
											?>
                                        
                                        
                                        </td>
                                        <td>
                                        <?php   $comcounter=0;
												foreach ($composition as $composi){
													$comcounter++;
													if($composi!=''){
														echo '<li><input id="'.slug($alloy).'-qty-'.$comcounter.'" type="number"></li>';	
													}
												}
											
											?>

                                        </td>
                                        <td>
                                        <?php   $comcounter=0;
												foreach ($composition as $composi){
													$comcounter++;
													if($composi!=''){
														echo '<li><a id="'.slug($alloy).'-btn-'.$comcounter.'" class="btn">add to order</a></li>';	
													}
												}
											
											?>

                                        </td>
                                    </tr>
                                    
                                    <script type="text/javascript">
									function jsslug(str){
										str=str.replace(" ","-");
										str=str.replace(",","-");
										str=str.replace("(","-");
										str=str.replace(")","-");
										str=str.toLowerCase();
										return str;
										
									}
									
										<?php for($i=1; $i<$composition_size+1; $i++){ ?>
										jQuery('#<?php echo slug($alloy); ?>-btn-<?php echo $i; ?>').click(function(){
											var alloy = jQuery('#<?php echo slug($alloy); ?>-alloy').text();
											var comp1 = jQuery('#<?php echo slug($alloy); ?>-comp1').text();
											var comp2 = jQuery('#<?php echo slug($alloy); ?>-comp2').text();
											var uns = jQuery('#<?php echo slug($alloy); ?>-uns').text();
											var astm = jQuery('#<?php echo slug($alloy); ?>-astm').text();
											var ams = jQuery('#<?php echo slug($alloy); ?>-ams').text();
											var sel = jQuery('#<?php echo slug($alloy); ?>-sel-<?php echo $i; ?>').text();
											var qty = jQuery('#<?php echo slug($alloy); ?>-qty-<?php echo $i; ?>').val();
											
											var addhtml = '<tr id="'+jsslug(alloy.toLowerCase())+'-row-<?=$i?>" class="powder-summary details"><td colspan="2">'+alloy+'</td><td colspan="2">'+comp1+comp2+'</td><td>'+sel+'</td><td>'+qty+'</td><td><a id="'+jsslug(alloy.toLowerCase())+'-remove-<?=$i?>" class="btn remove">X remove</a></td></tr>';
											
											//var addemailhtml = '<tr id="'+alloy.toLowerCase()+'-row" class="powder-summary details"><td colspan="2">'+alloy+'</td><td colspan="2">'+comp1+comp2+'</td><td>'+sel+'</td><td>'+qty+'</td></tr>';
											if(qty>0){
												jQuery('.powder-summary-table table').append(addhtml);
												
												//jQuery('table.powder-table').before('<div class="alert alert-success"  role="alert">The selected product has been added to your request list.</div>');
												//jQuery('.alert-success').delay(3000).fadeOut('slow');
												
												bootbox.alert('<div class="alert alert-success"  role="alert">The selected product has been added to your request list.</div>');
												
												jQuery('#hidden-powder').val(jQuery('#hidden-powder').val()+addhtml);
												jQuery('#<?php echo slug($alloy); ?>-remove-<?=$i?>').click(function(){	
													jQuery('#<?php echo slug($alloy); ?>-row-<?=$i?>').remove();
													jQuery('#hidden-powder').val(jQuery('.powder-summary-table table').html());
													
													//alert(jQuery('#hidden-powder').val());
												});
											}else{
												//jQuery('table.powder-table').before('<div class="alert alert-danger"  role="alert">Please type in a valid quantity number.</div>');
												//jQuery('.alert-danger').delay(3000).fadeOut('slow');
												bootbox.alert('<div class="alert alert-danger"  role="alert">Please type in a valid quantity number.</div>');

											}
											
										});
										
										
										
											<?php } ?>
										
											
									</script>  
                                          
                                   <?php
											
											
									endwhile;
								
								
									?>
                                       
                                </table>

                                
                                </div>
                                
                                
                                
                                
                                
							<?php	
								$tab_count++;
								endwhile;
							}//endif
							
							?>
                        

                                
                            </div>
                            
                            
                              
                             <div class="row  powder-summary">
                                 <div class="col-md-12 row-margin-small">
                                     <h2 class="row-pad-small">order summary</h2>
                                     <div class="powder-summary-table">
                                      <table>
                                        <tr class="powder-summary title">
                                            <th colspan="2">alloy</th>
                                            <th colspan="2" >chemical composition</th>
                                            <th>particle size (microns)</th>
                                            <th>weight</th>
    
                                            
                                        </tr>
                                        
                                       
                                       
                                        </table>
    
    
                                    </div>
    
                                  </div>
    
                             </div> 
                           <a id="get-a-quote" class="row-margin-small powder-submit btn  pull-right ">get a quote</a>
                        </div>
                        
                          
                      </div>
                     
             </div>
              <div id="quote-area" class="row light-purple-bg  row-pad" style="display:none">
                  <div class="container">
             		<?php echo do_shortcode('[contact-form-7 id="81" title="Powder Quote"]'); ?>
              	  </div>
              </div>

                
    </div>

<?php endwhile; ?>
<script type="text/javascript">
jQuery('#get-a-quote').click(function(){
	jQuery('#quote-area').slideToggle();

});


</script>


<?php get_footer(); ?>