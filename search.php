<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php //twentytwelve_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', get_post_format() ); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 
                        <p>
                             <?php 
							 if(get_the_content()){
								 echo substr(get_the_content(),0,200).'...';
							 }else{
								if(get_field('project_about')){
									echo substr(get_field('project_about'),0,200).'...';
								}
							 }
							 
							  ?>
                        </p>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12">
                       <a href="<?php echo get_permalink(); ?>" class="btn search-readmore">Read More<span>></span></a><br />
                    </div>
                    
                </div>
                <div class="row">
					<div class="col-lg-12">
                       <hr />
					</div>
                </div>
			<?php endwhile; ?>

			<?php //twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>