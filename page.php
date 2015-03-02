<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

		<div class="container">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', get_post_format() ); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 
                        <p>
                             <?php the_content(); ?>
                        </p>
                    </div>
                 </div>
                 

			<?php endwhile; ?>


		

		</div>
    <?php //get_sidebar(); ?>
<?php get_footer(); ?>