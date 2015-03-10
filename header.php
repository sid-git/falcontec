<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- Bootstrap -->  
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/simple.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bxslider/jquery.bxslider.css"/>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/falcontech.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootbox.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/bxslider/jquery.bxslider.min.js"></script>
<script>
var lg=jQuery.noConflict();
lg(document).ready(function(){
	lg('.certified-logo').bxSlider({
		slideWidth: 5000,
		minSlides: 3,
		maxSlides: 3,
		slideMargin: 10,
		pager: false,
		onSliderLoad: function(){
			lg(".certified-logo").css("visibility","visible");
			lg(".certified-logo").css("height","auto");
		  }
	  });
	lg('.partners-logo').bxSlider({
		slideWidth: 5000,
		minSlides: 3,
		maxSlides: 3,
		slideMargin: 10,
		pager: false,
		onSliderLoad: function(){
			lg(".partners-logo").css("visibility","visible");
			lg(".partners-logo").css("height","auto");
		  }
	  });
});
				</script>
</head>

<body <?php body_class("clearfix"); ?>>
	<header>
        <div class="row dark-gray-bg">
            <div class="header container ">
                <div class="col-md-12 header-top">
                    <!--<span>Change Langage? <a href="#">Englsh</a> | <a href="#">中文</a></span>-->    
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-default " role="navigation">
      <div class="header container">
        <div class="col-md-12">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">FalconTech </a>
            </div>
            <div class="pull-right">
                <form class="navbar-form navbar-left" role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <div class="form-group ">
                  <input type="text" class="form-control " placeholder="Search" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                </div>
                
              </form>
              <span class="about-links">
                  <ul>
                      <li><a href="<?php echo bloginfo('url'); ?>/about">about FalconTech</a></li> | <li><a href="<?php echo bloginfo('url'); ?>/contact">contact</a></li>
                  </ul>
              </span>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
             <?php wp_nav_menu( array( 'menu' => 'main menu', 'menu_class' => 'nav navbar-nav main-nav  col-md-14' ) ); ?>
             
             
              <!--<ul class="nav navbar-nav main-nav  col-md-14">
                <li class="active home-tab"><a href="#">home <span class="sr-only">(current)</span></a></li>
                <li class="gift-tab"><a  href="#">gift</a></li>
                <li class="bio-tab"><a   href="#">bio-medical</a></li>
                <li class=" aerospace-tab"><a href="#">aerospace & engineering</a></li>
                <li class="  powders-tab" ><a  href="#">powders</a></li>
              </ul>-->
            </div><!-- /.navbar-collapse -->
        </div>
      </div><!-- /.container-fluid -->
	</nav>
    
    <div class="blue-theme <?php if(is_home() || is_front_page()) echo 'home'; ?>">
    
    <?php $page_depth=get_depth(); ?>
    <?php if($page_depth==0){
		//if it has children pages, display the first level
	  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
	  if ($children) { ?>
			<nav class="navbar  secondary-nav">
				<div class="row blue-bg">
					<div class="container">
						<div class="col-md-16">
							<ul>
								<?php echo $children; ?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
	
	  <?php }
	  
	}?>
      
      <?php if($page_depth==1){
	//display siblings first
	 $siblings = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0&depth=1');
	  if ($siblings) { ?>
			<nav class="navbar  secondary-nav">
				<div class="row blue-bg">
					<div class="container">
						<div class="col-md-16">
							<ul>
								<?php echo $siblings; ?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
	
	  <?php }
	
	
	//then display children
	  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
	  if ($children) { ?>
			<nav class="navbar  thirdary-nav">
				<div class="row">
					<div class="container">
						<div class="col-md-16">
							<ul>
								<?php echo $children; ?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
	
	  <?php }
	  
	  }?>
      
       <?php if($page_depth==2){
	//display parents first
	$ancestors= get_post_ancestors($post->post_parent);
	 $parents = wp_list_pages('title_li=&child_of='.$ancestors[0].'&echo=0&depth=1');
	  if ($parents) { ?>
			<nav class="navbar  secondary-nav">
				<div class="row blue-bg">
					<div class="container">
						<div class="col-md-16">
							<ul>
								<?php echo $parents; ?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
	
	  <?php }
	
	
	//then display siblings
	  $siblings = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0&depth=1');
	  if ($siblings) { ?>
			<nav class="navbar  thirdary-nav">
				<div class="row">
					<div class="container">
						<div class="col-md-16">
							<ul>
								<?php echo $siblings; ?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
	
	  <?php }
	  
	  }?>
    
        <div class="row partners  light-green-bg row-pad-small">
            <div class="container">
                <div class="col-md-1 divider-vertical no-pad ">
                    proudly certified by
                </div>
                <div class="col-md-4">
                    <div class="certified-logo">

                      
                      <?php 

						$images = get_field('certified_logo','option');
						
						if( $images ): ?>

								<?php foreach( $images as $image ): ?>

                                         <div class="slide"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>

								<?php endforeach; ?>

						<?php endif; ?>
                      
                      
                      
                      
                    </div>
                </div>
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-1 divider-vertical no-pad ">
                    our industry partners
                </div>
                <div class="col-md-4">
                    <div class="partners-logo">
                     <?php 

						$images = get_field('partners_logo','option');
						
						if( $images ): ?>

								<?php foreach( $images as $image ): ?>

                                         <div class="slide"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>

								<?php endforeach; ?>

						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-1">
                    
                </div>
            </div>
        </div>
        
        
        
         

            

    
