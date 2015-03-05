<?php $banner_text_color = get_field('banner_text_color');
switch ($banner_text_color){
	case "Light":
        $banner_text_color="white-text";
        break;
    case "Dark":
        $banner_text_color="dark-gray-text";
        break;

}

 ?>




<?php if(get_field('banner_image')!=''){ ?>
     <div class="row banner">
        <div class="container">
            <div class="banner-des col-md-5 pull-right">
                <h3><?php echo get_the_title(); ?></h3> 
                <h2 class="<?=$banner_text_color?>"><?php the_field('banner_heading'); ?></h2>
                <p class="sub-font <?=$banner_text_color?>">
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
    <div class="row light-blue-bg main-heading">   
        <div class="container"> 
                <div class="col-md-12 ">  
                	<h1 class="heading blue-text divider-vertical"><?php the_title(); ?></h1>
                    <?php /*?><?php $page_depth=get_depth(); ?>
                  		<?php if($page_depth==1){ ?>
							<h1 class="heading blue-text divider-vertical"><?php the_title(); ?></h1> <h2 class="blue-text  heading"><?php the_field('sub_title') ?></h2>
						<?php }elseif($page_depth==2){ ?>
							<h1 class="heading blue-text divider-vertical"><?php echo get_the_title($post->post_parent); ?></h1> <h2 class="blue-text  heading"><?php the_title(); ?></h2>
						<?php }else{ ?>
							<h1 class="heading blue-text"><?php the_title(); ?></h1>
                      	<?php } ?><?php */?>
                </div>
        </div>
    </div>