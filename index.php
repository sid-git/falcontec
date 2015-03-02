<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="row col-md-12">
<?php
// The Query
query_posts( array('post_type'=>'project') );

// The Loop
while ( have_posts() ) : the_post();

?>

      
        <div class="row clearfix project-grid">
          <div class="col-md-8 white-bg project-grid-img">
            <a href="#" class="thumbnails ">
              <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
            </a>
          </div>
          <div class="col-md-4 green-bg white-text project-grid-des">
            <h3>
                <?php the_title(); ?>
            </h3>
            <p>
              <?php echo substr(get_field('project_about'),0,120); ?>...
            </p>
            <h4>
              Services
            </h4>
            <p><i>
              <?php the_field('project_service'); ?>
            </i></p>
            <a href="<?php the_permalink(); ?>" class="btn cotewell-btn">
            VIEW PROJECT<span class="">></span></a>
          </div>
        </div>

        <?php endwhile;  ?>

<?php wp_simple_pagination(); ?>	
      </div>
      
    </div>

    
<?php get_footer(); ?>