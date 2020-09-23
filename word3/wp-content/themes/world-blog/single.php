<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package world-blog
 */

get_header();
?>

<div class="page-top">
 <div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<h3>
		<?php the_title(); ?>
		</h3>
    </div>
		<div class="breadcrumb col-lg-4 col-md-4 col-sm-12 col-xs-12">
     <ul><li><?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?> </li></ul>
    </div>
  </div>
 </div>
</div>
	 
<div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	 
	   <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
   </div>
  <?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();