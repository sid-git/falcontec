<?php
/**
  * Template Name: Landing Page Booking Template
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	 
<?php include 'banner_bread_head.php'; ?>
    
    <div class="row white-bg">
            <div class="container-fuild white-bg "> 
                <div class="col-md-12 main full-content">
                    <div class="row white-bg row-margin-small block">
                        <div class="container">   
                       		<p> Fill out the form beloow to make an online enquiry. A member of the team will be in contract within 24 hours to discuss the booking.</p> 
                       </div>
                    </div>
                    <div class="row light-gray-bg-2 test-form-block"> 
                        <div class="container"> 
                            <h2 class="text-center">test details</h2>
                            <div class="test-form" id="material-details"> 
                            	<ul>    
                                    <li>    
                                        <h4>Material</h4>
                                        
                                         
                            <input autocomplete="off" class="input" id="booking-mater-1" type="text" placeholder="What Material Do you need to Test?" data-items="8"/><button class="btn add-more" type="button"><span class="glyphicon glyphicon-plus-sign " aria-hidden="true"></span>Add More Materials</button>
                        
                                    </li>
                                     <li>    
                                        <h4>Type of Testing</h4>
                                        <?
                                        $composition = get_field('type_of_testing');
											$composition = explode("<br />", $composition);
											
											?>
                                        
                                         <select id="booking-type-1" class="selectpicker">
                                            <?php
												foreach ($composition as $composi){
													if($composi!=''){
														echo "<option>".$composi."</option>";	
													}
												}
											
											?>
                                       </select>
                                    </li>
                                     <li>    
                                        <h4>Testing Environment</h4>
                                        <input autocomplete="off" class="input" id="booking-envir-1" type="text" />
                                        
                                    </li>
                                     <li>    
                                        <h4>Deliverable Date</h4>
                                        <input id="date-picker-1" type="text" class="date-picker form-control" />
                                    </li>
                                </ul>
                                
                               
                            </div>
                        </div>
                    </div>
                    <div class="row light-gray-bg-2 test-form-block"> 
                        <div class="container"> 
                 
                            <h2 class="text-center">contact details</h2>
                            <div class="test-form">
                                <?php echo do_shortcode('[contact-form-7 id="96" title="Book Facility"]'); ?>
                            </div>
                       
                   		</div>
                    </div>



                    
                    
                </div>

            </div>

    </div>




 
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css">

<script>
  var jq172 = jQuery.noConflict();
  var addclick=1;

  //jQuery('.date-picker').datepicker();
  
  jq172(".date-picker").datepicker();
  jq172('body').on("focus",".date-picker", function(){
		jq172(this).datepicker();
	});

	
  jq172('.add-more').click(function(){
		addclick++;
		var morefield='<ul><li><h4>Material</h4><input autocomplete="off" class="input" id="booking-mater-'+addclick+'" type="text" placeholder="What Material Do you need to Test?" data-items="8"/><button class="btn remove-more " type="button"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>Remove Materials</button></li><li><h4>Type of Testing</h4><select id="booking-type-'+addclick+'" class="selectpicker"><option>Mustard</option><option>Ketchup</option><option>Relish</option></select></li><li><h4>Testing Environment</h4><input id="booking-envir-'+addclick+'" /></li><li><h4>Deliverable Date</h4><input id="date-picker-'+addclick+'" type="text" class="date-picker form-control" /></li></ul>';
		//var morefield = '<input id="date-picker-'+addclick+'" type="text" class="date-picker form-control" />';
	
	
		jq172('#material-details').append(morefield).fadeIn(); 
		
		jq172('.remove-more').click(function(){
			jQuery(this).parents('ul').remove();
		});
	
	});
	
	jq172('.wpcf7-submit').click(function(){
		var addhtml='';
		for(var i=1; i<addclick+1; i++ ){
			var mater=jq172('#booking-mater-'+i).val();
			var type=jq172('#booking-type-'+i).val();
			var envir=jq172('#booking-envir-'+i).val();
			var date=jq172('#date-picker-'+i).val();
			if((mater!='')||(master!=null)){
				addhtml+='<tr><td>'+mater+'</td><td>'+type+'</td><td>'+envir+'</td><td>'+date+'</td></tr>';
			}
		}
		
		jq172('#booking-hidden').val(addhtml);
		
	});

</script>


                

<?php endwhile; ?>
<?php get_footer(); ?>